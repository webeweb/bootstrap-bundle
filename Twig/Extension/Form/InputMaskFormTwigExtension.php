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
     * Displays a phone number input mask.
     *
     * @param array $args The arguments.
     * @return string Returns the phone number input mask.
     */
    public function bootstrapPhoneNumberInputMaskFunction(array $args = []) {
        return $this->bootstrapInputMask(ArrayUtility::get($args, "selector"), ArrayUtility::get($args, "scriptTag", false), ["autoUnmask" => true, "removeMaskOnSubmit" => true, "mask" => "99 99 99 99 99", "placeholder" => "__ __ __ __ __"]);
    }

    /**
     * Displays a SIRET number input mask.
     *
     * @param array $args The arguments.
     * @return string Returns the SIRET number input mask.
     */
    public function bootstrapSIRETNumberInputMaskFunction(array $args = []) {
        return $this->bootstrapInputMask(ArrayUtility::get($args, "selector"), ArrayUtility::get($args, "scriptTag", false), ["autoUnmask" => true, "removeMaskOnSubmit" => true, "mask" => "999 999 999 99999", "placeholder" => "___ ___ ___ ___"]);
    }

    /**
     * Displays a social security number input mask.
     *
     * @param array $args The arguments.
     * @return string Returns the social security number input mask.
     */
    public function bootstrapSocialSecurityNumberInputMaskFunction(array $args = []) {
        return $this->bootstrapInputMask(ArrayUtility::get($args, "selector"), ArrayUtility::get($args, "scriptTag", false), ["autoUnmask" => true, "removeMaskOnSubmit" => true, "mask" => "9 99 99 99 999 999 99", "placeholder" => "_ __ __ __ ___ ___ __"]);
    }

    /**
     * Displays a VAT number input mask.
     *
     * @param array $args The arguments.
     * @return string Returns the VAT number input mask.
     */
    public function bootstrapVATNumberInputMaskFunction(array $args = []) {
        return $this->bootstrapInputMask(ArrayUtility::get($args, "selector"), ArrayUtility::get($args, "scriptTag", false), ["autoUnmask" => true, "removeMaskOnSubmit" => true, "mask" => "**999 999 999 99", "placeholder" => "_____ ___ ___ ___ __"]);
    }

    /**
     * Get the Twig functions.
     *
     * @return array Returns the Twig functions.
     */
    public function getFunctions() {
        return [
            new Twig_SimpleFunction("bootstrapPhoneNumberInputMask", [$this, "bootstrapPhoneNumberInputMaskFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("bootstrapSIRETNumberInputMask", [$this, "bootstrapSIRETNumberInputMaskFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("bootstrapSocialSecurityNumberInputMask", [$this, "bootstrapSocialSecurityNumberInputMaskFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("bootstrapVATNumberInputMask", [$this, "bootstrapVATNumberInputMaskFunction"], ["is_safe" => ["html"]]),
        ];
    }

}
