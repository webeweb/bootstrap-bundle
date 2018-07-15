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
use WBW\Bundle\BootstrapBundle\Twig\Extension\Component\ButtonComponentTwigExtension;
use WBW\Library\Core\Utility\Argument\ArrayUtility;

/**
 * Form button utility Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\Utility
 */
class FormButtonUtilityTwigExtension extends AbstractUtilityTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.bootstrapbundle.twig.extension.utility.formbutton";

    /**
     * Extension.
     *
     * @var ButtonComponentTwigExtension
     */
    private $extension;

    /**
     * Constructor.
     *
     * @param TranslatorInterface $translator The translator.
     * @param ButtonComponentTwigExtension $extension The button component Twig extension.
     */
    public function __construct(TranslatorInterface $translator, ButtonComponentTwigExtension $extension) {
        parent::__construct($translator);
        $this->setExtension($extension);
    }

    /**
     * Displays a Bootstrap cancel form button.
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap cancel form button.
     */
    public function bootstrapCancelFormButtonFunction(array $args = []) {

        // Translate the label.
        $txt = $this->getTranslator()->trans("label.cancel", [], "BootstrapBundle");

        // Initialize the button.
        $but = $this->getExtension()->bootstrapButtonDefaultFunction(["content" => $txt, "title" => $txt, "icon" => "remove"]);

        // Return the HTML.
        return $this->getExtension()->bootstrapButtonLinkFilter($but, ArrayUtility::get($args, "href", self::DEFAULT_HREF));
    }

    /**
     * Displays a Bootstrap default form buttons.
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap default form buttons.
     */
    public function bootstrapDefaultFormButtonsFunction(array $args = []) {

        // Initialize the buttons.
        $cancelButton = $this->bootstrapCancelFormButtonFunction(["href" => ArrayUtility::get($args, "cancel_href")]);
        $submitButton = $this->bootstrapSubmitFormButtonFunction();

        // Return the HTML.
        return implode(" ", [$cancelButton, $submitButton]);
    }

    /**
     * Displays a Bootstrap submit form button.
     *
     * @return string Returns the Bootstrap submit form button.
     */
    public function bootstrapSubmitFormButtonFunction() {

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
     * @return ButtonComponentTwigExtension Returns the extension.
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
            new Twig_SimpleFunction("bootstrapCancelFormButton", [$this, "bootstrapCancelFormButtonFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("bootstrapDefaultFormButtons", [$this, "bootstrapDefaultFormButtonsFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("bootstrapSubmitFormButton", [$this, "bootstrapSubmitFormButtonFunction"], ["is_safe" => ["html"]]),
        ];
    }

    /**
     * Set the extension.
     *
     * @param ButtonComponentTwigExtension $extension The extension.
     * @return FormButtonTwigExtension Returns this form button Twig extension.
     */
    protected function setExtension(ButtonComponentTwigExtension $extension) {
        $this->extension = $extension;
        return $this;
    }

}