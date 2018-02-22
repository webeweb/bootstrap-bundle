<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Twig\Extension\Code;

use Twig_SimpleFunction;
use WBW\Library\Core\Utility\ArrayUtility;

/**
 * User input code Twig extension.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\Code
 * @final
 */
final class UserInputCodeTwigExtension extends AbstractCodeTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.bundle.bootstrapbundle.twig.extension.code.userinput";

    /**
     * Displays a Bootstrap user input.
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap user input.
     */
    public function bootstrapUserInputFunction(array $args = []) {
        return $this->bootstrapUserInput(ArrayUtility::get($args, "content"));
    }

    /**
     * Get the Twig functions.
     *
     * @return array Returns the Twig functions.
     */
    public function getFunctions() {
        return [
            new Twig_SimpleFunction("bootstrapUserInput", [$this, "bootstrapUserInputFunction"], ["is_safe" => ["html"]]),
        ];
    }

}
