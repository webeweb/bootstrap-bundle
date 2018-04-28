<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Twig\Extension\Table;

use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Translation\TranslatorInterface;
use Twig_SimpleFunction;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Component\ButtonComponentTwigExtension;
use WBW\Library\Core\Utility\Argument\ArrayUtility;

/**
 * Button table Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\Table
 */
class ButtonTableTwigExtension extends AbstractTableTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.bundle.bootstrapbundle.twig.extension.table.button";

    /**
     * Router.
     *
     * @var RouterInterface
     */
    private $router;

    /**
     * Translator.
     *
     * @var TranslatorInterface
     */
    private $translator;

    /**
     * Constructor.
     *
     * @param RouterInterface $router The router service.
     * @param TranslatorInterface $translator The translator service.
     */
    public function __construct(RouterInterface $router, TranslatorInterface $translator) {
        parent::__construct();
        $this->router     = $router;
        $this->translator = $translator;
    }

    /**
     * Displays a Bootstrap default row buttons.
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap default form buttons.
     */
    public function bootstrapDefaultRowButtonsFunction(array $args = []) {

        // Initialize the buttons.
        $editButton   = $this->bootstrapEditRowButtonFunction(["route" => ArrayUtility::get($args, "edit_route"), "route_arguments" => ArrayUtility::get($args, "edit_arguments")]);
        $deleteButton = $this->bootstrapDeleteRowButtonFunction(["route" => ArrayUtility::get($args, "delete_route"), "route_arguments" => ArrayUtility::get($args, "delete_arguments")]);

        // Return the HTML.
        return implode(" ", [$editButton, $deleteButton]);
    }

    /**
     * Displays a Bootstrap delete row button.
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap delete row button.
     */
    public function bootstrapDeleteRowButtonFunction(array $args = []) {


        // Translate the label.
        $txt = $this->translator->trans("label.delete", [], "BootstrapBundle");

        // Generate the URL.
        $url = $this->router->generate(ArrayUtility::get($args, "route"), ArrayUtility::get($args, "arguments"));

        // Initialize the button.
        $ext = new ButtonComponentTwigExtension();
        $but = $ext->bootstrapButtonDangerFunction(["title" => $txt, "icon" => "trash"]);

        // Return the HTML.
        return $ext->bootstrapButtonLinkFilter($but, $url);
    }

    /**
     * Displays a Bootstrap edit row button.
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap edit row button.
     */
    public function bootstrapEditRowButtonFunction(array $args = []) {


        // Translate the label.
        $txt = $this->translator->trans("label.edit", [], "BootstrapBundle");

        // Generate the URL.
        $url = $this->router->generate(ArrayUtility::get($args, "route"), ArrayUtility::get($args, "arguments"));

        // Initialize the button.
        $ext = new ButtonComponentTwigExtension();
        $but = $ext->bootstrapButtonDefaultFunction(["title" => $txt, "icon" => "pencil"]);

        // Return the HTML.
        return $ext->bootstrapButtonLinkFilter($but, $url);
    }

    /**
     * Get the Twig functions.
     *
     * @return array Returns the Twig functions.
     */
    public function getFunctions() {
        return [
            new Twig_SimpleFunction("bootstrapDefaultRowButtons", [$this, "bootstrapDefaultRowButtonsFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("bootstrapDeleteRowButton", [$this, "bootstrapDeleteRowButtonFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("bootstrapEditRowButton", [$this, "bootstrapEditRowButtonFunction"], ["is_safe" => ["html"]]),
        ];
    }

}
