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
 * Progress bar component Twig extension.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\Component
 * @final
 */
final class ProgressBarComponentTwigExtension extends AbstractComponentTwigExtension {

	/**
	 * Service name.
	 *
	 * @var string
	 */
	const SERVICE_NAME = "webeweb.bundle.bootstrapbundle.twig.extension.component.progress-bar";

	/**
	 * Displays a Bootstrap basic progress bar.
	 *
	 * @param array $args The arguments.
	 * @return string Returns the Bootstrap basic progress bar.
	 */
	public function bootstrapBasicProgressBarFunction(array $args = []) {
		return $this->bootstrapProgressBar(ArrayUtility::get($args, "content"), ArrayUtility::get($args, "value", 50), ArrayUtility::get($args, "min", 0), ArrayUtility::get($args, "max", 100), ArrayUtility::get($args, "striped", false), ArrayUtility::get($args, "animated", false));
	}

	/**
	 * Displays a Bootstrap progress bar "Danger".
	 *
	 * @param array $args The arguments.
	 * @return string Returns the Bootstrap progress bar "Danger".
	 */
	public function bootstrapProgressBarDangerFunction(array $args = []) {
		return $this->bootstrapProgressBar(ArrayUtility::get($args, "content"), ArrayUtility::get($args, "value", 50), ArrayUtility::get($args, "min", 0), ArrayUtility::get($args, "max", 100), ArrayUtility::get($args, "striped", false), ArrayUtility::get($args, "animated", false), "progress-bar-danger");
	}

	/**
	 * Displays a Bootstrap progress bar "Info".
	 *
	 * @param array $args The arguments.
	 * @return string Returns the Bootstrap progress bar "Info".
	 */
	public function bootstrapProgressBarInfoFunction(array $args = []) {
		return $this->bootstrapProgressBar(ArrayUtility::get($args, "content"), ArrayUtility::get($args, "value", 50), ArrayUtility::get($args, "min", 0), ArrayUtility::get($args, "max", 100), ArrayUtility::get($args, "striped", false), ArrayUtility::get($args, "animated", false), "progress-bar-info");
	}

	/**
	 * Displays a Bootstrap progress bar "Success".
	 *
	 * @param array $args The arguments.
	 * @return string Returns the Bootstrap progress bar "Success".
	 */
	public function bootstrapProgressBarSuccessFunction(array $args = []) {
		return $this->bootstrapProgressBar(ArrayUtility::get($args, "content"), ArrayUtility::get($args, "value", 50), ArrayUtility::get($args, "min", 0), ArrayUtility::get($args, "max", 100), ArrayUtility::get($args, "striped", false), ArrayUtility::get($args, "animated", false), "progress-bar-success");
	}

	/**
	 * Displays a Bootstrap progress bar "Warning".
	 *
	 * @param array $args The arguments.
	 * @return string Returns the Bootstrap progress bar "Warning".
	 */
	public function bootstrapProgressBarWarningFunction(array $args = []) {
		return $this->bootstrapProgressBar(ArrayUtility::get($args, "content"), ArrayUtility::get($args, "value", 50), ArrayUtility::get($args, "min", 0), ArrayUtility::get($args, "max", 100), ArrayUtility::get($args, "striped", false), ArrayUtility::get($args, "animated", false), "progress-bar-warning");
	}

	/**
	 * Get the Twig functions.
	 *
	 * @return array Returns the Twig functions.
	 */
	public function getFunctions() {
		return [
			new Twig_SimpleFunction("bootstrapBasicProgressBar", [$this, "bootstrapBasicProgressBarFunction"], ["is_safe" => ["html"]]),
			new Twig_SimpleFunction("bootstrapProgressBarDanger", [$this, "bootstrapProgressBarDangerFunction"], ["is_safe" => ["html"]]),
			new Twig_SimpleFunction("bootstrapProgressBarInfo", [$this, "bootstrapProgressBarInfoFunction"], ["is_safe" => ["html"]]),
			new Twig_SimpleFunction("bootstrapProgressBarSuccess", [$this, "bootstrapProgressBarSuccessFunction"], ["is_safe" => ["html"]]),
			new Twig_SimpleFunction("bootstrapProgressBarWarning", [$this, "bootstrapProgressBarWarningFunction"], ["is_safe" => ["html"]]),
		];
	}

}
