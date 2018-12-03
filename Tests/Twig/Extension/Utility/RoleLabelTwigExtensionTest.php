<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\Utility;

use Symfony\Component\Security\Core\User\UserInterface;
use Twig_Node;
use Twig_SimpleFunction;
use WBW\Bundle\BootstrapBundle\Tests\AbstractTestCase;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Component\LabelTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Utility\RoleLabelTwigExtension;

/**
 * Role label utility Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\Utility
 */
class RoleLabelTwigExtensionTest extends AbstractTestCase {

    /**
     * Color choices.
     *
     * @var array
     */
    private $colorChoices;

    /**
     * Label Twig extension.
     *
     * @var LabelTwigExtension
     */
    private $labelTwigExtension;

    /**
     * Trans choices.
     *
     * @var array
     */
    private $transChoices;

    /**
     * {@inheritdoc}
     */
    protected function setUp() {
        parent::setUp();

        // Set a User mock.
        $this->user = $this->getMockBuilder(UserInterface::class)->getMock();
        $this->user->expects($this->any())->method("getRoles")->willReturnCallback(function() {
            return ["ROLE_SUPER_ADMIN", "ROLE_ADMIN", "ROLE_USER"];
        });

        // Set a Label Twig extension mock.
        $this->labelTwigExtension = new LabelTwigExtension($this->twigEnvironment);

        // Set the choices mocks.
        $this->colorChoices = [
            "ROLE_SUPER_ADMIN" => "#D9534F",
            "ROLE_ADMIN"       => "#337AB7",
        ];
        $this->transChoices = [
            "ROLE_SUPER_ADMIN" => "label.role.root",
            "ROLE_ADMIN"       => "label.role.admin",
            "ROLE_USER"        => "label.role.user",
        ];
    }

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions() {

        $obj = new RoleLabelTwigExtension($this->twigEnvironment, $this->translator, $this->labelTwigExtension);

        $res = $obj->getFunctions();
        $this->assertCount(1, $res);

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[0]);
        $this->assertEquals("bootstrapRoleLabel", $res[0]->getName());
        $this->assertEquals([$obj, "bootstrapRoleLabelFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()));
    }

    /**
     * Tests the bootstrapRoleLabelFunction() method.
     *
     * @return void
     */
    public function testBootstrapRoleLabelFunction() {

        $obj = new RoleLabelTwigExtension($this->twigEnvironment, $this->translator, $this->labelTwigExtension);

        $res = '<span class="label label-default" style="background-color:#D9534F;">label.role.root</span> <span class="label label-default" style="background-color:#337AB7;">label.role.admin</span> <span class="label label-default">label.role.user</span>';
        $this->assertEquals($res, $obj->bootstrapRoleLabelFunction($this->user, $this->colorChoices, $this->transChoices));
    }

    /**
     * Tests the bootstrapRoleLabelFunction() method.
     *
     * @return void
     */
    public function testBootstrapRoleLabelFunctionWithNull() {

        $obj = new RoleLabelTwigExtension($this->twigEnvironment, $this->translator, $this->labelTwigExtension);

        $res = "";
        $this->assertEquals($res, $obj->bootstrapRoleLabelFunction(null, $this->colorChoices, $this->transChoices));
    }

}
