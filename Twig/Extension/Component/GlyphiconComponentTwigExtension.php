<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Twig\Extension\Component;

use Twig_SimpleFunction;
use WBW\Library\Core\Utility\Argument\ArrayUtility;

/**
 * Glyphicon component Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\Component
 * @final
 */
final class GlyphiconComponentTwigExtension extends AbstractComponentTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.bundle.bootstrapbundle.twig.extension.component.glyphicon";

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Displays a Bootstrap glyphicon.
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap glyphicon.
     */
    public function bootstrapGlyphiconFunction(array $args = []) {
        return $this->bootstrapGlyphicon(ArrayUtility::get($args, "name", "home"), ArrayUtility::get($args, "style"));
    }

    /**
     * Get the Twig functions.
     *
     * @return Twig_SimpleFunction[] Returns the Twig functions.
     */
    public function getFunctions() {
        return [
            new Twig_SimpleFunction("bootstrapGlyphicon", [$this, "bootstrapGlyphiconFunction"], ["is_safe" => ["html"]]),
        ];
    }

}
