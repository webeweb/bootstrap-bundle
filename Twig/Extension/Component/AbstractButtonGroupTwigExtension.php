<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Twig\Extension\Component;

use WBW\Bundle\BootstrapBundle\Twig\Extension\AbstractBootstrapTwigExtension;

/**
 * Abstract button group Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\Component
 * @abstract
 */
abstract class AbstractButtonGroupTwigExtension extends AbstractBootstrapTwigExtension {

    /**
     * Constructor.
     */
    protected function __construct() {
        parent::__construct();
    }

    /**
     * Displays a Bootstrap button group.
     *
     * @param string $class The class.
     * @param string $role The role.
     * @param array $buttons The buttons.
     * @return string Returns the Bootstrap button group.
     */
    protected function bootstrapButtonGroup($class, $role, array $buttons) {

        // Initialize the attributes.
        $attributes = [];

        $attributes["class"] = $class;
        $attributes["role"]  = $role;

        // Initialize the parameters.
        $innerHTML = "\n" . implode("\n", $buttons) . "\n";

        // Return the HTML.
        return self::bootstrapHTMLElement("div", $innerHTML, $attributes);
    }

}
