<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Twig\Extension\Typography;

use Twig_SimpleFunction;
use WBW\Library\Core\Utility\ArrayUtility;

/**
 * Deleted typography Twig extension.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\Typography
 * @final
 */
final class DeletedTypographyTwigExtension extends AbstractTypographyTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.bundle.bootstrapbundle.twig.extension.typography.deleted";

    /**
     * Displays a Bootstrap deleted text.
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap deleted text.
     */
    public function bootstrapDeletedFunction(array $args = []) {
        return $this->bootstrapDeleted(ArrayUtility::get($args, "content"));
    }

    /**
     * Get the Twig functions.
     *
     * @return array Returns the Twig functions.
     */
    public function getFunctions() {
        return [
            new Twig_SimpleFunction("bootstrapDeleted", [$this, "bootstrapDeletedFunction"], ["is_safe" => ["html"]]),
        ];
    }

}