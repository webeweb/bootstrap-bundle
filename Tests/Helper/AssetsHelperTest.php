<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Helper;

use Exception;
use WBW\Bundle\BootstrapBundle\Tests\AbstractTestCase;
use WBW\Bundle\BootstrapBundle\WBWBootstrapInterface;
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
     * {@inheritDoc}
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
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testListAssets() {

        $res = TestAssetsHelper::listAssets($this->directoryAssets);
        $this->assertCount(19, $res);

        $this->assertRegExp("/bootstrap\-" . preg_quote(WBWBootstrapInterface::BOOTSTRAP_VERSION_3, ".") . "\.zip$/", $res[0]);
        $this->assertRegExp("/bootstrap\-" . preg_quote(WBWBootstrapInterface::BOOTSTRAP_VERSION_4, ".") . "\.zip$/", $res[1]);
        $this->assertRegExp("/bootstrap\-colorpicker\-.*\.zip$/", $res[2]);
        $this->assertRegExp("/bootstrap\-datepicker\-.*\.zip$/", $res[3]);
        $this->assertRegExp("/bootstrap\-daterangepicker\-.*\.zip$/", $res[4]);
        $this->assertRegExp("/bootstrap\-markdown\-.*\.zip$/", $res[5]);
        $this->assertRegExp("/bootstrap\-notify\-.*\.zip$/", $res[6]);
        $this->assertRegExp("/bootstrap\-select\-.*\.zip$/", $res[7]);
        $this->assertRegExp("/bootstrap\-slider\-.*\.zip$/", $res[8]);
        $this->assertRegExp("/bootstrap\-social\-.*\.zip$/", $res[9]);
        $this->assertRegExp("/bootstrap\-tagsinput\-.*\.zip$/", $res[10]);
        $this->assertRegExp("/bootstrap\-timepicker\-.*\.zip$/", $res[11]);
        $this->assertRegExp("/bootstrap\-wysiwyg\-.*\.zip$/", $res[12]);
        $this->assertRegExp("/favicons\.zip$/", $res[13]);
        $this->assertRegExp("/handlebars\-.*\.zip$/", $res[14]);
        $this->assertRegExp("/moment\-.*\.zip$/", $res[15]);
        $this->assertRegExp("/popper\.js\-.*\.zip$/", $res[16]);
        $this->assertRegExp("/summernote\-.*\.zip$/", $res[17]);
        $this->assertRegExp("/wysihtml\-.*\.zip$/", $res[18]);
    }
}
