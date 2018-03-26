<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\Form;

use PHPUnit_Framework_TestCase;
use Twig_Node;
use Twig_SimpleFunction;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Form\InputMaskFormTwigExtension;

/**
 * Input mask form Twig extension eest.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\Form
 * @final
 */
final class InputMaskFormTwigExtensionTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions() {

        $obj = new InputMaskFormTwigExtension();

        $res = $obj->getFunctions();

        $this->assertCount(4, $res);

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[0]);
        $this->assertEquals("bootstrapPhoneNumberInputMask", $res[0]->getName());
        $this->assertEquals([$obj, "bootstrapPhoneNumberInputMaskFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[1]);
        $this->assertEquals("bootstrapSIRETNumberInputMask", $res[1]->getName());
        $this->assertEquals([$obj, "bootstrapSIRETNumberInputMaskFunction"], $res[1]->getCallable());
        $this->assertEquals(["html"], $res[1]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[2]);
        $this->assertEquals("bootstrapSocialSecurityNumberInputMask", $res[2]->getName());
        $this->assertEquals([$obj, "bootstrapSocialSecurityNumberInputMaskFunction"], $res[2]->getCallable());
        $this->assertEquals(["html"], $res[2]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[3]);
        $this->assertEquals("bootstrapVATNumberInputMask", $res[3]->getName());
        $this->assertEquals([$obj, "bootstrapVATNumberInputMaskFunction"], $res[3]->getCallable());
        $this->assertEquals(["html"], $res[3]->getSafe(new Twig_Node()));
    }

    /**
     * Tests the bootstrapPhoneNumberInputMaskFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testBootstrapPhoneNumberInputMaskFunction() {

        $obj = new InputMaskFormTwigExtension();

        $arg0 = ["selector" => "#selector"];
        $res0 = "$('#selector').inputmask({\"autoUnmask\":true,\"removeMaskOnSubmit\":true,\"mask\":\"99 99 99 99 99\",\"placeholder\":\"__ __ __ __ __\"});";
        $this->assertEquals($res0, $obj->bootstrapPhoneNumberInputMaskFunction($arg0));

        $arg9 = ["selector" => "#selector", "scriptTag" => true];
        $res9 = "<script type=\"text/javascript\">\n$('#selector').inputmask({\"autoUnmask\":true,\"removeMaskOnSubmit\":true,\"mask\":\"99 99 99 99 99\",\"placeholder\":\"__ __ __ __ __\"});\n</script>";
        $this->assertEquals($res9, $obj->bootstrapPhoneNumberInputMaskFunction($arg9));
    }

    /**
     * Tests the bootstrapSIRETNumberInputMaskFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testBootstrapSIRETNumberInputMaskFunction() {

        $obj = new InputMaskFormTwigExtension();

        $arg = ["selector" => "#selector"];
        $res = "$('#selector').inputmask({\"autoUnmask\":true,\"removeMaskOnSubmit\":true,\"mask\":\"999 999 999 99999\",\"placeholder\":\"___ ___ ___ ___\"});";
        $this->assertEquals($res, $obj->bootstrapSIRETNumberInputMaskFunction($arg));
    }

    /**
     * Tests the bootstrapSocialSecurityNumberInputMaskFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testBootstrapSocialSecurityNumberInputMaskFunction() {

        $obj = new InputMaskFormTwigExtension();

        $arg = ["selector" => "#selector"];
        $res = "$('#selector').inputmask({\"autoUnmask\":true,\"removeMaskOnSubmit\":true,\"mask\":\"9 99 99 99 999 999 99\",\"placeholder\":\"_ __ __ __ ___ ___ __\"});";
        $this->assertEquals($res, $obj->bootstrapSocialSecurityNumberInputMaskFunction($arg));
    }

    /**
     * Tests the bootstrapVATNumberInputMaskFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testBootstrapVATNumberInputMaskFunction() {

        $obj = new InputMaskFormTwigExtension();

        $arg = ["selector" => "#selector"];
        $res = "$('#selector').inputmask({\"autoUnmask\":true,\"removeMaskOnSubmit\":true,\"mask\":\"**999 999 999 99\",\"placeholder\":\"_____ ___ ___ ___ __\"});";
        $this->assertEquals($res, $obj->bootstrapVATNumberInputMaskFunction($arg));
    }

}