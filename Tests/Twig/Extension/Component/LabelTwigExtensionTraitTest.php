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

use WBW\Bundle\BootstrapBundle\Tests\Fixtures\Twig\Extension\Component\TestLabelTwigExtensionTrait;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Component\LabelTwigExtension;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Label Twig extension trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\Component
 */
class LabelTwigExtensionTraitTest extends AbstractTestCase {

    /**
     * Tests setLabelTwigExtension()
     *
     * @return void
     */
    public function testSetLabelTwigExtension(): void {

        // Set a Label Twig extension mock.
        $labelTwigExtension = new LabelTwigExtension($this->twigEnvironment);

        $obj = new TestLabelTwigExtensionTrait();

        $obj->setLabelTwigExtension($labelTwigExtension);
        $this->assertSame($labelTwigExtension, $obj->getLabelTwigExtension());
    }
}
