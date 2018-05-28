<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Twig\Extension\Typography;

use Twig_SimpleFunction;
use WBW\Library\Core\Utility\Argument\ArrayUtility;

/**
 * Strikethrough typography Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\Typography
 */
class StrikethroughTypographyTwigExtension extends AbstractTypographyTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.bundle.bootstrapbundle.twig.extension.typography.strikethrough";

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Displays a Bootstrap strike through text.
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap strike through text.
     */
    public function bootstrapStrikeThroughFunction(array $args = []) {
        return $this->bootstrapStrikeThrough(ArrayUtility::get($args, "content"));
    }

    /**
     * Get the Twig functions.
     *
     * @return array Returns the Twig functions.
     */
    public function getFunctions() {
        return [
            new Twig_SimpleFunction("bootstrapStrikethrough", [$this, "bootstrapStrikethroughFunction"], ["is_safe" => ["html"]]),
        ];
    }

}