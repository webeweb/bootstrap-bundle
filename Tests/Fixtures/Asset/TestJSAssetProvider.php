<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Fixtures\Asset;

use WBW\Bundle\BootstrapBundle\BootstrapBundle;
use WBW\Bundle\BootstrapBundle\Provider\Asset\JSAssetProviderInterface;

/**
 * Test JS asset provider.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Fixtures\Asset
 * @final
 */
final class TestJSAssetProvider implements JSAssetProviderInterface {

    /**
     * {@inheritdoc}
     */
    public function getDirectory() {
        return BootstrapBundle::getResourcesDirectory() . "/public";
    }

    /**
     * {@inheritdoc}
     */
    public function getResources() {
        return [
            "/animate.css-3.5.2/animate.min.css",
        ];
    }

}
