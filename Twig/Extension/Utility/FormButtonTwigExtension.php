<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Twig\Extension\Utility;

use Twig\Environment;
use Twig\TwigFunction;
use WBW\Bundle\BootstrapBundle\Twig\Extension\CSS\ButtonTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\CSS\ButtonTwigExtensionTrait;
use WBW\Bundle\CoreBundle\Component\BaseTranslatorInterface;
use WBW\Library\Core\Argument\ArrayHelper;

/**
 * Form button Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\Utility
 */
class FormButtonTwigExtension extends AbstractUtilityTwigExtension {

    use ButtonTwigExtensionTrait;

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "wbw.bootstrap.twig.extension.utility.form_button";

    /**
     * Constructor.
     *
     * @param Environment $twigEnvironment The Twig environment.
     * @param BaseTranslatorInterface $translator The translator.
     * @param ButtonTwigExtension $extension The button component Twig extension.
     */
    public function __construct(Environment $twigEnvironment, BaseTranslatorInterface $translator, ButtonTwigExtension $extension) {
        parent::__construct($twigEnvironment, $translator);
        $this->setButtonTwigExtension($extension);
    }

    /**
     * Displays a Bootstrap form button "cancel".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap form button "Cancel".
     */
    public function bootstrapFormButtonCancelFunction(array $args = []) {

        $txt = $this->getTranslator()->trans("label.cancel", [], "WBWBootstrapBundle");
        $but = $this->getButtonTwigExtension()->bootstrapButtonDefaultFunction(["content" => $txt, "title" => $txt, "icon" => "g:remove"]);

        return $this->getButtonTwigExtension()->bootstrapButtonLinkFilter($but, ArrayHelper::get($args, "href", self::DEFAULT_HREF));
    }

    /**
     * Displays a Bootstrap form buttons "default".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap form button "Default".
     */
    public function bootstrapFormButtonDefaultFunction(array $args = []) {

        $cancelButton = $this->bootstrapFormButtonCancelFunction(["href" => ArrayHelper::get($args, "cancel_href")]);
        $submitButton = $this->bootstrapFormButtonSubmitFunction();

        // Return the HTML.
        return implode(" ", [$cancelButton, $submitButton]);
    }

    /**
     * Displays a Bootstrap form button "submit".
     *
     * @return string Returns the Bootstrap form button "Submit".
     */
    public function bootstrapFormButtonSubmitFunction() {

        $txt = $this->getTranslator()->trans("label.submit", [], "WBWBootstrapBundle");
        $but = $this->getButtonTwigExtension()->bootstrapButtonPrimaryFunction(["content" => $txt, "title" => $txt, "icon" => "g:ok"]);

        return $this->getButtonTwigExtension()->bootstrapButtonSubmitFilter($but);
    }

    /**
     * Get the Twig functions.
     *
     * @return TwigFunction[] Returns the Twig functions.
     */
    public function getFunctions() {
        return [
            new TwigFunction("bootstrapFormButtonCancel", [$this, "bootstrapFormButtonCancelFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("bootstrapFormButtonDefault", [$this, "bootstrapFormButtonDefaultFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("bootstrapFormButtonSubmit", [$this, "bootstrapFormButtonSubmitFunction"], ["is_safe" => ["html"]]),
        ];
    }
}
