<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Twig\Extension\Form;

use Symfony\Component\Translation\TranslatorInterface;
use Twig_SimpleFunction;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Component\ButtonComponentTwigExtension;
use WBW\Library\Core\Utility\Argument\ArrayUtility;

/**
 * Button form Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\Form
 */
class ButtonFormTwigExtension extends AbstractFormTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.bundle.bootstrapbundle.twig.extension.form.button";

    /**
     * Constructor.
     *
     * @param TranslatorInterface $translator The translator.
     */
    public function __construct(TranslatorInterface $translator) {
        parent::__construct($translator);
    }

    /**
     * Displays a Bootstrap cancel form button.
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap cancel form button.
     */
    public function bootstrapCancelFormButtonFunction(array $args = []) {

        // Translate the label.
        $txt = $this->translator->trans("label.cancel", [], "BootstrapBundle");

        // Initialize the button.
        $ext = new ButtonComponentTwigExtension();
        $but = $ext->bootstrapButtonDefaultFunction(["content" => $txt, "title" => $txt, "icon" => "remove"]);

        // Return the HTML.
        return $ext->bootstrapButtonLinkFilter($but, ArrayUtility::get($args, "href", self::DEFAULT_HREF));
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
        $txt = $this->translator->trans("label.submit", [], "BootstrapBundle");

        // Initialize the button.
        $ext = new ButtonComponentTwigExtension();
        $but = $ext->bootstrapButtonPrimaryFunction(["content" => $txt, "title" => $txt, "icon" => "ok"]);

        // Return the HTML.
        return $ext->bootstrapButtonSubmitFilter($but);
    }

    /**
     * Get the Twig functions.
     *
     * @return array Returns the Twig functions.
     */
    public function getFunctions() {
        return [
            new Twig_SimpleFunction('bootstrapCancelFormButton', [$this, 'bootstrapCancelFormButtonFunction'], ['is_safe' => ['html']]),
            new Twig_SimpleFunction('bootstrapDefaultFormButtons', [$this, 'bootstrapDefaultFormButtonsFunction'], ['is_safe' => ['html']]),
            new Twig_SimpleFunction('bootstrapSubmitFormButton', [$this, 'bootstrapSubmitFormButtonFunction'], ['is_safe' => ['html']]),
        ];
    }

}
