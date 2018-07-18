<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Twig\Extension\CSS;

use WBW\Bundle\BootstrapBundle\Twig\Extension\AbstractBootstrapTwigExtension;

/**
 * Abstract code Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\CSS
 * @abstract
 */
abstract class AbstractCodeTwigExtension extends AbstractBootstrapTwigExtension {

    /**
     * Constructor.
     */
    protected function __construct() {
        parent::__construct();
    }

    /**
     * Displays a Bootstrap basic block.
     *
     * @param string $content The basic block content.
     * @return string  Returns the Bootstrap deleted text.
     */
    protected function bootstrapBasicBlock($content) {
        return self::bootstrapHTMLElement("pre", $content);
    }

    /**
     * Displays a Bootstrap inline.
     *
     * @param string $content The inline content.
     * @return string  Returns the Bootstrap inline.
     */
    protected function bootstrapInline($content) {
        return self::bootstrapHTMLElement("code", $content);
    }

    /**
     * Displays a Bootstrap sample output.
     *
     * @param string $content The sample output content.
     * @return string  Returns the Bootstrap user input.
     */
    protected function bootstrapSampleOutput($content) {
        return self::bootstrapHTMLElement("samp", $content);
    }

    /**
     * Displays a Bootstrap user input.
     *
     * @param string $content The user input content.
     * @return string  Returns the Bootstrap user input.
     */
    protected function bootstrapUserInput($content) {
        return self::bootstrapHTMLElement("kbd", $content);
    }

    /**
     * Displays a Bootstrap variable.
     *
     * @param string $content The variable content.
     * @return string  Returns the Bootstrap variable.
     */
    protected function bootstrapVariable($content) {
        return self::bootstrapHTMLElement("var", $content);
    }

}
