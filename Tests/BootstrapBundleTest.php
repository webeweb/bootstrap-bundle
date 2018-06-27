<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests;

use WBW\Bundle\BootstrapBundle\BootstrapBundle;
use WBW\Bundle\BootstrapBundle\Tests\Cases\AbstractBootstrapFrameworkTestCase;

/**
 * Bootstrap bundle test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests
 * @final
 */
final class BootstrapBundleTest extends AbstractBootstrapFrameworkTestCase {

    /**
     * Tests __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $this->assertEquals("danger", BootstrapBundle::BOOTSTRAP_DANGER);
        $this->assertEquals("default", BootstrapBundle::BOOTSTRAP_DEFAULT);
        $this->assertEquals("info", BootstrapBundle::BOOTSTRAP_INFO);
        $this->assertEquals("primary", BootstrapBundle::BOOTSTRAP_PRIMARY);
        $this->assertEquals("success", BootstrapBundle::BOOTSTRAP_SUCCESS);
        $this->assertEquals("warning", BootstrapBundle::BOOTSTRAP_WARNING);
    }

}
