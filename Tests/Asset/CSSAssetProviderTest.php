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

use WBW\Bundle\BootstrapBundle\Asset\CSSAssetProvider;
use WBW\Bundle\BootstrapBundle\Tests\AbstractBootstrapFrameworkTestCase;

/**
 * CSS asset provider.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Asset
 * @final
 */
final class CSSAssetProviderTest extends AbstractBootstrapFrameworkTestCase {

    /**
     * Tests the getResources() method.
     *
     * @return void
     */
    public function testGetResources() {

        $obj = new CSSAssetProvider();

        $this->assertCount(19, $obj->getResources());
    }

}
