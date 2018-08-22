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
 * Form button Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\Utility
 */
class FormButtonTwigExtension extends AbstractUtilityTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.bootstrap.twig.extension.utility.formbutton";

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
     * @param ButtonTwigExtension $extension The button component Twig extension.
     */
    public function __construct(TranslatorInterface $translator, ButtonTwigExtension $extension) {
        parent::__construct($translator);
        $this->setExtension($extension);
    }

    /**
     * Displays a Bootstrap form button "Cancel".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap form button "Cancel".
     */
    public function bootstrapFormButtonCancelFunction(array $args = []) {

        // Translate the label.
        $txt = $this->getTranslator()->trans("label.cancel", [], "BootstrapBundle");

        // Initialize the button.
        $but = $this->getExtension()->bootstrapButtonDefaultFunction(["content" => $txt, "title" => $txt, "icon" => "remove"]);

        // Return the HTML.
        return $this->getExtension()->bootstrapButtonLinkFilter($but, ArrayHelper::get($args, "href", self::DEFAULT_HREF));
    }

    /**
     * Displays a Bootstrap form buttons "Default".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap form button "Default".
     */
    public function bootstrapFormButtonDefaultFunction(array $args = []) {

        // Initialize the buttons.
        $cancelButton = $this->bootstrapFormButtonCancelFunction(["href" => ArrayHelper::get($args, "cancel_href")]);
        $submitButton = $this->bootstrapFormButtonSubmitFunction();

        // Return the HTML.
        return implode(" ", [$cancelButton, $submitButton]);
    }

    /**
     * Displays a Bootstrap form button "Submit".
     *
     * @return string Returns the Bootstrap form button "Submit".
     */
    public function bootstrapFormButtonSubmitFunction() {

        // Translate the label.
        $txt = $this->getTranslator()->trans("label.submit", [], "BootstrapBundle");

        // Initialize the button.
        $but = $this->getExtension()->bootstrapButtonPrimaryFunction(["content" => $txt, "title" => $txt, "icon" => "ok"]);

        // Return the HTML.
        return $this->getExtension()->bootstrapButtonSubmitFilter($but);
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
            new Twig_SimpleFunction("bootstrapFormButtonCancel", [$this, "bootstrapFormButtonCancelFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("bootstrapFormButtonDefault", [$this, "bootstrapFormButtonDefaultFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("bootstrapFormButtonSubmit", [$this, "bootstrapFormButtonSubmitFunction"], ["is_safe" => ["html"]]),
        ];
    }

    /**
     * Set the extension.
     *
     * @param ButtonTwigExtension $extension The extension.
     * @return FormButtonTwigExtension Returns this form button Twig extension.
     */
    protected function setExtension(ButtonTwigExtension $extension) {
        $this->extension = $extension;
        return $this;
    }

}
