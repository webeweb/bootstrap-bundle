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
use WBW\Library\Core\Utility\Argument\ArrayUtility;

/**
 * Input mask form Twig Extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\Form
 */
class InputMaskFormTwigExtension extends AbstractFormTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.bundle.bootstrapbundle.twig.extension.form.inputmask";

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
     * Displays a Bootstrap input mask.
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap input mask.
     */
    public function bootstrapInputMaskFunction(array $args = []) {
        return $this->bootstrapInputMask(ArrayUtility::get($args, "selector"), ArrayUtility::get($args, "scriptTag", false), ArrayUtility::get($args, "opts", []));
    }

    /**
     * Displays a Bootstrap input mask "Phone number".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap input mask "Phone number".
     */
    public function bootstrapInputMaskPhoneNumberFunction(array $args = []) {
        return $this->bootstrapInputMask(ArrayUtility::get($args, "selector"), ArrayUtility::get($args, "scriptTag", false), $this->prepareOptions($args, "99 99 99 99 99"));
    }

    /**
     * Displays a Bootstrap input mask "SIRET number".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap input mask "SIRET number".
     */
    public function bootstrapInputMaskSIRETNumberFunction(array $args = []) {
        return $this->bootstrapInputMask(ArrayUtility::get($args, "selector"), ArrayUtility::get($args, "scriptTag", false), $this->prepareOptions($args, "999 999 999 99999"));
    }

    /**
     * Displays a Bootstrap input mask "Social security number".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap input mask "Social security number".
     */
    public function bootstrapInputMaskSocialSecurityNumberFunction(array $args = []) {
        return $this->bootstrapInputMask(ArrayUtility::get($args, "selector"), ArrayUtility::get($args, "scriptTag", false), $this->prepareOptions($args, "9 99 99 99 999 999 99"));
    }

    /**
     * Displays a Bootstrap input mask "Time 12 hour".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap input mask "Time 12 hour".
     */
    public function bootstrapInputMaskTime12Function(array $args = []) {
        return $this->bootstrapInputMask(ArrayUtility::get($args, "selector"), ArrayUtility::get($args, "scriptTag", false), array_merge($this->prepareOptions($args, "hh:mm t"), ["alias" => "time12", "hourFormat" => "12", "placeholder" => "__:__ _m"]));
    }

    /**
     * Displays a Bootstrap input mask "Time 24 hour".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap input mask "Time 24 hour".
     */
    public function bootstrapInputMaskTime24Function(array $args = []) {
        return $this->bootstrapInputMask(ArrayUtility::get($args, "selector"), ArrayUtility::get($args, "scriptTag", false), array_merge($this->prepareOptions($args, "hh:mm"), ["alias" => "time24", "hourFormat" => "24", "placeholder" => "__:__ _m"]));
    }

    /**
     * Displays a Bootstrap input mask "VAT number".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap input mask "VAT number".
     */
    public function bootstrapInputMaskVATNumberFunction(array $args = []) {
        return $this->bootstrapInputMask(ArrayUtility::get($args, "selector"), ArrayUtility::get($args, "scriptTag", false), $this->prepareOptions($args, "**999 999 999 99"));
    }

    /**
     * Get the Twig functions.
     *
     * @return array Returns the Twig functions.
     */
    public function getFunctions() {
        return [
            new Twig_SimpleFunction("bootstrapInputMask", [$this, "bootstrapInputMaskFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("bootstrapInputMaskPhoneNumber", [$this, "bootstrapInputMaskPhoneNumberFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("bootstrapInputMaskSIRETNumber", [$this, "bootstrapInputMaskSIRETNumberFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("bootstrapInputMaskSocialSecurityNumber", [$this, "bootstrapInputMaskSocialSecurityNumberFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("bootstrapInputMaskTime12", [$this, "bootstrapInputMaskTime12Function"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("bootstrapInputMaskTime24", [$this, "bootstrapInputMaskTime24Function"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("bootstrapInputMaskVATNumber", [$this, "bootstrapInputMaskVATNumberFunction"], ["is_safe" => ["html"]]),
        ];
    }

    /**
     * Prepare the arguments.
     *
     * @param array $args The arguments.
     * @param string $defaultMask
     * @return array Returns the prepared arguments.
     */
    private function prepareOptions(array $args = [], $defaultMask) {

        // Initialize the options.
        $options = ArrayUtility::get($args, "opts", []);

        $options["autoUnmask"]         = ArrayUtility::get($options, "autoUnmask", true);
        $options["removeMaskOnSubmit"] = ArrayUtility::get($options, "removeMaskOnSubmit", true);
        $options["mask"]               = ArrayUtility::get($options, "mask", $defaultMask);
        if (null !== $defaultMask) {
            $options["placeholder"] = preg_replace("/[^\ ][.]*/", "_", $defaultMask);
        }

        // Return the arguments.
        return $options;
    }

}
