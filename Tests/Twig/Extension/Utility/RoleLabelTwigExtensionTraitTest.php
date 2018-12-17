<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\Component;

use WBW\Bundle\BootstrapBundle\Tests\Fixtures\Twig\Extension\Utility\TestRoleLabelTwigExtensionTrait;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Component\LabelTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Utility\RoleLabelTwigExtension;
use WBW\Bundle\SyntaxHighlighterBundle\Tests\AbstractTestCase;

/**
 * Role label Twig extension trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\CSS
 */
class RoleLabelTwigExtensionTraitTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new TestRoleLabelTwigExtensionTrait();

        $this->assertNull($obj->getRoleLabelTwigExtension());
    }

    /**
     * Tests the setRoleLabelTwigExtension() method.
     *
     * @return void
     */
    public function testSetRoleLabelTwigExtension() {

        // Set a Label Twig extension mock.
        $labelTwigExtension = new LabelTwigExtension($this->twigEnvironment);

        // Set a role label Twig extension mock.
        $formButtonTwigExtension = new RoleLabelTwigExtension($this->twigEnvironment, $this->translator, $labelTwigExtension);

        $obj = new TestRoleLabelTwigExtensionTrait();

        $obj->setRoleLabelTwigExtension($formButtonTwigExtension);
        $this->assertSame($formButtonTwigExtension, $obj->getRoleLabelTwigExtension());
    }

}
