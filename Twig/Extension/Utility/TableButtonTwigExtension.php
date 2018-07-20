<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Twig\Extension\Utility;

use Symfony\Component\Translation\TranslatorInterface;
use Twig_SimpleFunction;
use WBW\Bundle\BootstrapBundle\Twig\Extension\CSS\ButtonTwigExtension;
use WBW\Library\Core\Utility\Argument\ArrayUtility;

/**
 * Table button Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\Utility
 */
class TableButtonTwigExtension extends AbstractUtilityTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.bootstrapbundle.twig.extension.utility.tablebutton";

    /**
     * Extension.
     *
     * @var ButtonTwigExtension
     */
    private $extension;

    /**
     * Constructor.
     *
     * @param TranslatorInterface $translator The translator.
     * @param ButtonComponentTwigExtension $extension The button component Twig extension.
     */
    public function __construct(TranslatorInterface $translator, ButtonTwigExtension $extension) {
        parent::__construct($translator);
        $this->setExtension($extension);
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
        $txt = $this->getTranslator()->trans("label.delete", [], "BootstrapBundle");

        // Initialize the button.
        $but = $this->getExtension()->bootstrapButtonDangerFunction(["title" => $txt, "icon" => "trash"]);

        // Return the HTML.
        return $this->getExtension()->bootstrapButtonLinkFilter($but, ArrayUtility::get($args, "href", self::DEFAULT_HREF));
    }

    /**
     * Displays a Bootstrap edit row button.
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap edit row button.
     */
    public function bootstrapEditRowButtonFunction(array $args = []) {

        // Translate the label.
        $txt = $this->getTranslator()->trans("label.edit", [], "BootstrapBundle");

        // Initialize the button.
        $but = $this->getExtension()->bootstrapButtonDefaultFunction(["title" => $txt, "icon" => "pencil"]);

        // Return the HTML.
        return $this->getExtension()->bootstrapButtonLinkFilter($but, ArrayUtility::get($args, "href", self::DEFAULT_HREF));
    }

    /**
     * Get the extension.
     *
     * @return ButtonTwigExtension Returns the extension.
     */
    public function getExtension() {
        return $this->extension;
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

    /**
     * Set the extension.
     *
     * @param ButtonTwigExtension $extension The extension.
     * @return TableButtonUtilityTwigExtension Returns this table button Twig extension.
     */
    protected function setExtension(ButtonTwigExtension $extension) {
        $this->extension = $extension;
        return $this;
    }

}
