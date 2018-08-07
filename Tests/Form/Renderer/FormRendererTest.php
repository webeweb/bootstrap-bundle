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

use WBW\Bundle\BootstrapBundle\Form\Renderer\ChoiceRendererInterface;
use WBW\Bundle\BootstrapBundle\Form\Renderer\FormRenderer;
use WBW\Bundle\BootstrapBundle\Form\Renderer\TranslatedChoiceRendererInterface;
use WBW\Bundle\BootstrapBundle\Tests\Cases\AbstractBootstrapFrameworkTestCase;
use WBW\Library\Core\Model\Sorting\AlphabeticalTreeNodeInterface;

/**
 * Form renderer test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Form\Renderer
 * @final
 */
final class FormRendererTest extends AbstractBootstrapFrameworkTestCase {

    /**
     * Arguments.
     *
     * @var array
     */
    private $args;

    /**
     * {@inheritdoc}
     */
    protected function setUp() {

        // Set the mocks.
        $this->args = [
            null,
            $this->getMockBuilder(AlphabeticalTreeNodeInterface::class)->getMock(),
            $this->getMockBuilder(ChoiceRendererInterface::class)->getMock(),
            $this->getMockBuilder(TranslatedChoiceRendererInterface::class)->getMock(),
            $this,
        ];

        $this->args[1]->expects($this->any())->method("getAlphabeticalTreeNodeParent")->willReturn(null);
        $this->args[2]->expects($this->any())->method("getChoiceLabel")->willReturn("choiceLabel");
        $this->args[3]->expects($this->any())->method("getTranslatedChoiceLabel")->willReturn("translatedChoiceLabel");
    }

    /**
     * Tests the render() method.
     *
     * @return void
     */
    public function testRender() {

        $this->assertEquals("Empty selection", FormRenderer::render($this->args[0]));
        $this->assertEquals("─ FormRendererInterface not implemented by this object", FormRenderer::render($this->args[1]));
        $this->assertEquals("choiceLabel", FormRenderer::render($this->args[2]));
        $this->assertEquals("translatedChoiceLabel", FormRenderer::render($this->args[3]));
        $this->assertEquals("FormRendererInterface not implemented by this object", FormRenderer::render($this->args[4]));
    }

}
