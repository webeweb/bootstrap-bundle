<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Twig\Extension\CSS;

use Twig_SimpleFunction;
use WBW\Library\Core\Argument\ArrayHelper;

/**
 * Code Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\CSS
 * @link https://getbootstrap.com/docs/3.3/css/#code
 */
class CodeTwigExtension extends AbstractCodeTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.bootstrap.twig.extension.css.code";

    /**
     * Displays a Bootstrap basic block.
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap basic block.
     */
    public function bootstrapBasicBlockFunction(array $args = []) {
        return $this->bootstrapBasicBlock(ArrayHelper::get($args, "content"));
    }

    /**
     * Displays a Bootstrap inline.
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap inline.
     */
    public function bootstrapInlineFunction(array $args = []) {
        return $this->bootstrapInline(ArrayHelper::get($args, "content"));
    }

    /**
     * Displays a Bootstrap sample output.
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap smaple output.
     */
    public function bootstrapSampleOutputFunction(array $args = []) {
        return $this->bootstrapSampleOutput(ArrayHelper::get($args, "content"));
    }

    /**
     * Displays a Bootstrap user input.
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap user input.
     */
    public function bootstrapUserInputFunction(array $args = []) {
        return $this->bootstrapUserInput(ArrayHelper::get($args, "content"));
    }

    /**
     * Displays a Bootstrap variable.
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap variable.
     */
    public function bootstrapVariableFunction(array $args = []) {
        return $this->bootstrapVariable(ArrayHelper::get($args, "content"));
    }

    /**
     * Get the Twig functions.
     *
     * @return array Returns the Twig functions.
     */
    public function getFunctions() {
        return [
            new Twig_SimpleFunction("bootstrapBasicBlock", [$this, "bootstrapBasicBlockFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("bsBasicBlock", [$this, "bootstrapBasicBlockFunction"], ["is_safe" => ["html"]]),

            new Twig_SimpleFunction("bootstrapInline", [$this, "bootstrapInlineFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("bsInline", [$this, "bootstrapInlineFunction"], ["is_safe" => ["html"]]),

            new Twig_SimpleFunction("bootstrapSampleOutput", [$this, "bootstrapSampleOutputFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("bsSampleOutput", [$this, "bootstrapSampleOutputFunction"], ["is_safe" => ["html"]]),

            new Twig_SimpleFunction("bootstrapUserInput", [$this, "bootstrapUserInputFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("bsUserInput", [$this, "bootstrapUserInputFunction"], ["is_safe" => ["html"]]),

            new Twig_SimpleFunction("bootstrapVariable", [$this, "bootstrapVariableFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("bsVariable", [$this, "bootstrapVariableFunction"], ["is_safe" => ["html"]]),
        ];
    }
}
