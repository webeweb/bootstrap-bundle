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
use WBW\Library\Core\Argument\ArrayHelper;

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
    const SERVICE_NAME = "webeweb.bootstrap.twig.extension.utility.tablebutton";

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
     * Displays a Bootstrap row button "Default".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap form button "Default".
     */
    public function bootstrapRowButtonDefaultFunction(array $args = []) {

        // Initialize the buttons.
        $editButton   = $this->bootstrapRowButtonEditFunction(["href" => ArrayHelper::get($args, "edit_href")]);
        $deleteButton = $this->bootstrapRowButtonDeleteFunction(["href" => ArrayHelper::get($args, "delete_href")]);

        // Return the HTML.
        return implode(" ", [$editButton, $deleteButton]);
    }

    /**
     * Displays a Bootstrap row button "Delete".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap row button "Delete".
     */
    public function bootstrapRowButtonDeleteFunction(array $args = []) {

        // Translate the label.
        $txt = $this->getTranslator()->trans("label.delete", [], "BootstrapBundle");

        // Initialize the button.
        $but = $this->getExtension()->bootstrapButtonDangerFunction(["title" => $txt, "icon" => "trash"]);

        // Return the HTML.
        return $this->getExtension()->bootstrapButtonLinkFilter($but, ArrayHelper::get($args, "href", self::DEFAULT_HREF));
    }

    /**
     * Displays a Bootstrap row button "Edit".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap row button "Edit".
     */
    public function bootstrapRowButtonEditFunction(array $args = []) {

        // Translate the label.
        $txt = $this->getTranslator()->trans("label.edit", [], "BootstrapBundle");

        // Initialize the button.
        $but = $this->getExtension()->bootstrapButtonDefaultFunction(["title" => $txt, "icon" => "pencil"]);

        // Return the HTML.
        return $this->getExtension()->bootstrapButtonLinkFilter($but, ArrayHelper::get($args, "href", self::DEFAULT_HREF));
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
            new Twig_SimpleFunction("bootstrapRowButtonDefault", [$this, "bootstrapRowButtonDefaultFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("bootstrapRowButtonDelete", [$this, "bootstrapRowButtonDeleteFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("bootstrapRowButtonEdit", [$this, "bootstrapRowButtonEditFunction"], ["is_safe" => ["html"]]),
        ];
    }

    /**
     * Set the extension.
     *
     * @param ButtonTwigExtension $extension The extension.
     * @return TableButtonHelperTwigExtension Returns this table button Twig extension.
     */
    protected function setExtension(ButtonTwigExtension $extension) {
        $this->extension = $extension;
        return $this;
    }

}
