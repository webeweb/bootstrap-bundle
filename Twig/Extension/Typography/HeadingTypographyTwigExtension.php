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
 * Heading typography Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
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
     * Constructor.
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Displays a Boostrap heading 1.
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap heading 1.
     */
    public function bootstrapHeading1Function(array $args = []) {
        return $this->bootstrapHeading(1, ArrayUtility::get($args, "content"), ArrayUtility::get($args, "description"), ArrayUtility::get($args, "class"));
    }

    /**
     * Displays a Bootstrap heading 2.
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap heading 2.
     */
    public function bootstrapHeading2Function(array $args = []) {
        return $this->bootstrapHeading(2, ArrayUtility::get($args, "content"), ArrayUtility::get($args, "description"), ArrayUtility::get($args, "class"));
    }

    /**
     * Displays a Bootstrap heading 3.
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap heading 3.
     */
    public function bootstrapHeading3Function(array $args = []) {
        return $this->bootstrapHeading(3, ArrayUtility::get($args, "content"), ArrayUtility::get($args, "description"), ArrayUtility::get($args, "class"));
    }

    /**
     * Displays a Bootstrap heading 4.
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap heading 4.
     */
    public function bootstrapHeading4Function(array $args = []) {
        return $this->bootstrapHeading(4, ArrayUtility::get($args, "content"), ArrayUtility::get($args, "description"), ArrayUtility::get($args, "class"));
    }

    /**
     * Displays a  heading 5.
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap heading 5.
     */
    public function bootstrapHeading5Function(array $args = []) {
        return $this->bootstrapHeading(5, ArrayUtility::get($args, "content"), ArrayUtility::get($args, "description"), ArrayUtility::get($args, "class"));
    }

    /**
     * Displays a Bootstrap heading 6.
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap heading 6.
     */
    public function bootstrapHeading6Function(array $args = []) {
        return $this->bootstrapHeading(6, ArrayUtility::get($args, "content"), ArrayUtility::get($args, "description"), ArrayUtility::get($args, "class"));
    }

    /**
     * Get the Twig functions.
     *
     * @return array Returns the Twig functions.
     */
    public function getFunctions() {
        return [
            new Twig_SimpleFunction("bootstrapHeading1", [$this, "bootstrapHeading1Function"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("bootstrapHeading2", [$this, "bootstrapHeading2Function"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("bootstrapHeading3", [$this, "bootstrapHeading3Function"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("bootstrapHeading4", [$this, "bootstrapHeading4Function"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("bootstrapHeading5", [$this, "bootstrapHeading5Function"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("bootstrapHeading6", [$this, "bootstrapHeading6Function"], ["is_safe" => ["html"]]),
        ];
    }

}
