<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Helper;

use Exception;
use WBW\Bundle\BootstrapBundle\Asset\CSSAssetProvider;
use WBW\Bundle\BootstrapBundle\Helper\AssetHelper;
use WBW\Bundle\BootstrapBundle\Tests\AbstractBootstrapFrameworkTestCase;
use WBW\Bundle\BootstrapBundle\Tests\Fixtures\Asset\TestCSSAssetProvider;
use WBW\Library\Core\Exception\Argument\IllegalArgumentException;

/**
 * Asset helper test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Helper
 * @final
 */
final class AssetHelperTest extends AbstractBootstrapFrameworkTestCase {

    /**
     * Tests the getFilenames() method.
     *
     * @return void
     */
    public function testGetFilenames() {

        $res = AssetHelper::getFilenames([new CSSAssetProvider()], ".css");
        $this->assertCount(19, $res);
    }

    /**
     * Tests the getFilenames() method.
     *
     * @return void
     */
    public function testGetFilenamesWithIllegalArgumentException() {

        try {

            AssetHelper::getFilenames([new TestCSSAssetProvider()], ".css");
        } catch (Exception $ex) {

            $this->assertInstanceOf(IllegalArgumentException::class, $ex);
            $this->assertRegExp("/^The filename \".*animate\.min\.js\" must end with the extension \.css$/", $ex->getMessage());
        }
    }

}
