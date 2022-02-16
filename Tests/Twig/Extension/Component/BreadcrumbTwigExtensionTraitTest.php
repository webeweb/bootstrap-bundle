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

use WBW\Bundle\BootstrapBundle\Tests\Fixtures\Twig\Extension\Component\TestBreadcrumbTwigExtensionTrait;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Component\BreadcrumbTwigExtension;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Breadcrumb Twig extension trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\Component
 */
class BreadcrumbTwigExtensionTraitTest extends AbstractTestCase {

    /**
     * Tests setBreadcrumbTwigExtension()
     *
     * @return void
     */
    public function testSetBreadcrumbTwigExtension(): void {

        // Set a Breadcrumb Twig extension mock.
        $breadcrumbTwigExtension = new BreadcrumbTwigExtension($this->twigEnvironment, $this->translator);

        $obj = new TestBreadcrumbTwigExtensionTrait();

        $obj->setBreadcrumbTwigExtension($breadcrumbTwigExtension);
        $this->assertSame($breadcrumbTwigExtension, $obj->getBreadcrumbTwigExtension());
    }
}
