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

use Twig_SimpleFunction;
use WBW\Library\Core\Utility\ArrayUtility;

/**
 * Input mask form Twig Extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\Form
 * @final
 */
final class InputMaskFormTwigExtension extends AbstractFormTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.bundle.bootstrapbundle.twig.extension.form.inputmask";

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();
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
     * Displays a Bootstrap phone number input mask.
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap phone number input mask.
     */
    public function bootstrapPhoneNumberInputMaskFunction(array $args = []) {
        return $this->bootstrapInputMask(ArrayUtility::get($args, "selector"), ArrayUtility::get($args, "scriptTag", false), $this->prepareOptions($args, "99 99 99 99 99"));
    }

    /**
     * Displays a Bootstrap SIRET number input mask.
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap SIRET number input mask.
     */
    public function bootstrapSIRETNumberInputMaskFunction(array $args = []) {
        return $this->bootstrapInputMask(ArrayUtility::get($args, "selector"), ArrayUtility::get($args, "scriptTag", false), $this->prepareOptions($args, "999 999 999 99999"));
    }

    /**
     * Displays a Bootstrap social security number input mask.
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap social security number input mask.
     */
    public function bootstrapSocialSecurityNumberInputMaskFunction(array $args = []) {
        return $this->bootstrapInputMask(ArrayUtility::get($args, "selector"), ArrayUtility::get($args, "scriptTag", false), $this->prepareOptions($args, "9 99 99 99 999 999 99"));
    }

    /**
     * Displays a Bootstrap VAT number input mask.
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap AT number input mask.
     */
    public function bootstrapVATNumberInputMaskFunction(array $args = []) {
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
            new Twig_SimpleFunction("bootstrapPhoneNumberInputMask", [$this, "bootstrapPhoneNumberInputMaskFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("bootstrapSIRETNumberInputMask", [$this, "bootstrapSIRETNumberInputMaskFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("bootstrapSocialSecurityNumberInputMask", [$this, "bootstrapSocialSecurityNumberInputMaskFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("bootstrapVATNumberInputMask", [$this, "bootstrapVATNumberInputMaskFunction"], ["is_safe" => ["html"]]),
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
