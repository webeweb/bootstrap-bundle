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

use WBW\Bundle\BootstrapBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Helper\TestAssetsHelper;

/**
 * Assets helper test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Helper
 */
class AssetsHelperTest extends AbstractTestCase {

    /**
     * Directory "assets".
     *
     * @var string
     */
    private $directoryAssets;

    /**
     * {@inheritdoc}
     */
    protected function setUp() {
        parent::setUp();

        // Set the directories.
        $this->directoryAssets = getcwd() . "/Resources/assets";
    }

    /**
     * Tests the listAssets() method.
     *
     * @return void
     */
    public function testListAssets() {

        $res = TestAssetsHelper::listAssets($this->directoryAssets);
        $this->assertCount(16, $res);

        $this->assertRegexp("/bootstrap\-.*\.zip$/", $res[0]);
        $this->assertRegexp("/bootstrap\-colorpicker\-.*\.zip$/", $res[1]);
        $this->assertRegexp("/bootstrap\-datepicker\-.*\.zip$/", $res[2]);
        $this->assertRegexp("/bootstrap\-daterangepicker\-.*\.zip$/", $res[3]);
        $this->assertRegexp("/bootstrap\-markdown\-.*\.zip$/", $res[4]);
        $this->assertRegexp("/bootstrap\-notify\-.*\.zip$/", $res[5]);
        $this->assertRegexp("/bootstrap\-select\-.*\.zip$/", $res[6]);
        $this->assertRegexp("/bootstrap\-slider\-.*\.zip$/", $res[7]);
        $this->assertRegexp("/bootstrap\-social\-.*\.zip$/", $res[8]);
        $this->assertRegexp("/bootstrap\-tagsinput\-.*\.zip$/", $res[9]);
        $this->assertRegexp("/bootstrap\-timepicker\-.*\.zip$/", $res[10]);
        $this->assertRegexp("/bootstrap\-wysiwyg\-.*\.zip$/", $res[11]);
        $this->assertRegexp("/favicons\.zip$/", $res[12]);
        $this->assertRegexp("/handlebars\-.*\.zip$/", $res[13]);
        $this->assertRegexp("/moment\-.*\.zip$/", $res[14]);
        $this->assertRegexp("/wysihtml\-.*\.zip$/", $res[15]);
    }

}
