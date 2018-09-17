<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Provider\Resources;

use WBW\Bundle\BootstrapBundle\Provider\Resources\CSSResourcesProvider;
use WBW\Bundle\BootstrapBundle\Tests\AbstractBootstrapFrameworkTestCase;

/**
 * CSS resources provider.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Provider\Resources
 * @final
 */
final class CSSResourcesProviderTest extends AbstractBootstrapFrameworkTestCase {

    /**
     * Tests the getResources() method.
     *
     * @return void
     */
    public function testGetResources() {

        $obj = new CSSResourcesProvider();

        $this->assertCount(19, $obj->getResources());
    }

}
