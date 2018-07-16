<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Twig\Extension\Component;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Translation\TranslatorInterface;
use WBW\Bundle\BootstrapBundle\Helper\NavigationTreeHelper;
use WBW\Bundle\BootstrapBundle\Navigation\NavigationNode;
use WBW\Bundle\BootstrapBundle\Navigation\NavigationTree;
use WBW\Bundle\BootstrapBundle\Twig\Extension\AbstractBootstrapTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\BootstrapRendererTwigExtension;
use WBW\Library\Core\Utility\Argument\StringUtility;

/**
 * Abstract component Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\Component
 * @abstract
 */
abstract class AbstractComponentTwigExtension extends AbstractBootstrapTwigExtension {

    /**
     * Translator.
     *
     * @var TranslatorInterface
     */
    private $translator;

    /**
     * Constructor.
     *
     * @param TranslatorInterface $translator The translator.
     */
    protected function __construct(TranslatorInterface $translator = null) {
        parent::__construct();
        $this->setTranslator($translator);
    }

    /**
     * Displays a Bootstrap alert.
     *
     * @param string $content The alert content.
     * @param boolean $dismissible Dismissible alert ?
     * @param string $class The alert class.
     * @return string Returns the Bootstrap alert.
     */
    protected function bootstrapAlert($content, $dismissible, $class) {

        // Initialize the templates.
        $template = "<div %attributes%>%innerHTML%</div>";
        $button   = "<button class=\"close\" type=\"button\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>";

        // Initialize the attributes.
        $attributes = [];

        $attributes["class"]   = ["alert", $class];
        $attributes["class"][] = true === $dismissible ? "alert-dismissible" : null;
        $attributes["role"]    = ["alert"];

        // Initialize the parameters.
        $innerHTML = (true === $dismissible ? $button : "") . (null !== $content ? $content : "");

        // Return the HTML.
        return StringUtility::replace($template, ["%attributes%", "%innerHTML%"], [StringUtility::parseArray($attributes), $innerHTML]);
    }

    /**
     * Displays a Bootstrap badge.
     *
     * @param string $content The badge content.
     * @return string Returns the Bootstrap badge.
     */
    protected function bootstrapBadge($content) {

        // Initialize the template.
        $template = "<span %attributes%>%innerHTML%</span>";

        // Initialize the attributes.
        $attributes = [];

        $attributes["class"] = ["badge"];

        // Initialize the parameters.
        $innerHTML = null !== $content ? $content : "";

        // Return the HTML.
        return StringUtility::replace($template, ["%attributes%", "%innerHTML%"], [StringUtility::parseArray($attributes), $innerHTML]);
    }

    /**
     * Displays a Bootstrap breadcrumb.
     *
     * @param NavigationNode $node The navigation node.
     * @param boolean $last Last node ?.
     * @return string Returns the Bootstrap breadcrumb.
     */
    private function bootstrapBreadcrumb(NavigationNode $node, $last) {

        // Initialize the template.
        $template = "<li%class%>%innerHTML%</li>";

        // Initialize the parameters.
        $class     = true === $node->getActive() && true == $last ? " class=\"active\"" : "";
        $innerHTML = [];

        if (false === $last) {
            $innerHTML[] = "<a href=\"";
            $innerHTML[] = $node->getRoute();
            $innerHTML[] = "\">";
        }
        $innerHTML[] = $this->getTranslator()->trans($node->getId());
        if (false === $last) {
            $innerHTML[] = "</a>";
        }

        // Return the HTML.
        return StringUtility::replace($template, ["%class%", "%innerHTML%"], [$class, implode("", $innerHTML)]);
    }

    /**
     * Displays a Bootstrap breadcrumbs.
     *
     * @param NavigationTree $tree The tree.
     * @param Request $request The request.
     * @return string Returns the Bootstrap breadcrumbs.
     */
    protected function bootstrapBreadcrumbs(NavigationTree $tree, Request $request) {

        // Initialize the template.
        $template = "<ol %attributes%>\n%innerHTML%\n</ol>";

        // Initialize the attributes.
        $attributes = [];

        $attributes["class"] = ["breadcrumb"];

        // Initialize the parameters.
        $innerHTML = [];

        // Get the breadcrumb node.
        $nodes = NavigationTreeHelper::getBreadcrumbs($tree, $request);
        $count = count($nodes);

        // Handle each breadcrumb node.
        for ($i = 0; $i < $count; ++$i) {
            if (false === ($nodes[$i] instanceOf NavigationNode)) {
                continue;
            }
            $innerHTML[] = $this->bootstrapBreadcrumb($nodes[$i], $count === $i + 1);
        }

        // Return the HTML.
        return StringUtility::replace($template, ["%attributes%", "%innerHTML%"], [StringUtility::parseArray($attributes), implode("\n", $innerHTML)]);
    }

