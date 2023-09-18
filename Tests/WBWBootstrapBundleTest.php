<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests;

use Throwable;
use WBW\Bundle\BootstrapBundle\DependencyInjection\WBWBootstrapExtension;
use WBW\Bundle\BootstrapBundle\WBWBootstrapBundle;
use WBW\Bundle\CoreBundle\Provider\AssetsProviderInterface;
use WBW\Library\Symfony\Helper\AssetsHelper;

/**
 * Bootstrap bundle test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Tests
 */
class WBWBootstrapBundleTest extends AbstractTestCase {

    /**
     * Test getAssetsRelativeDirectory()
     *
     * @return void
     */
    public function testGetAssetsRelativeDirectory(): void {

        $obj = new WBWBootstrapBundle();

        $this->assertEquals(AssetsProviderInterface::ASSETS_RELATIVE_DIRECTORY, $obj->getAssetsRelativeDirectory());
    }

    /**
     * Test getContainerExtension()
     *
     * @return void
     */
    public function testGetContainerExtension(): void {

        $obj = new WBWBootstrapBundle();

        $this->assertInstanceOf(WBWBootstrapExtension::class, $obj->getContainerExtension());
    }

    /**
     * Test getTranslationDomain()
     *
     * @return void
     */
    public function testGetTranslationDomain(): void {

        $this->assertEquals(WBWBootstrapBundle::TRANSLATION_DOMAIN, WBWBootstrapBundle::getTranslationDomain());
    }

    /**
     * Test listAssets()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testListAssets(): void {

        $assets = realpath(__DIR__ . "/../Resources/assets");

        $res = AssetsHelper::listAssets($assets);
        $this->assertCount(21, $res);

        $i = -1;
        $this->assertRegExp("/bootstrap-" . preg_quote(WBWBootstrapBundle::BOOTSTRAP_VERSION_3, ".") . "\.zip$/", $res[++$i]);
        $this->assertRegExp("/bootstrap-" . preg_quote(WBWBootstrapBundle::BOOTSTRAP_VERSION_4, ".") . "\.zip$/", $res[++$i]);
        $this->assertRegExp("/bootstrap-" . preg_quote(WBWBootstrapBundle::BOOTSTRAP_VERSION_5, ".") . "\.zip$/", $res[++$i]);
        $this->assertRegExp("/bootstrap-colorpicker-.*\.zip$/", $res[++$i]);
        $this->assertRegExp("/bootstrap-datepicker-.*\.zip$/", $res[++$i]);
        $this->assertRegExp("/bootstrap-daterangepicker-.*\.zip$/", $res[++$i]);
        $this->assertRegExp("/bootstrap-icons-.*\.zip$/", $res[++$i]);
        $this->assertRegExp("/bootstrap-markdown-.*\.zip$/", $res[++$i]);
        $this->assertRegExp("/bootstrap-notify-.*\.zip$/", $res[++$i]);
        $this->assertRegExp("/bootstrap-select-.*\.zip$/", $res[++$i]);
        $this->assertRegExp("/bootstrap-slider-.*\.zip$/", $res[++$i]);
        $this->assertRegExp("/bootstrap-social-.*\.zip$/", $res[++$i]);
        $this->assertRegExp("/bootstrap-tagsinput-.*\.zip$/", $res[++$i]);
        $this->assertRegExp("/bootstrap-timepicker-.*\.zip$/", $res[++$i]);
        $this->assertRegExp("/bootstrap-wysiwyg-.*\.zip$/", $res[++$i]);
        $this->assertRegExp("/favicons\.zip$/", $res[++$i]);
        $this->assertRegExp("/handlebars-.*\.zip$/", $res[++$i]);
        $this->assertRegExp("/moment-.*\.zip$/", $res[++$i]);
        $this->assertRegExp("/popper\.js-.*\.zip$/", $res[++$i]);
        $this->assertRegExp("/summernote-.*\.zip$/", $res[++$i]);
        $this->assertRegExp("/wysihtml-.*\.zip$/", $res[++$i]);
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("danger", WBWBootstrapBundle::BOOTSTRAP_TYPE_DANGER);
        $this->assertEquals("dark", WBWBootstrapBundle::BOOTSTRAP_TYPE_DARK);
        $this->assertEquals("default", WBWBootstrapBundle::BOOTSTRAP_TYPE_DEFAULT);
        $this->assertEquals("info", WBWBootstrapBundle::BOOTSTRAP_TYPE_INFO);
        $this->assertEquals("light", WBWBootstrapBundle::BOOTSTRAP_TYPE_LIGHT);
        $this->assertEquals("primary", WBWBootstrapBundle::BOOTSTRAP_TYPE_PRIMARY);
        $this->assertEquals("secondary", WBWBootstrapBundle::BOOTSTRAP_TYPE_SECONDARY);
        $this->assertEquals("success", WBWBootstrapBundle::BOOTSTRAP_TYPE_SUCCESS);
        $this->assertEquals("warning", WBWBootstrapBundle::BOOTSTRAP_TYPE_WARNING);

        $this->assertEquals("3.4.1", WBWBootstrapBundle::BOOTSTRAP_VERSION_3);
        $this->assertEquals("4.6.2", WBWBootstrapBundle::BOOTSTRAP_VERSION_4);
        $this->assertEquals("5.3.2", WBWBootstrapBundle::BOOTSTRAP_VERSION_5);

        $this->assertEquals("WBWBootstrapBundle", WBWBootstrapBundle::TRANSLATION_DOMAIN);
    }
}
