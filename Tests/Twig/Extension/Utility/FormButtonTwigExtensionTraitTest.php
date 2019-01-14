<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\Utility;

use WBW\Bundle\BootstrapBundle\Tests\Fixtures\Twig\Extension\Utility\TestFormButtonTwigExtensionTrait;
use WBW\Bundle\BootstrapBundle\Twig\Extension\CSS\ButtonTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Utility\FormButtonTwigExtension;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Form button Twig extension trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\Utility
 */
class FormButtonTwigExtensionTraitTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new TestFormButtonTwigExtensionTrait();

        $this->assertNull($obj->getFormButtonTwigExtension());
    }

    /**
     * Tests the setFormButtonTwigExtension() method.
     *
     * @return void
     */
    public function testSetFormButtonTwigExtension() {

        // Set a Button Twig extension mock.
        $buttonTwigExtension = new ButtonTwigExtension($this->twigEnvironment);

        // Set a Form button Twig extension mock.
        $formButtonTwigExtension = new FormButtonTwigExtension($this->twigEnvironment, $this->translator, $buttonTwigExtension);

        $obj = new TestFormButtonTwigExtensionTrait();

        $obj->setFormButtonTwigExtension($formButtonTwigExtension);
        $this->assertSame($formButtonTwigExtension, $obj->getFormButtonTwigExtension());
    }
}
