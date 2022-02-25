<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Asset\Theme;

use WBW\Bundle\BootstrapBundle\Asset\Theme\DefaultBreadcrumbsThemeProvider;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Default breadcrumbs theme provider test
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Tests\Asset\Theme
 */
class DefaultBreadcrumbsThemeProviderTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new DefaultBreadcrumbsThemeProvider();

        $this->assertNotNull($obj);
    }
}
