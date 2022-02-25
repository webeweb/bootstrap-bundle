<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\CSS;

use WBW\Bundle\BootstrapBundle\Tests\Fixtures\Twig\Extension\CSS\TestButtonTwigExtensionTrait;
use WBW\Bundle\BootstrapBundle\Twig\Extension\CSS\ButtonTwigExtension;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Button Twig extension trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\CSS
 */
class ButtonTwigExtensionTraitTest extends AbstractTestCase {

    /**
     * Tests setButtonTwigExtension()
     *
     * @return void
     */
    public function testSetButtonTwigExtension(): void {

        // Set a Button Twig extension mock.
        $buttonTwigExtension = new ButtonTwigExtension($this->twigEnvironment);

        $obj = new TestButtonTwigExtensionTrait();

        $obj->setButtonTwigExtension($buttonTwigExtension);
        $this->assertSame($buttonTwigExtension, $obj->getButtonTwigExtension());
    }
}
