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

use WBW\Bundle\BootstrapBundle\Tests\Fixtures\Twig\Extension\Component\TestDropdownTwigExtensionTrait;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Component\DropdownTwigExtension;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Dropdown Twig extension trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\Component
 */
class DropdownTwigExtensionTraitTest extends AbstractTestCase {

    /**
     * Tests the setDropdownTwigExtension() method.
     *
     * @return void
     */
    public function testSetDropdownTwigExtension() {

        // Set a Dropdown Twig extension mock.
        $dropdownTwigExtension = new DropdownTwigExtension($this->twigEnvironment);

        $obj = new TestDropdownTwigExtensionTrait();

        $obj->setDropdownTwigExtension($dropdownTwigExtension);
        $this->assertSame($dropdownTwigExtension, $obj->getDropdownTwigExtension());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new TestDropdownTwigExtensionTrait();

        $this->assertNull($obj->getDropdownTwigExtension());
    }
}