    /**
     * Displays a Bootstrap button.
     *
     * @param string $content The button content.
     * @param string $title The button title.
     * @param string $size The button size.
     * @param boolean $block Block button ?
     * @param booelan $active Active button ?
     * @param booelan $disable Disable button ?
     * @param string $class The button class.
     * @param string $icon The button icon.
     * @return string Returns the Bootstrap button.
     */
    protected function bootstrapButton($content, $title, $size, $block, $active, $disable, $class, $icon) {

        // Initialize the template.
        $template = "<button %attributes%>%glyphicon%%innerHTML%</button>";

        // Initialize the attributes.
        $attributes = [];

        $attributes["class"]          = ["btn", $class];
        $attributes["class"][]        = true === $block ? "btn-block" : null;
        $attributes["class"][]        = true === in_array($size, ["lg", "sm", "xs"]) ? "btn-" . $size : null;
        $attributes["class"][]        = true === $active ? "active" : null;
        $attributes["title"]          = $title;
        $attributes["type"]           = "button";
        $attributes["data-toggle"]    = null !== $title ? "tooltip" : null;
        $attributes["data-placement"] = null !== $title ? "top" : null;
        $attributes["disabled"]       = true === $disable ? "disabled" : null;

        // Handle the parameters.
        $glyphicon = null !== $icon ? BootstrapRendererTwigExtension::renderIcon($icon) : "";
        $innerHTML = null !== $content ? ("" !== $glyphicon ? " " . $content : $content) : "";

        // Return the HTML.
        return StringUtility::replace($template, ["%attributes%", "%glyphicon%", "%innerHTML%"], [StringUtility::parseArray($attributes), $glyphicon, $innerHTML]);
    }

    /**
     * Displays a Bootstrap button group.
     *
     * @param string $class The class.
     * @param string $role The role.
     * @param array $buttons The buttons.
     * @return string Returns the Bootstrap button group.
     */
    protected function bootstrapButtonGroup($class, $role, array $buttons) {

        // Initialize the template.
        $template = "<div %attributes%>\n%innerHTML%\n</div>";

        // Initialize the attributes.
        $attributes = [];

        $attributes["class"] = $class;
        $attributes["role"]  = $role;

        // Initialize the parameters.
        $innerHTML = implode("\n", $buttons);

        // Return the HTML.
        return StringUtility::replace($template, ["%attributes%", "%innerHTML%"], [StringUtility::parseArray($attributes), $innerHTML]);
    }

    /**
     * Displays a Bootstrap glyphicon.
     *
     * @param string $name The glyphicon name.
     * @return string Returns the Bootstrap glyphicon.
     */
    protected function bootstrapGlyphicon($name, $style) {

        // Initialize the template.
        $template = "<span %attributes%></span>";

        // Initialize the attributes.
        $attributes = [];

        $attributes["class"]       = ["glyphicon"];
        $attributes["class"][]     = null !== $name ? "glyphicon-" . $name : null;
        $attributes["aria-hidden"] = "true";
        $attributes["style"]       = $style;

        // Return the HTML.
        return StringUtility::replace($template, ["%attributes%"], [StringUtility::parseArray($attributes)]);
    }

    /**
     * Displays a Bootstrap label.
     *
     * @param string $content The label content.
     * @param string $class The label class.
     * @return string Returns the Bootstrap label.
     */
    protected function bootstrapLabel($content, $class) {

        // Initialize the template.
        $template = "<span %attributes%>%innerHTML%</span>";

        // Initialize the attributes.
        $attributes = [];

        $attributes["class"] = ["label", $class];

        // Initialize the parameters.
        $innerHTML = null !== $content ? $content : "";

        // Return the HTML.
        return StringUtility::replace($template, ["%attributes%", "%innerHTML%"], [StringUtility::parseArray($attributes), $innerHTML]);
    }

    /**
     * Displays a Bootstrap progress bar.
     *
     * @param string $content The progress bar content.
     * @param integer $value The progress bar value.
     * @param integer $min The progress bar min.
     * @param integer $max The progress bar max.
     * @param boolean $striped Progress bar striped ?
     * @param boolean $animated Progress bar animated ?
     * @param string $class The progress bar class.
     * @return string Returns the Bootstrap progress bar.
     */
    protected function bootstrapProgressBar($content, $value, $min, $max, $striped, $animated, $class = null) {

        // Initialize the template.
        $template = "<div class=\"progress\"><div %attributes%>%innerHTML%</div></div>";
        $span     = "<span class=\"sr-only\">%value%%</span>";

        // Initialize the attributes.
        $attributes = [];

        $attributes["class"]         = ["progress-bar", $class];
        $attributes["class"][]       = true === $striped ? "progress-bar-striped" : null;
        $attributes["class"][]       = true === $animated ? "active" : null;
        $attributes["style"]         = "width: " . $value . "%;";
        $attributes["role"]          = "progressbar";
        $attributes["aria-valuenow"] = $value;
        $attributes["aria-valuemin"] = $min;
        $attributes["aria-valuemax"] = $max . "%";

        // Initialize the parameters.
        $innerHTML = null !== $content ? $content : StringUtility::replace($span, ["%value%"], [$value]);

        // Return the HTML.
        return StringUtility::replace($template, ["%attributes%", "%innerHTML%"], [StringUtility::parseArray($attributes), $innerHTML]);
    }

    /**
     * Get the translator.
     *
     * @return TranslatorInterface Returns the translator.
     */
    public function getTranslator() {
        return $this->translator;
    }

    /**
     * Set the translator.
     * @param TranslatorInterface $translator The translator.
     * @return AbstractComponentTwigExtension Returns this component Twig extension.
     */
    protected function setTranslator(TranslatorInterface $translator = null) {
        $this->translator = $translator;
        return $this;
    }

}
