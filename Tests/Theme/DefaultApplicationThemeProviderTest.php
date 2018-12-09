<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Theme;

use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\BootstrapBundle\Theme\DefaultApplicationThemeProvider;

/**
 * Default application theme provider test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Theme
 */
class DefaultApplicationThemeProviderTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new DefaultApplicationThemeProvider();

        $this->assertEquals("Bootstrap bundle", $obj->getDescription());
        $this->assertEquals("/", $obj->getHome());
        $this->assertEquals("Bootstrap<b>bundle</b>", $obj->getName());
        $this->assertEquals("/", $obj->getRoute());
        $this->assertEquals("Bootstrap bundle", $obj->getTitle());
        $this->assertEquals("dev-master", $obj->getVersion());
        $this->assertEquals(null, $obj->getView());
        $this->assertContains("2018", $obj->getYear());
    }

}
