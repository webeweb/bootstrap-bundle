<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Form\Renderer;

use Symfony\Component\Translation\TranslatorInterface;
use WBW\Library\Core\Sort\Tree\Alphabetical\AlphabeticalTreeSort;
use WBW\Library\Core\Sort\Tree\Alphabetical\AlphabeticalTreeSortInterface;

/**
 * Form renderer.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Form\Renderer
 * @final
 */
final class FormRenderer {

    /**
     * Render a select option.
     *
     * @param mixed $option The option.
     * @param TranslatorInterface $translator The translator service.
     * @return string Returns the label.
     */
    public static function render($option, TranslatorInterface $translator = null) {

        // Check the option.
        if (null === $option) {
            return null !== $translator ? $translator->trans("label.empty_selection") : "Empty selection";
        }

        // Check the implementation.
        if (true === ($option instanceof ChoiceRendererInterface)) {
            $output = $option->getChoiceLabel();
        } else if (true === ($option instanceof TranslatedChoiceRendererInterface)) {
            $output = $option->getTranslatedChoiceLabel($translator);
        } else {
            $output = "FormRendererInterface not implemented by this object";
        }

        if (true === ($option instanceof AlphabeticalTreeSortInterface)) {
            $multiplier = AlphabeticalTreeSort::getLevel($option);
            $nbsp       = html_entity_decode("&nbsp;");
            $symbol     = html_entity_decode(0 === $multiplier ? "&#9472;" : "&#9492;");
            $output     = implode("", [str_repeat($nbsp, $multiplier * 3), $symbol, $nbsp, $output]);
        }

        // Return the output.
        return $output;
    }

}
