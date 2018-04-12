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

use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Translation\TranslatorInterface;
use Twig_SimpleFunction;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Component\ButtonComponentTwigExtension;
use WBW\Library\Core\Utility\ArrayUtility;

/**
 * Button form Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\Form
 * @final
 */
final class ButtonFormTwigExtension extends AbstractFormTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.bundle.bootstrapbundle.twig.extension.form.button";

    /**
     * Constructor.
     *
     * @param RouterInterface $router The router.
     * @param TranslatorInterface $translator The translator.
     */
    public function __construct(RouterInterface $router, TranslatorInterface $translator) {
        parent::__construct($router, $translator);
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

        // Generate the URL.
        $url = $this->router->generate(ArrayUtility::get($args, "route"), ArrayUtility::get($args, "arguments"));

        // Initialize the button.
        $ext = new ButtonComponentTwigExtension();
        $but = $ext->bootstrapButtonDefaultFunction(["content" => $txt, "title" => $txt, "icon" => "close"]);

        // Return the cancel form button.
        return $ext->bootstrapButtonLinkFilter($but, $url);
    }

    /**
     * Displays a Bootstrap default form buttons.
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap default form buttons.
     */
    public function bootstrapDefaultFormButtonsFunction(array $args = []) {
        $cancelButton = $this->bootstrapCancelFormButtonFunction(["route" => ArrayUtility::get($args, "cancel_route"), "cancel_arguments" => ArrayUtility::get($args, "cancel_arguments")]);
        $submitButton = $this->bootstrapSubmitFormButtonFunction();
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

        // Return the submit form button.
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
