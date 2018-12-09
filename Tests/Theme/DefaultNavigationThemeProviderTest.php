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

use WBW\Bundle\CoreBundle\Navigation\NavigationTree;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;
use WBW\Bundle\BootstrapBundle\Theme\DefaultNavigationThemeProvider;

/**
 * Default navigation theme provider test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Theme
 */
class DefaultNavigationThemeProviderTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new DefaultNavigationThemeProvider();

        $this->assertEquals(null, $obj->getView());
        $this->assertInstanceOf(NavigationTree::class, $obj->getTree());
    }

}
