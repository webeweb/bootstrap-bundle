<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Provider\Theme;

use WBW\Bundle\BootstrapBundle\Provider\Theme\HookDropDownThemeProviderInterface;
use WBW\Bundle\BootstrapBundle\Tests\AbstractFrameworkTestCase;

/**
 * Hook drop down theme provider interface test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Provider\Theme
 * @final
 */
final class HookDropDownThemeProviderInterfaceTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $this->assertEquals("webeweb.bootstrap.provider.theme.hookdropdown", HookDropDownThemeProviderInterface::SERVICE_NAME);
    }

}