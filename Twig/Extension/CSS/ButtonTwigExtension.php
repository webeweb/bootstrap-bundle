<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Twig\Extension\CSS;

use Twig_Environment;
use Twig_SimpleFilter;
use Twig_SimpleFunction;
use WBW\Bundle\BootstrapBundle\BootstrapBundle;
use WBW\Library\Core\Argument\ArrayHelper;
use WBW\Library\Core\Argument\StringHelper;

/**
 * Button Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\CSS
 * @link https://getbootstrap.com/docs/3.3/css/#buttons
 */
class ButtonTwigExtension extends AbstractButtonTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.bootstrap.twig.extension.css.button";

    /**
     * Constructor.
     *
     * @param Twig_Environment $twigEnvironment The Twig environment.
     */
    public function __construct(Twig_Environment $twigEnvironment) {
        parent::__construct($twigEnvironment);
    }

    /**
     * Displays a Bootstrap button "Danger".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap button "Danger".
     */
    public function bootstrapButtonDangerFunction(array $args = []) {
        return $this->bootstrapButton(ArrayHelper::get($args, "content"), ArrayHelper::get($args, "title"), ArrayHelper::get($args, "size", false), ArrayHelper::get($args, "block", false), ArrayHelper::get($args, "active", false), ArrayHelper::get($args, "disable", false), "btn-" . BootstrapBundle::BOOTSTRAP_DANGER, ArrayHelper::get($args, "icon"));
    }

    /**
     * Displays a Bootstrap button "Default".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap button "Default".
     */
    public function bootstrapButtonDefaultFunction(array $args = []) {
        return $this->bootstrapButton(ArrayHelper::get($args, "content"), ArrayHelper::get($args, "title"), ArrayHelper::get($args, "size", false), ArrayHelper::get($args, "block", false), ArrayHelper::get($args, "active", false), ArrayHelper::get($args, "disable", false), "btn-" . BootstrapBundle::BOOTSTRAP_DEFAULT, ArrayHelper::get($args, "icon"));
    }

    /**
     * Displays a Bootstrap button "Info".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap button "Info".
     */
    public function bootstrapButtonInfoFunction(array $args = []) {
        return $this->bootstrapButton(ArrayHelper::get($args, "content"), ArrayHelper::get($args, "title"), ArrayHelper::get($args, "size", false), ArrayHelper::get($args, "block", false), ArrayHelper::get($args, "active", false), ArrayHelper::get($args, "disable", false), "btn-" . BootstrapBundle::BOOTSTRAP_INFO, ArrayHelper::get($args, "icon"));
    }

    /**
     * Transforms a Bootstrap button into an anchor.
     *
     * @param string $button The button.
     * @param string $href The href attribute.
     * @param string $target The target attribute.
     * @return string Returns the Bootstrap button transformed into an anchor.
     */
    public function bootstrapButtonLinkFilter($button, $href = self::DEFAULT_HREF, $target = null) {
        $searches = ["<button", "type=\"button\"", "</button>"];
        $replaces = ["<a", "href=\"" . $href . "\"" . (null !== $target ? " target=\"" . $target . "\"" : ""), "</a>"];
        return StringHelper::replace($button, $searches, $replaces);
    }

    /**
     * Displays a Bootstrap button "Link".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap button "Link".
     */
    public function bootstrapButtonLinkFunction(array $args = []) {
        return $this->bootstrapButton(ArrayHelper::get($args, "content"), ArrayHelper::get($args, "title"), ArrayHelper::get($args, "size", false), ArrayHelper::get($args, "block", false), ArrayHelper::get($args, "active", false), ArrayHelper::get($args, "disable", false), "btn-link", ArrayHelper::get($args, "icon"));
    }

    /**
     * Displays a Bootstrap button "Primary".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap button "Primary".
     */
    public function bootstrapButtonPrimaryFunction(array $args = []) {
        return $this->bootstrapButton(ArrayHelper::get($args, "content"), ArrayHelper::get($args, "title"), ArrayHelper::get($args, "size", false), ArrayHelper::get($args, "block", false), ArrayHelper::get($args, "active", false), ArrayHelper::get($args, "disable", false), "btn-" . BootstrapBundle::BOOTSTRAP_PRIMARY, ArrayHelper::get($args, "icon"));
    }

    /**
     * Transforms a Bootstrap button into a submit button.
     *
     * @param string $bootstrapButton The bootstrap button.
     * @return string Returns the Bootstrap button transformed into a submit button.
     */
    public function bootstrapButtonSubmitFilter($bootstrapButton) {
        return StringHelper::replace($bootstrapButton, ["type=\"button\""], ["type=\"submit\""]);
    }

    /**
     * Displays a Bootstrap button "Success".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap button "Success".
     */
    public function bootstrapButtonSuccessFunction(array $args = []) {
        return $this->bootstrapButton(ArrayHelper::get($args, "content"), ArrayHelper::get($args, "title"), ArrayHelper::get($args, "size", false), ArrayHelper::get($args, "block", false), ArrayHelper::get($args, "active", false), ArrayHelper::get($args, "disable", false), "btn-" . BootstrapBundle::BOOTSTRAP_SUCCESS, ArrayHelper::get($args, "icon"));
    }

    /**
     * Displays a Bootstrap button "Warning".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap button "Warning".
     */
    public function bootstrapButtonWarningFunction(array $args = []) {
        return $this->bootstrapButton(ArrayHelper::get($args, "content"), ArrayHelper::get($args, "title"), ArrayHelper::get($args, "size", false), ArrayHelper::get($args, "block", false), ArrayHelper::get($args, "active", false), ArrayHelper::get($args, "disable", false), "btn-" . BootstrapBundle::BOOTSTRAP_WARNING, ArrayHelper::get($args, "icon"));
    }

    /**
     * Get the Twig filters.
     *
     * @return Twig_SimpleFilter[] Returns the Twig filters.
     */
    public function getFilters() {
        return [
            new Twig_SimpleFilter("bootstrapButtonLink", [$this, "bootstrapButtonLinkFilter"], ["is_safe" => ["html"]]),
            new Twig_SimpleFilter("bootstrapButtonSubmit", [$this, "bootstrapButtonSubmitFilter"], ["is_safe" => ["html"]]),
        ];
    }

    /**
     * Get the Twig functions.
     *
     * @return Twig_SimpleFunction[] Returns the Twig functions.
     */
    public function getFunctions() {
        return [
            new Twig_SimpleFunction("bootstrapButtonDanger", [$this, "bootstrapButtonDangerFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("bootstrapButtonDefault", [$this, "bootstrapButtonDefaultFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("bootstrapButtonInfo", [$this, "bootstrapButtonInfoFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("bootstrapButtonLink", [$this, "bootstrapButtonLinkFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("bootstrapButtonPrimary", [$this, "bootstrapButtonPrimaryFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("bootstrapButtonSuccess", [$this, "bootstrapButtonSuccessFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("bootstrapButtonWarning", [$this, "bootstrapButtonWarningFunction"], ["is_safe" => ["html"]]),
        ];
    }

}
