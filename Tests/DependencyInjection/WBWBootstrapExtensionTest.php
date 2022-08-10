<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\DependencyInjection;

use Exception;
use Symfony\Component\DependencyInjection\Exception\ServiceNotFoundException;
use WBW\Bundle\BootstrapBundle\DependencyInjection\Configuration;
use WBW\Bundle\BootstrapBundle\DependencyInjection\WBWBootstrapExtension;
use WBW\Bundle\BootstrapBundle\Tests\AbstractTestCase;
use WBW\Bundle\BootstrapBundle\Twig\Extension\AssetsTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Component\AlertTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Component\BadgeTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Component\BreadcrumbTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Component\ButtonGroupTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Component\DropdownTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Component\GlyphiconTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Component\IconTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Component\LabelTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Component\NavTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Component\ProgressBarTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\CSS\ButtonTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\CSS\CodeTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\CSS\GridTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\CSS\TypographyTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Utility\FormButtonTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Utility\RoleLabelTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Utility\TableButtonTwigExtension;

/**
 * Bootstrap extension test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Tests\DependencyInjection
 */
class WBWBootstrapExtensionTest extends AbstractTestCase {

    /**
     * Configs.
     *
     * @var array
     */
    private $configs;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set a configs array mock.
        $this->configs = [
            WBWBootstrapExtension::EXTENSION_ALIAS => [
                "twig"    => true,
                "version" => 4,
            ],
        ];
    }

    /**
     * Tests getAlias()
     *
     * @return void
     */
    public function testGetAlias(): void {

        $obj = new WBWBootstrapExtension();

        $this->assertEquals(WBWBootstrapExtension::EXTENSION_ALIAS, $obj->getAlias());
    }

    /**
     * Tests getConfiguration()
     *
     * @return void
     */
    public function testGetConfiguration(): void {

        $obj = new WBWBootstrapExtension();

        $this->assertInstanceOf(Configuration::class, $obj->getConfiguration([], $this->containerBuilder));
    }

    /**
     * Tests load()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testLoad(): void {

        $obj = new WBWBootstrapExtension();

        $obj->load($this->configs, $this->containerBuilder);

        // Twig extensions
        $this->assertInstanceOf(AssetsTwigExtension::class, $this->containerBuilder->get(AssetsTwigExtension::SERVICE_NAME));

        // Component Twig extensions
        $this->assertInstanceOf(AlertTwigExtension::class, $this->containerBuilder->get(AlertTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(BadgeTwigExtension::class, $this->containerBuilder->get(BadgeTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(BreadcrumbTwigExtension::class, $this->containerBuilder->get(BreadcrumbTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(ButtonGroupTwigExtension::class, $this->containerBuilder->get(ButtonGroupTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(DropdownTwigExtension::class, $this->containerBuilder->get(DropdownTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(GlyphiconTwigExtension::class, $this->containerBuilder->get(GlyphiconTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(IconTwigExtension::class, $this->containerBuilder->get(IconTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(LabelTwigExtension::class, $this->containerBuilder->get(LabelTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(NavTwigExtension::class, $this->containerBuilder->get(NavTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(ProgressBarTwigExtension::class, $this->containerBuilder->get(ProgressBarTwigExtension::SERVICE_NAME));

        // CSS Twig extensions
        $this->assertInstanceOf(ButtonTwigExtension::class, $this->containerBuilder->get(ButtonTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(CodeTwigExtension::class, $this->containerBuilder->get(CodeTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(GridTwigExtension::class, $this->containerBuilder->get(GridTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(TypographyTwigExtension::class, $this->containerBuilder->get(TypographyTwigExtension::SERVICE_NAME));

        // Utility Twig extensions
        $this->assertInstanceOf(FormButtonTwigExtension::class, $this->containerBuilder->get(FormButtonTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(RoleLabelTwigExtension::class, $this->containerBuilder->get(RoleLabelTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(TableButtonTwigExtension::class, $this->containerBuilder->get(TableButtonTwigExtension::SERVICE_NAME));
    }

    /**
     * Tests load()
     *
     * @return void
     */
    public function testLoadWithoutTwig(): void {

        // Set the configs mock.
        $this->configs[WBWBootstrapExtension::EXTENSION_ALIAS]["twig"] = false;

        $obj = new WBWBootstrapExtension();

        $this->assertNull($obj->load($this->configs, $this->containerBuilder));

        try {

            $this->containerBuilder->get(AssetsTwigExtension::SERVICE_NAME);
        } catch (Exception $ex) {

            $this->assertInstanceOf(ServiceNotFoundException::class, $ex);
            $this->assertStringContainsString(AssetsTwigExtension::SERVICE_NAME, $ex->getMessage());
        }
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw_bootstrap", WBWBootstrapExtension::EXTENSION_ALIAS);
    }
}
