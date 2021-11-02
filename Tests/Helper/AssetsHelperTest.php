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
    protected function setUp(): void {
        parent::setUp();

        // Set the directories.
        $this->directoryAssets = realpath(__DIR__ . "/../../Resources/assets");
    }

    /**
     * Tests the listAssets() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testListAssets(): void {

        $res = TestAssetsHelper::listAssets($this->directoryAssets);
        $this->assertCount(21, $res);

        $i = -1;
        $this->assertRegExp("/bootstrap\-" . preg_quote(WBWBootstrapInterface::BOOTSTRAP_VERSION_3, ".") . "\.zip$/", $res[++$i]);
        $this->assertRegExp("/bootstrap\-" . preg_quote(WBWBootstrapInterface::BOOTSTRAP_VERSION_4, ".") . "\.zip$/", $res[++$i]);
        $this->assertRegExp("/bootstrap\-" . preg_quote(WBWBootstrapInterface::BOOTSTRAP_VERSION_5, ".") . "\.zip$/", $res[++$i]);
        $this->assertRegExp("/bootstrap\-colorpicker\-.*\.zip$/", $res[++$i]);
        $this->assertRegExp("/bootstrap\-datepicker\-.*\.zip$/", $res[++$i]);
        $this->assertRegExp("/bootstrap\-daterangepicker\-.*\.zip$/", $res[++$i]);
        $this->assertRegExp("/bootstrap\-icons\-.*\.zip$/", $res[++$i]);
        $this->assertRegExp("/bootstrap\-markdown\-.*\.zip$/", $res[++$i]);
        $this->assertRegExp("/bootstrap\-notify\-.*\.zip$/", $res[++$i]);
        $this->assertRegExp("/bootstrap\-select\-.*\.zip$/", $res[++$i]);
        $this->assertRegExp("/bootstrap\-slider\-.*\.zip$/", $res[++$i]);
        $this->assertRegExp("/bootstrap\-social\-.*\.zip$/", $res[++$i]);
        $this->assertRegExp("/bootstrap\-tagsinput\-.*\.zip$/", $res[++$i]);
        $this->assertRegExp("/bootstrap\-timepicker\-.*\.zip$/", $res[++$i]);
        $this->assertRegExp("/bootstrap\-wysiwyg\-.*\.zip$/", $res[++$i]);
        $this->assertRegExp("/favicons\.zip$/", $res[++$i]);
        $this->assertRegExp("/handlebars\-.*\.zip$/", $res[++$i]);
        $this->assertRegExp("/moment\-.*\.zip$/", $res[++$i]);
        $this->assertRegExp("/popper\.js\-.*\.zip$/", $res[++$i]);
        $this->assertRegExp("/summernote\-.*\.zip$/", $res[++$i]);
        $this->assertRegExp("/wysihtml\-.*\.zip$/", $res[++$i]);
    }
}
