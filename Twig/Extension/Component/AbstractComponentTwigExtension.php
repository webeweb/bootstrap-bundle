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

use WBW\Bundle\BootstrapBundle\Twig\Extension\AbstractBootstrapTwigExtension;
use WBW\Library\Core\Utility\StringUtility;

/**
 * Abstract component Twig extension.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\Component
 * @abstract
 */
abstract class AbstractComponentTwigExtension extends AbstractBootstrapTwigExtension {

	/**
	 * Displays a Bootstrap alert.
	 *
	 * @param string $content The alert content.
	 * @param boolean $dismissible Dismissible alert ?
	 * @param string $class The alert class.
	 * @return string Returns the Bootstrap alert.
	 */
	final protected function bootstrapAlert($content, $dismissible, $class) {

		// Initialize the templates.
		$template	 = "<div %attributes%>%content%</div>";
		$button		 = '<button class="close" type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';

		// Initialize the attributes.
		$_attr = [];

		$_attr["class"]		 = ["alert", $class];
		$_attr["class"][]	 = true === $dismissible ? "alert-dismissible" : null;
		$_attr["role"]		 = ["alert"];

		// Initialize the parameters.
		$_content = (true === $dismissible ? $button : "") . (null !== $content ? $content : self::DEFAULT_CONTENT);

		// Return the HTML.
		return StringUtility::replace($template, ["%attributes%", "%content%"], [StringUtility::parseArray($_attr), $_content]);
	}

	/**
	 * Displays a Bootstrap badge.
	 *
	 * @param string $content The badge content.
	 * @return string Returns the Bootstrap badge.
	 */
	final protected function bootstrapBadge($content) {

		// Initialize the template.
		$template = '<span %attributes%>%content%</span>';

		// Initialize the attributes.
		$_attr = [];

		$_attr["class"] = ["badge"];

		// Initialize the parameters.
		$_content = null !== $content ? $content : self::DEFAULT_CONTENT;

		// Return the HTML.
		return StringUtility::replace($template, ["%attributes%", "%content%"], [StringUtility::parseArray($_attr), $_content]);
	}

	/**
	 * Displays a Bootstrap glyphicon.
	 *
	 * @param string $name The glyphicon name.
	 * @return string Returns the Bootstrap glyphicon.
	 */
	final protected function bootstrapGlyphicon($name) {

		// Initialize the template.
		$template = "<span %attributes%></span>";

		// Initialize the attributes.
		$_attr = [];

		$_attr["class"]			 = ["glyphicon"];
		$_attr["class"][]		 = null !== $name ? "glyphicon-" . $name : null;
		$_attr["aria-hidden"]	 = "true";

		// Return the HTML.
		return StringUtility::replace($template, ["%attributes%"], [StringUtility::parseArray($_attr)]);
	}

	/**
	 * Displays a Bootstrap label.
	 *
	 * @param string $content The label content.
	 * @param string $class The label class.
	 * @return string Returns the Bootstrap label.
	 */
	final protected function bootstrapLabel($content, $class) {

		// Initialize the template.
		$template = "<span %attributes%>%content%</span>";

		// Initialize the attributes.
		$_attr = [];

		$_attr["class"] = ["label", $class];

		// Initialize the parameters.
		$_content = null !== $content ? $content : self::DEFAULT_CONTENT;

		// Return the HTML.
		return StringUtility::replace($template, ["%attributes%", "%content%"], [StringUtility::parseArray($_attr), $_content]);
	}

	/**
	 * Displays a Bootstrap progress bar.
	 *
	 * @param string $label The progress bar label.
	 * @param integer $value The progress bar value.
	 * @param integer $min The progress bar min.
	 * @param integer $max The progress bar max.
	 * @param boolean $striped Progress bar striped ?
	 * @param boolean $animated Progress bar animated ?
	 * @param string $class The progress bar class.
	 * @return string Returns the Bootstrap progress bar.
	 */
	final protected function bootstrapProgressBar($label, $value, $min, $max, $striped, $animated, $class = null) {

		// Initialize the template.
		$template = '<div class="progress"><div %attributes%>%label%</div></div>';

		// Initialize the attributes.
		$_attr = [];

		$_attr["class"]			 = ["progress-bar", $class];
		$_attr["class"][]		 = true === $striped ? "progress-bar-striped" : null;
		$_attr["class"][]		 = true === $animated ? "active" : null;
		$_attr["style"]			 = "width: " . $value . "%;";
		$_attr["role"]			 = "progressbar";
		$_attr["aria-valuenow"]	 = $value;
		$_attr["aria-valuemin"]	 = $min;
		$_attr["aria-valuemax"]	 = $max . "%";

		// Initialize the parameters.
		$_label = !is_null($label) ? $label . '<span class="sr-only">' . $value . ' %</span>' : self::DEFAULT_CONTENT;

		// Return the HTML.
		return StringUtility::replace($template, ["%attributes%", "%label%"], [StringUtility::parseArray($_attr), $_label]);
	}

}
