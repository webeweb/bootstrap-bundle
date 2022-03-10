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

use WBW\Bundle\BootstrapBundle\Twig\Extension\AbstractTwigExtension;

/**
 * Abstract code Twig extension.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\CSS
 * @abstract
 */
abstract class AbstractCodeTwigExtension extends AbstractTwigExtension {

    /**
     * Displays a Bootstrap basic block.
     *
     * @param string|null $content The content.
     * @return string  Returns the Bootstrap basic block.
     */
    protected function bootstrapBasicBlock(?string $content): string {
        return static::coreHtmlElement("pre", $content);
    }

    /**
     * Displays a Bootstrap inline.
     *
     * @param string|null $content The inline content.
     * @return string  Returns the Bootstrap inline.
     */
    protected function bootstrapInline(?string $content): string {
        return static::coreHtmlElement("code", $content);
    }

    /**
     * Displays a Bootstrap sample output.
     *
     * @param string|null $content The content.
     * @return string  Returns the Bootstrap sample output.
     */
    protected function bootstrapSampleOutput(?string $content): string {
        return static::coreHtmlElement("samp", $content);
    }

    /**
     * Displays a Bootstrap user input.
     *
     * @param string|null $content The content.
     * @return string  Returns the Bootstrap user input.
     */
    protected function bootstrapUserInput(?string $content): string {
        return static::coreHtmlElement("kbd", $content);
    }

    /**
     * Displays a Bootstrap variable.
     *
     * @param string|null $content The content.
     * @return string  Returns the Bootstrap variable.
     */
    protected function bootstrapVariable(?string $content): string {
        return static::coreHtmlElement("var", $content);
    }
}
