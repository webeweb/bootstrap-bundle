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
     * Translator.
     *
     * @var TranslatorInterface
     */
    private $translator;

    /**
     * Constructor.
     *
     * @param TranslatorInterface $translator The translator service.
     */
    public function __construct(TranslatorInterface $translator) {
        parent::__construct();
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
        $editButton   = $this->bootstrapEditRowButtonFunction(["href" => ArrayUtility::get($args, "edit_href")]);
        $deleteButton = $this->bootstrapDeleteRowButtonFunction(["href" => ArrayUtility::get($args, "delete_href")]);

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

        // Initialize the button.
        $ext = new ButtonComponentTwigExtension();
        $but = $ext->bootstrapButtonDangerFunction(["title" => $txt, "icon" => "trash"]);

        // Return the HTML.
        return $ext->bootstrapButtonLinkFilter($but, ArrayUtility::get($args, "href", self::DEFAULT_HREF));
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

        // Initialize the button.
        $ext = new ButtonComponentTwigExtension();
        $but = $ext->bootstrapButtonDefaultFunction(["title" => $txt, "icon" => "pencil"]);

        // Return the HTML.
        return $ext->bootstrapButtonLinkFilter($but, ArrayUtility::get($args, "href", self::DEFAULT_HREF));
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
