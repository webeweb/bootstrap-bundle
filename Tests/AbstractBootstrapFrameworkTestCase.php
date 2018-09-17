<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests;

use Doctrine\Common\Persistence\ObjectManager;
use PHPUnit\Framework\TestCase;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBag;
use Symfony\Component\HttpKernel\KernelInterface;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Translation\TranslatorInterface;
use Twig_Environment;
use Twig_LoaderInterface;

/**
 * Abstract Bootstrap framework test case.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Cases
 * @abstract
 */
abstract class AbstractBootstrapFrameworkTestCase extends TestCase {

    /**
     * Container builder.
     *
     * @var ContainerBuilder
     */
    protected $containerBuilder;

    /**
     * Kernel.
     *
     * @var KernelInterface
     */
    protected $kernel;

    /**
     * Object manager.
     *
     * @var ObjectManager
     */
    protected $objectManager;

    /**
     * Router.
     *
     * @var RouterInterface
     */
    protected $router;

    /**
     * Token
     *
     * @var TokenInterface
     */
    protected $token;

    /**
     * Translator.
     *
     * @var TranslatorInterface
     */
    protected $translator;

    /**
     * Twig environment.
     *
     * @var Twig_Environment
     */
    protected $twigEnvironnement;

    /**
     * Twig globals.
     *
     * @var array
     */
    private $twigGlobals = [];

    /**
     * Twig loader.
     *
     * @var Twig_LoaderInterface
     */
    protected $twigLoader;

    /**
     * Token storage.
     *
     * @var TokenStorageInterface
     */
    protected $tokenStorage;

    /**
     * User.
     *
     * @var UserInterface
     */
    protected $user;

    /**
     * {@inheritdoc}
     */
    protected function setUp() {

        // Set a Kernel mock.
        $this->kernel = $this->getMockBuilder(KernelInterface::class)->getMock();

        // Set a Router mock.
        $this->objectManager = $this->getMockBuilder(ObjectManager::class)->getMock();

        // Set a Router mock.
        $this->router = $this->getMockBuilder(RouterInterface::class)->getMock();

        // Set a Translator mock.
        $this->translator = $this->getMockBuilder(TranslatorInterface::class)->getMock();

        // Set a Token mock.
        $this->token = $this->getMockBuilder(TokenInterface::class)->getMock();
        $this->token->expects($this->any())->method("getUser")->willReturnCallback(function() {
            return $this->user;
        });

        // Set a Token storage mock.
        $this->tokenStorage = $this->getMockBuilder(TokenStorageInterface::class)->getMock();
        $this->tokenStorage->expects($this->any())->method("getToken")->willReturn($this->token);

        // Set a Twig loader mock.
        $this->twigLoader = $this->getMockBuilder(Twig_LoaderInterface::class)->getMock();

        // Set a Twig environment mock.
        $this->twigEnvironment = $this->getMockBuilder(Twig_Environment::class)->setConstructorArgs([$this->twigLoader, []])->getMock();
        $this->twigEnvironment->expects($this->any())->method("addGlobal")->willReturnCallback(function($name, $value) {
            $this->twigGlobals[$name] = $value;
        });
        $this->twigEnvironment->expects($this->any())->method("getGlobals")->willReturnCallback(function() {
            return $this->twigGlobals;
        });

        // We set a container builder with only the necessary.
        $this->containerBuilder = new ContainerBuilder(new ParameterBag(["kernel.environment" => "dev"]));
        $this->containerBuilder->set("kernel", $this->kernel);
        $this->containerBuilder->set("router", $this->router);
        $this->containerBuilder->set("security.token_storage", $this->tokenStorage);
        $this->containerBuilder->set("translator", $this->translator);
        $this->containerBuilder->set("twig", $this->twigEnvironment);
    }

}
