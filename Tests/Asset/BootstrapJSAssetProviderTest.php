<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Provider\Asset;

use WBW\Bundle\BootstrapBundle\Asset\BootstrapJSAssetProvider;
use WBW\Bundle\BootstrapBundle\Tests\AbstractBootstrapFrameworkTestCase;

/**
 * Bootstrap JS resources provider test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Asset
 * @final
 */
final class BootstrapJSAssetProviderTest extends AbstractBootstrapFrameworkTestCase {

    /**
     * Tests the getResources() method.
     *
     * @return void
     */
    public function testGetResources() {

        $obj = new BootstrapJSAssetProvider();

        $this->assertCount(20, $obj->getResources());
    }

}
