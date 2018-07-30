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

use WBW\Bundle\BootstrapBundle\Twig\Extension\AbstractBootstrapTwigExtension;
use WBW\Library\Core\Utility\Argument\StringUtility;

/**
 * Abstract jQuery input mask Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\Plugin
 * @abstract
 */
abstract class AbstractJQueryInputMaskTwigExtension extends AbstractBootstrapTwigExtension {

    /**
     * Constructor.
     */
    protected function __construct() {
        // NOTHING TO DO.
    }

    /**
     * Displays a jQuery input mask.
     *
     * @param string $selector The input mask selector.
     * @param string $mask The input mask.
     * @param boolean $scriptTag Script tag ?
     * @param array $options The input mask options.
     * @return string Returns the jQuery input mask.
     */
    protected function jQueryInputMask($selector, $mask, $scriptTag, array $options) {

        // Initialize the template.
        $template = "$('%selector%').inputmask(\"%mask%\",%arguments%);";

        // Initialize the parameters.
        $innerHTML = StringUtility::replace($template, ["%selector%", "%mask%", "%arguments%"], [$selector, $mask, json_encode($options)]);

        // Return the HTML
        if (true === $scriptTag) {
            return self::bootstrapHTMLElement("script", "\n" . $innerHTML . "\n", ["type" => "text/javascript"]);
        }
        return $innerHTML;
    }

}
