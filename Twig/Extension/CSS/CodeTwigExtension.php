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

use Twig\TwigFunction;
use WBW\Library\Core\Argument\Helper\ArrayHelper;

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
    const SERVICE_NAME = "wbw.bootstrap.twig.extension.css.code";

    /**
     * Displays a Bootstrap basic block.
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap basic block.
     */
    public function bootstrapBasicBlockFunction(array $args = []): string {
        return $this->bootstrapBasicBlock(ArrayHelper::get($args, "content"));
    }

    /**
     * Displays a Bootstrap inline.
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap inline.
     */
    public function bootstrapInlineFunction(array $args = []): string {
        return $this->bootstrapInline(ArrayHelper::get($args, "content"));
    }

    /**
     * Displays a Bootstrap sample output.
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap smaple output.
     */
    public function bootstrapSampleOutputFunction(array $args = []): string {
        return $this->bootstrapSampleOutput(ArrayHelper::get($args, "content"));
    }

    /**
     * Displays a Bootstrap user input.
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap user input.
     */
    public function bootstrapUserInputFunction(array $args = []): string {
        return $this->bootstrapUserInput(ArrayHelper::get($args, "content"));
    }

    /**
     * Displays a Bootstrap variable.
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap variable.
     */
    public function bootstrapVariableFunction(array $args = []): string {
        return $this->bootstrapVariable(ArrayHelper::get($args, "content"));
    }

    /**
     * Get the Twig functions.
     *
     * @return TwigFunction[] Returns the Twig functions.
     */
    public function getFunctions(): array {
        return [
            new TwigFunction("bootstrapBasicBlock", [$this, "bootstrapBasicBlockFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("bsBasicBlock", [$this, "bootstrapBasicBlockFunction"], ["is_safe" => ["html"]]),

            new TwigFunction("bootstrapInline", [$this, "bootstrapInlineFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("bsInline", [$this, "bootstrapInlineFunction"], ["is_safe" => ["html"]]),

            new TwigFunction("bootstrapSampleOutput", [$this, "bootstrapSampleOutputFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("bsSampleOutput", [$this, "bootstrapSampleOutputFunction"], ["is_safe" => ["html"]]),

            new TwigFunction("bootstrapUserInput", [$this, "bootstrapUserInputFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("bsUserInput", [$this, "bootstrapUserInputFunction"], ["is_safe" => ["html"]]),

            new TwigFunction("bootstrapVariable", [$this, "bootstrapVariableFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("bsVariable", [$this, "bootstrapVariableFunction"], ["is_safe" => ["html"]]),
        ];
    }
}
