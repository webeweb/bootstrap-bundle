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

use PHPUnit_Framework_TestCase;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBag;
use Symfony\Component\HttpKernel\KernelInterface;
use Twig_Environment;
use Twig_LoaderInterface;
use WBW\Bundle\BootstrapBundle\DependencyInjection\BootstrapExtension;
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
use WBW\Bundle\BootstrapBundle\Twig\Extension\Form\InputMaskFormTwigExtension;
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
final class BootstrapExtensionTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the load() method.
     *
     * @return void
     */
    public function testLoad() {

        // Set the mocks.
        $kernel          = $this->getMockBuilder(KernelInterface::class)->getMock();
        $twigLoader      = $this->getMockBuilder(Twig_LoaderInterface::class)->getMock();
        $twigEnvironment = $this->getMockBuilder(Twig_Environment::class)->setConstructorArgs([$twigLoader, []])->getMock();

        // We set a container builder with only the necessary.
        $container = new ContainerBuilder(new ParameterBag(["kernel.environment" => "dev"]));
        $container->set("kernel", $kernel);
        $container->set("twig", $twigEnvironment);

        $obj = new BootstrapExtension();

        $obj->load([], $container);

        // Code
        $this->assertInstanceOf(BasicBlockCodeTwigExtension::class, $container->get(BasicBlockCodeTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(InlineCodeTwigExtension::class, $container->get(InlineCodeTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(SampleOutputCodeTwigExtension::class, $container->get(SampleOutputCodeTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(UserInputCodeTwigExtension::class, $container->get(UserInputCodeTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(VariableCodeTwigExtension::class, $container->get(VariableCodeTwigExtension::SERVICE_NAME));

        // Component
        $this->assertInstanceOf(AlertComponentTwigExtension::class, $container->get(AlertComponentTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(BadgeComponentTwigExtension::class, $container->get(BadgeComponentTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(ButtonComponentTwigExtension::class, $container->get(ButtonComponentTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(GlyphiconComponentTwigExtension::class, $container->get(GlyphiconComponentTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(LabelComponentTwigExtension::class, $container->get(LabelComponentTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(ProgressBarComponentTwigExtension::class, $container->get(ProgressBarComponentTwigExtension::SERVICE_NAME));

        // Form
        $this->assertInstanceOf(InputMaskFormTwigExtension::class, $container->get(InputMaskFormTwigExtension::SERVICE_NAME));

        // Typography
        $this->assertInstanceOf(DeletedTypographyTwigExtension::class, $container->get(DeletedTypographyTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(HeadingTypographyTwigExtension::class, $container->get(HeadingTypographyTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(InsertedTypographyTwigExtension::class, $container->get(InsertedTypographyTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(ItalicTypographyTwigExtension::class, $container->get(ItalicTypographyTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(MarkedTypographyTwigExtension::class, $container->get(MarkedTypographyTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(SmallTypographyTwigExtension::class, $container->get(SmallTypographyTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(StrikeThroughTypographyTwigExtension::class, $container->get(StrikeThroughTypographyTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(StrongTypographyTwigExtension::class, $container->get(StrongTypographyTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(UnderlinedTypographyTwigExtension::class, $container->get(UnderlinedTypographyTwigExtension::SERVICE_NAME));
    }

}
