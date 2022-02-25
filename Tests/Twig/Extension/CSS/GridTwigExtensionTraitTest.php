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

use WBW\Bundle\BootstrapBundle\Tests\Fixtures\Twig\Extension\CSS\TestGridTwigExtensionTrait;
use WBW\Bundle\BootstrapBundle\Twig\Extension\CSS\GridTwigExtension;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Grid Twig extension trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\CSS
 */
class GridTwigExtensionTraitTest extends AbstractTestCase {

    /**
     * Tests setGridTwigExtension()
     *
     * @return void
     */
    public function testSetGridTwigExtension(): void {

        // Set a Grid Twig extension mock.
        $gridTwigExtension = new GridTwigExtension($this->twigEnvironment);

        $obj = new TestGridTwigExtensionTrait();

        $obj->setGridTwigExtension($gridTwigExtension);
        $this->assertSame($gridTwigExtension, $obj->getGridTwigExtension());
    }
}
