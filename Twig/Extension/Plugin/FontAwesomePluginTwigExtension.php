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
 * Font Awesome plugin Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\Plugin
 */
class FontAwesomePluginTwigExtension extends AbstractPluginTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.bundle.bootstrapbundle.twig.extension.plugin.fontawesome";

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Displays a Font Awesome.
     *
     * @param array $args The arguments.
     * @return Returns a Font Awesome.
     */
    public function fontAwesomeFunction(array $args = []) {
        return $this->fontAwesome(ArrayUtility::get($args, "style"), ArrayUtility::get($args, "name", "home"), ArrayUtility::get($args, "size"), ArrayUtility::get($args, "fixedWidth", false), ArrayUtility::get($args, "bordered", false), ArrayUtility::get($args, "pull"), ArrayUtility::get($args, "animated"));
    }

    /**
     * Get the Twig functions.
     *
     * @return array Returns the Twig functions.
     */
    public function getFunctions() {
        return [
            new Twig_SimpleFunction("fontAwesome", [$this, "fontAwesomeFunction"], ["is_safe" => ["html"]]),
        ];
    }

}
