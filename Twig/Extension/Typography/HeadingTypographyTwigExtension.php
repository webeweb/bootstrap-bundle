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
 * Heading typography Twig extension.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\Typography
 * @final
 */
final class HeadingTypographyTwigExtension extends AbstractTypographyTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.bundle.bootstrapbundle.twig.extension.typography.heading";

    /**
     * Displays a Boostrap heading 1.
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap heading 1.
     */
    public function bootstrapH1Function(array $args = []) {
        return $this->bootstrapH(1, ArrayUtility::get($args, "content"), ArrayUtility::get($args, "description"), ArrayUtility::get($args, "class"));
    }

    /**
     * Displays a Bootstrap heading 2.
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap heading 2.
     */
    public function bootstrapH2Function(array $args = []) {
        return $this->bootstrapH(2, ArrayUtility::get($args, "content"), ArrayUtility::get($args, "description"), ArrayUtility::get($args, "class"));
    }

    /**
     * Displays a Bootstrap heading 3.
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap heading 3.
     */
    public function bootstrapH3Function(array $args = []) {
        return $this->bootstrapH(3, ArrayUtility::get($args, "content"), ArrayUtility::get($args, "description"), ArrayUtility::get($args, "class"));
    }

    /**
     * Displays a Bootstrap heading 4.
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap heading 4.
     */
    public function bootstrapH4Function(array $args = []) {
        return $this->bootstrapH(4, ArrayUtility::get($args, "content"), ArrayUtility::get($args, "description"), ArrayUtility::get($args, "class"));
    }

    /**
     * Displays a  heading 5.
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap heading 5.
     */
    public function bootstrapH5Function(array $args = []) {
        return $this->bootstrapH(5, ArrayUtility::get($args, "content"), ArrayUtility::get($args, "description"), ArrayUtility::get($args, "class"));
    }

    /**
     * Displays a Bootstrap heading 6.
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap heading 6.
     */
    public function bootstrapH6Function(array $args = []) {
        return $this->bootstrapH(6, ArrayUtility::get($args, "content"), ArrayUtility::get($args, "description"), ArrayUtility::get($args, "class"));
    }

    /**
     * Get the Twig functions.
     *
     * @return array Returns the Twig functions.
     */
    public function getFunctions() {
        return [
            new Twig_SimpleFunction("bootstrapH1", [$this, "bootstrapH1Function"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("bootstrapH2", [$this, "bootstrapH2Function"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("bootstrapH3", [$this, "bootstrapH3Function"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("bootstrapH4", [$this, "bootstrapH4Function"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("bootstrapH5", [$this, "bootstrapH5Function"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("bootstrapH6", [$this, "bootstrapH6Function"], ["is_safe" => ["html"]]),
        ];
    }

}
