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
use WBW\Library\Core\Utility\ArrayUtility;

/**
 * Underlined typography Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\Typography
 * @final
 */
final class UnderlinedTypographyTwigExtension extends AbstractTypographyTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.bundle.bootstrapbundle.twig.extension.typography.underlined";

    /**
     * Displays a Bootstrap underlined text.
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap underlined text.
     */
    public function bootstrapUnderlinedFunction(array $args = []) {
        return $this->bootstrapUnderlined(ArrayUtility::get($args, "content"));
    }

    /**
     * Get the Twig functions.
     *
     * @return array Returns the Twig functions.
     */
    public function getFunctions() {
        return [
            new Twig_SimpleFunction("bootstrapUnderlined", [$this, "bootstrapUnderlinedFunction"], ["is_safe" => ["html"]]),
        ];
    }

}
