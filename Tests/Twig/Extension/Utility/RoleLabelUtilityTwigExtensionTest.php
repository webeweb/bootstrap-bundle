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
use WBW\Bundle\BootstrapBundle\Tests\AbstractFrameworkTestCase;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Component\LabelComponentTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Utility\RoleLabelUtilityTwigExtension;

/**
 * Role label utility Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\Utility
 * @final
 */
final class RoleLabelUtilityTwigExtensionTest extends AbstractFrameworkTestCase {

    /**
     * {@inheritdoc}
     */
    protected function setUp() {
        parent::setUp();

        // Set a Translator mock.
        $this->translator->expects($this->any())->method("trans")->willReturnCallback(function($id, array $parameters = [], $domain = null, $locale = null) {
            return $id;
        });

        // Set a User mock.
        $this->user = $this->getMockBuilder(UserInterface::class)->getMock();
        $this->user->expects($this->any())->method("getRoles")->willReturnCallback(function() {
            return ["ROLE_SUPER_ADMIN", "ROLE_ADMIN", "ROLE_USER"];
        });
    }

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions() {

        $obj = new RoleLabelUtilityTwigExtension($this->translator, new LabelComponentTwigExtension());

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
     * @depends testGetFunctions
     */
    public function testBootstrapRoleLabelFunction() {

        $obj = new RoleLabelUtilityTwigExtension($this->translator, new LabelComponentTwigExtension());

        $colors = [
            "ROLE_SUPER_ADMIN" => "#D9534F",
            "ROLE_ADMIN"       => "#337AB7",
        ];
        $trans  = [
            "ROLE_SUPER_ADMIN" => "label.role.root",
            "ROLE_ADMIN"       => "label.role.admin",
            "ROLE_USER"        => "label.role.user",
        ];

        $res = '<span class="label label-default" style="background-color:#D9534F;">label.role.root</span> <span class="label label-default" style="background-color:#337AB7;">label.role.admin</span> <span class="label label-default">label.role.user</span>';
        $this->assertEquals($res, $obj->bootstrapRoleLabelFunction($this->user, $colors, $trans));
    }

}
