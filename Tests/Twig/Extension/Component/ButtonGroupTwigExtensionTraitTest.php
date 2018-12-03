<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\Component;

use WBW\Bundle\BootstrapBundle\Tests\Fixtures\Twig\Extension\Component\TestButtonGroupTwigExtensionTrait;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Component\ButtonGroupTwigExtension;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Button group Twig extension trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\Component
 */
class ButtonGroupTwigExtensionTraitTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new TestButtonGroupTwigExtensionTrait();

        $this->assertNull($obj->getButtonGroupTwigExtension());
    }

    /**
     * Tests the setButtonGroupTwigExtension() method.
     *
     * @return void
     */
    public function testSetButtonGroupTwigExtension() {

        // Set a Button group Twig extension mock.
        $buttonGroupTwigExtension = new ButtonGroupTwigExtension($this->twigEnvironment);

        $obj = new TestButtonGroupTwigExtensionTrait();

        $obj->setButtonGroupTwigExtension($buttonGroupTwigExtension);
        $this->assertSame($buttonGroupTwigExtension, $obj->getButtonGroupTwigExtension());
    }

}
