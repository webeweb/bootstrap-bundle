<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Form\Renderer;

use PHPUnit_Framework_TestCase;
use WBW\Bundle\BootstrapBundle\Form\Renderer\ChoiceRendererInterface;
use WBW\Bundle\BootstrapBundle\Form\Renderer\FormRenderer;
use WBW\Bundle\BootstrapBundle\Form\Renderer\TranslatedChoiceRendererInterface;
use WBW\Library\Core\Sort\Tree\Alphabetical\AlphabeticalTreeSortInterface;

/**
 * Form renderer test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Form\Renderer
 * @final
 */
final class FormRendererTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the render() method.
     *
     * @return void
     */
    public function testRender() {

        $obj = [
            null,
            $this->getMockBuilder(AlphabeticalTreeSortInterface::class)->getMock(),
            $this->getMockBuilder(ChoiceRendererInterface::class)->getMock(),
            $this->getMockBuilder(TranslatedChoiceRendererInterface::class)->getMock(),
            $this,
        ];

        // Set the mocks.
        $obj[1]->expects($this->any())->method('getAlphabeticalTreeSortParent')->willReturn(null);
        $obj[2]->expects($this->any())->method('getChoiceLabel')->willReturn('choiceLabel');
        $obj[3]->expects($this->any())->method('getTranslatedChoiceLabel')->willReturn('translatedChoiceLabel');

        $this->assertEquals('Empty selection', FormRenderer::render($obj[0]));
        $this->assertEquals('─ FormRendererInterface not implemented by this object', FormRenderer::render($obj[1]));
        $this->assertEquals('choiceLabel', FormRenderer::render($obj[2]));
        $this->assertEquals('translatedChoiceLabel', FormRenderer::render($obj[3]));
        $this->assertEquals('FormRendererInterface not implemented by this object', FormRenderer::render($obj[4]));
    }

}
