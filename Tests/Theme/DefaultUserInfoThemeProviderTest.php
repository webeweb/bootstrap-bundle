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
use WBW\Bundle\BootstrapBundle\Theme\DefaultUserInfoThemeProvider;

/**
 * Default user info theme provider test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Theme
 */
class DefaultUserInfoThemeProviderTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new DefaultUserInfoThemeProvider();

        $this->assertEquals(null, $obj->getView());
        $this->assertFalse($obj->provideRegisterLink());
        $this->assertFalse($obj->provideResettingLink());
    }

}
