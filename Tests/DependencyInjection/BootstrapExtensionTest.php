<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\DependencyInjection;

use WBW\Bundle\BootstrapBundle\DependencyInjection\BootstrapExtension;
use WBW\Bundle\BootstrapBundle\EventListener\KernelEventListener;
use WBW\Bundle\BootstrapBundle\Provider\ProvidersManager;
use WBW\Bundle\BootstrapBundle\Tests\AbstractFrameworkTestCase;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Code\BasicBlockCodeTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Code\InlineCodeTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Code\SampleOutputCodeTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Code\UserInputCodeTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Code\VariableCodeTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Component\AlertComponentTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Component\BadgeComponentTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Component\ButtonComponentTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Component\GlyphiconComponentTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Component\LabelComponentTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Component\ProgressBarComponentTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Form\ButtonFormTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Form\InputMaskFormTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Image\Base64ImageTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Table\ButtonTableTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Typography\DeletedTypographyTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Typography\HeadingTypographyTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Typography\InsertedTypographyTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Typography\ItalicTypographyTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Typography\MarkedTypographyTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Typography\SmallTypographyTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Typography\StrikeThroughTypographyTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Typography\StrongTypographyTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Typography\UnderlinedTypographyTwigExtension;

/**
 * Bootstrap extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\DependencyInjection
 * @final
 */
final class BootstrapExtensionTest extends AbstractFrameworkTestCase {

    /**
     * {@inheritdoc}
     */
    protected function setUp() {
        parent::setUp();
    }

    /**
     * Tests the load() method.
     *
     * @return void
     */
    public function testLoad() {

        $obj = new BootstrapExtension();

        $obj->load([], $this->containerBuilder);

        // Services
        $this->assertInstanceOf(KernelEventListener::class, $this->containerBuilder->get(KernelEventListener::SERVICE_NAME));
        $this->assertInstanceOf(ProvidersManager::class, $this->containerBuilder->get(ProvidersManager::SERVICE_NAME));

        // Code
        $this->assertInstanceOf(BasicBlockCodeTwigExtension::class, $this->containerBuilder->get(BasicBlockCodeTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(InlineCodeTwigExtension::class, $this->containerBuilder->get(InlineCodeTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(SampleOutputCodeTwigExtension::class, $this->containerBuilder->get(SampleOutputCodeTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(UserInputCodeTwigExtension::class, $this->containerBuilder->get(UserInputCodeTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(VariableCodeTwigExtension::class, $this->containerBuilder->get(VariableCodeTwigExtension::SERVICE_NAME));

        // Component
        $this->assertInstanceOf(AlertComponentTwigExtension::class, $this->containerBuilder->get(AlertComponentTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(BadgeComponentTwigExtension::class, $this->containerBuilder->get(BadgeComponentTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(ButtonComponentTwigExtension::class, $this->containerBuilder->get(ButtonComponentTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(GlyphiconComponentTwigExtension::class, $this->containerBuilder->get(GlyphiconComponentTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(LabelComponentTwigExtension::class, $this->containerBuilder->get(LabelComponentTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(ProgressBarComponentTwigExtension::class, $this->containerBuilder->get(ProgressBarComponentTwigExtension::SERVICE_NAME));

        // Form
        $this->assertInstanceOf(ButtonFormTwigExtension::class, $this->containerBuilder->get(ButtonFormTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(InputMaskFormTwigExtension::class, $this->containerBuilder->get(InputMaskFormTwigExtension::SERVICE_NAME));

        // Image
        $this->assertInstanceOf(Base64ImageTwigExtension::class, $this->containerBuilder->get(Base64ImageTwigExtension::SERVICE_NAME));

        // Table
        $this->assertInstanceOf(ButtonTableTwigExtension::class, $this->containerBuilder->get(ButtonTableTwigExtension::SERVICE_NAME));

        // Typography
        $this->assertInstanceOf(DeletedTypographyTwigExtension::class, $this->containerBuilder->get(DeletedTypographyTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(HeadingTypographyTwigExtension::class, $this->containerBuilder->get(HeadingTypographyTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(InsertedTypographyTwigExtension::class, $this->containerBuilder->get(InsertedTypographyTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(ItalicTypographyTwigExtension::class, $this->containerBuilder->get(ItalicTypographyTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(MarkedTypographyTwigExtension::class, $this->containerBuilder->get(MarkedTypographyTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(SmallTypographyTwigExtension::class, $this->containerBuilder->get(SmallTypographyTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(StrikeThroughTypographyTwigExtension::class, $this->containerBuilder->get(StrikeThroughTypographyTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(StrongTypographyTwigExtension::class, $this->containerBuilder->get(StrongTypographyTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(UnderlinedTypographyTwigExtension::class, $this->containerBuilder->get(UnderlinedTypographyTwigExtension::SERVICE_NAME));
    }

}
