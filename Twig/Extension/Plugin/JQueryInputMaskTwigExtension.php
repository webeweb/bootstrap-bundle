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
use WBW\Bundle\BootstrapBundle\Twig\Extension\BootstrapRendererTwigExtension;
use WBW\Library\Core\Argument\ArrayHelper;

/**
 * jQuery Input mask Twig Extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\Plugin
 */
class JQueryInputMaskTwigExtension extends AbstractJQueryInputMaskTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.bootstrap.twig.extension.plugin.jqueryinputmask";

    /**
     * Constructor.
     *
     * @param BootstrapRendererTwigExtension $renderer The renderer.
     */
    public function __construct(BootstrapRendererTwigExtension $renderer) {
        parent::__construct($renderer);
    }

    /**
     * Displays a jQuery input mask.
     *
     * @param array $args The arguments.
     * @return string Returns the jQuery input mask.
     */
    public function jQueryInputMaskFunction(array $args = []) {
        return $this->jQueryInputMask(ArrayHelper::get($args, "selector"), ArrayHelper::get($args, "mask", ""), ArrayHelper::get($args, "opts", []), ArrayHelper::get($args, "scriptTag", false));
    }

    /**
     * Displays a jQuery input mask "Phone number".
     *
     * @param array $args The arguments.
     * @return string Returns the jQuery input mask "Phone number".
     */
    public function jQueryInputMaskPhoneNumberFunction(array $args = []) {
        $defaultMask = "99 99 99 99 99";
        return $this->jQueryInputMask(ArrayHelper::get($args, "selector"), $defaultMask, $this->prepareOptions($args, $defaultMask), ArrayHelper::get($args, "scriptTag", false));
    }

    /**
     * Displays a jQuery input mask "SIRET number".
     *
     * @param array $args The arguments.
     * @return string Returns the jQuery input mask "SIRET number".
     */
    public function jQueryInputMaskSIRETNumberFunction(array $args = []) {
        $defaultMask = "999 999 999 99999";
        return $this->jQueryInputMask(ArrayHelper::get($args, "selector"), $defaultMask, $this->prepareOptions($args, $defaultMask), ArrayHelper::get($args, "scriptTag", false));
    }

    /**
     * Displays a jQuery input mask "Social security number".
     *
     * @param array $args The arguments.
     * @return string Returns the jQuery input mask "Social security number".
     */
    public function jQueryInputMaskSocialSecurityNumberFunction(array $args = []) {
        $defaultMask = "9 99 99 99 999 999 99";
        return $this->jQueryInputMask(ArrayHelper::get($args, "selector"), $defaultMask, $this->prepareOptions($args, $defaultMask), ArrayHelper::get($args, "scriptTag", false));
    }

    /**
     * Displays a jQuery input mask "Time 12 hour".
     *
     * @param array $args The arguments.
     * @return string Returns the jQuery input mask "Time 12 hour".
     */
    public function jQueryInputMaskTime12Function(array $args = []) {
        $defaultMask = "hh:mm t";
        return $this->jQueryInputMask(ArrayHelper::get($args, "selector"), $defaultMask, array_merge($this->prepareOptions($args, null), ["hourFormat" => "12", "placeholder" => "__:__ _m"]), ArrayHelper::get($args, "scriptTag", false));
    }

    /**
     * Displays a jQuery input mask "Time 24 hour".
     *
     * @param array $args The arguments.
     * @return string Returns the jQuery input mask "Time 24 hour".
     */
    public function jQueryInputMaskTime24Function(array $args = []) {
        $defaultMask = "hh:mm";
        return $this->jQueryInputMask(ArrayHelper::get($args, "selector"), $defaultMask, array_merge($this->prepareOptions($args, null), ["hourFormat" => "24", "placeholder" => "__:__"]), ArrayHelper::get($args, "scriptTag", false));
    }

    /**
     * Displays a jQuery input mask "VAT number".
     *
     * @param array $args The arguments.
     * @return string Returns the jQuery input mask "VAT number".
     */
    public function jQueryInputMaskVATNumberFunction(array $args = []) {
        $defaultMask = "**999 999 999 99";
        return $this->jQueryInputMask(ArrayHelper::get($args, "selector"), $defaultMask, $this->prepareOptions($args, $defaultMask), ArrayHelper::get($args, "scriptTag", false));
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
     * @param string $defaultMask The default mask.
     * @return array Returns the prepared arguments.
     */
    private function prepareOptions(array $args, $defaultMask) {

        // Initialize the options.
        $options = ArrayHelper::get($args, "opts", []);

        $options["autoUnmask"]         = ArrayHelper::get($options, "autoUnmask", true);
        $options["removeMaskOnSubmit"] = ArrayHelper::get($options, "removeMaskOnSubmit", true);
        if (null !== $defaultMask) {
            $options["placeholder"] = preg_replace("/[^\ ][.]*/", "_", $defaultMask);
        }

        // Return the arguments.
        return $options;
    }

}
