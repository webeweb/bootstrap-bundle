<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Twig\Extension\Plugin;

use Twig_SimpleFunction;
use WBW\Library\Core\Utility\Argument\ArrayUtility;

/**
 * Input mask plugin Twig Extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\Plugin
 */
class InputMaskPluginTwigExtension extends AbstractPluginTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.bundle.bootstrapbundle.twig.extension.plugin.inputmask";

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Displays a jQuery input mask.
     *
     * @param array $args The arguments.
     * @return string Returns the jQuery input mask.
     */
    public function jQueryInputMaskFunction(array $args = []) {
        return $this->jQueryInputMask(ArrayUtility::get($args, "selector"), ArrayUtility::get($args, "mask", ""), ArrayUtility::get($args, "scriptTag", false), ArrayUtility::get($args, "opts", []));
    }

    /**
     * Displays a jQuery input mask "Phone number".
     *
     * @param array $args The arguments.
     * @return string Returns the jQuery input mask "Phone number".
     */
    public function jQueryInputMaskPhoneNumberFunction(array $args = []) {
        $defaultMask = "99 99 99 99 99";
        return $this->jQueryInputMask(ArrayUtility::get($args, "selector"), $defaultMask, ArrayUtility::get($args, "scriptTag", false), $this->prepareOptions($args, $defaultMask));
    }

    /**
     * Displays a jQuery input mask "SIRET number".
     *
     * @param array $args The arguments.
     * @return string Returns the jQuery input mask "SIRET number".
     */
    public function jQueryInputMaskSIRETNumberFunction(array $args = []) {
        $defaultMask = "999 999 999 99999";
        return $this->jQueryInputMask(ArrayUtility::get($args, "selector"), $defaultMask, ArrayUtility::get($args, "scriptTag", false), $this->prepareOptions($args, $defaultMask));
    }

    /**
     * Displays a jQuery input mask "Social security number".
     *
     * @param array $args The arguments.
     * @return string Returns the jQuery input mask "Social security number".
     */
    public function jQueryInputMaskSocialSecurityNumberFunction(array $args = []) {
        $defaultMask = "9 99 99 99 999 999 99";
        return $this->jQueryInputMask(ArrayUtility::get($args, "selector"), $defaultMask, ArrayUtility::get($args, "scriptTag", false), $this->prepareOptions($args, $defaultMask));
    }

    /**
     * Displays a jQuery input mask "Time 12 hour".
     *
     * @param array $args The arguments.
     * @return string Returns the jQuery input mask "Time 12 hour".
     */
    public function jQueryInputMaskTime12Function(array $args = []) {
        $defaultMask = "hh:mm t";
        return $this->jQueryInputMask(ArrayUtility::get($args, "selector"), $defaultMask, ArrayUtility::get($args, "scriptTag", false), array_merge($this->prepareOptions($args, null), ["hourFormat" => "12", "placeholder" => "__:__ _m"]));
    }

    /**
     * Displays a jQuery input mask "Time 24 hour".
     *
     * @param array $args The arguments.
     * @return string Returns the jQuery input mask "Time 24 hour".
     */
    public function jQueryInputMaskTime24Function(array $args = []) {
        $defaultMask = "hh:mm";
        return $this->jQueryInputMask(ArrayUtility::get($args, "selector"), $defaultMask, ArrayUtility::get($args, "scriptTag", false), array_merge($this->prepareOptions($args, null), ["hourFormat" => "24", "placeholder" => "__:__"]));
    }

    /**
     * Displays a jQuery input mask "VAT number".
     *
     * @param array $args The arguments.
     * @return string Returns the jQuery input mask "VAT number".
     */
    public function jQueryInputMaskVATNumberFunction(array $args = []) {
        $defaultMask = "**999 999 999 99";
        return $this->jQueryInputMask(ArrayUtility::get($args, "selector"), $defaultMask, ArrayUtility::get($args, "scriptTag", false), $this->prepareOptions($args, $defaultMask));
    }

    /**
     * Get the Twig functions.
     *
     * @return array Returns the Twig functions.
     */
    public function getFunctions() {
        return [
            new Twig_SimpleFunction("jQueryInputMask", [$this, "jQueryInputMaskFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("jQueryInputMaskPhoneNumber", [$this, "jQueryInputMaskPhoneNumberFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("jQueryInputMaskSIRETNumber", [$this, "jQueryInputMaskSIRETNumberFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("jQueryInputMaskSocialSecurityNumber", [$this, "jQueryInputMaskSocialSecurityNumberFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("jQueryInputMaskTime12", [$this, "jQueryInputMaskTime12Function"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("jQueryInputMaskTime24", [$this, "jQueryInputMaskTime24Function"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("jQueryInputMaskVATNumber", [$this, "jQueryInputMaskVATNumberFunction"], ["is_safe" => ["html"]]),
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
        if (null !== $defaultMask) {
            $options["placeholder"] = preg_replace("/[^\ ][.]*/", "_", $defaultMask);
        }

        // Return the arguments.
        return $options;
    }

}
