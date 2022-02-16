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

use WBW\Bundle\BootstrapBundle\Tests\Fixtures\Twig\Extension\CSS\TestImageTwigExtensionTrait;
use WBW\Bundle\BootstrapBundle\Twig\Extension\CSS\ImageTwigExtension;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Image Twig extension trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\CSS
 */
class ImageTwigExtensionTraitTest extends AbstractTestCase {

    /**
     * Tests setImageTwigExtension()
     *
     * @return void
     */
    public function testSetImageTwigExtension(): void {

        // Set an Image Twig extension mock.
        $imageTwigExtension = new ImageTwigExtension($this->twigEnvironment);

        $obj = new TestImageTwigExtensionTrait();

        $obj->setImageTwigExtension($imageTwigExtension);
        $this->assertSame($imageTwigExtension, $obj->getImageTwigExtension());
    }
}
