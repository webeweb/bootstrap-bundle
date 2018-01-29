<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Twig\Extension\Component;

use Twig_SimpleFunction;
use WBW\Library\Core\Utility\ArrayUtility;

/**
 * Glyphicon component Twig extension.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
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
	 * @return array Returns the Twig functions.
	 */
	public function getFunctions() {
		return [
			new Twig_SimpleFunction("bootstrapGlyphicon", [$this, "bootstrapGlyphiconFunction"], ["is_safe" => ["html"]]),
		];
	}

}
