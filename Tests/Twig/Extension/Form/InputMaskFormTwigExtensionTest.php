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

use Twig_Node;
use Twig_SimpleFunction;
use WBW\Bundle\BootstrapBundle\Tests\AbstractFrameworkTestCase;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Form\InputMaskFormTwigExtension;

/**
 * Input mask form Twig extension eest.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\Form
 * @final
 */
final class InputMaskFormTwigExtensionTest extends AbstractFrameworkTestCase {

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions() {

        $obj = new InputMaskFormTwigExtension($this->router, $this->translator);

        $res = $obj->getFunctions();

        $this->assertCount(7, $res);

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[0]);
        $this->assertEquals("bootstrapInputMask", $res[0]->getName());
        $this->assertEquals([$obj, "bootstrapInputMaskFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[1]);
        $this->assertEquals("bootstrapInputMaskPhoneNumber", $res[1]->getName());
        $this->assertEquals([$obj, "bootstrapInputMaskPhoneNumberFunction"], $res[1]->getCallable());
        $this->assertEquals(["html"], $res[1]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[2]);
        $this->assertEquals("bootstrapInputMaskSIRETNumber", $res[2]->getName());
        $this->assertEquals([$obj, "bootstrapInputMaskSIRETNumberFunction"], $res[2]->getCallable());
        $this->assertEquals(["html"], $res[2]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[3]);
        $this->assertEquals("bootstrapInputMaskSocialSecurityNumber", $res[3]->getName());
        $this->assertEquals([$obj, "bootstrapInputMaskSocialSecurityNumberFunction"], $res[3]->getCallable());
        $this->assertEquals(["html"], $res[3]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[4]);
        $this->assertEquals("bootstrapInputMaskTime12", $res[4]->getName());
        $this->assertEquals([$obj, "bootstrapInputMaskTime12Function"], $res[4]->getCallable());
        $this->assertEquals(["html"], $res[4]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[5]);
        $this->assertEquals("bootstrapInputMaskTime24", $res[5]->getName());
        $this->assertEquals([$obj, "bootstrapInputMaskTime24Function"], $res[5]->getCallable());
        $this->assertEquals(["html"], $res[5]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[6]);
        $this->assertEquals("bootstrapInputMaskVATNumber", $res[6]->getName());
        $this->assertEquals([$obj, "bootstrapInputMaskVATNumberFunction"], $res[6]->getCallable());
        $this->assertEquals(["html"], $res[6]->getSafe(new Twig_Node()));
    }

    /**
     * Tests the bootstrapInputMaskFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testBootstrapInputMaskFunction() {

        $obj = new InputMaskFormTwigExtension($this->router, $this->translator);

        $arg0 = ["selector" => "#selector"];
        $res0 = "$('#selector').inputmask([]);";
        $this->assertEquals($res0, $obj->bootstrapInputMaskFunction($arg0));

        $arg9 = ["selector" => "#selector", "scriptTag" => true, "opts" => ["mask" => "+33 9 99 99 99 99", "placeholder" => "+__ _ __ __ __ __"]];
        $res9 = "<script type=\"text/javascript\">\n$('#selector').inputmask({\"mask\":\"+33 9 99 99 99 99\",\"placeholder\":\"+__ _ __ __ __ __\"});\n</script>";
        $this->assertEquals($res9, $obj->bootstrapInputMaskFunction($arg9));
    }

    /**
      /**
     * Tests the bootstrapInputMaskPhoneNumberFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testBootstrapInputMaskPhoneNumberFunction() {

        $obj = new InputMaskFormTwigExtension($this->router, $this->translator);

        $arg = ["selector" => "#selector"];
        $res = "$('#selector').inputmask({\"autoUnmask\":true,\"removeMaskOnSubmit\":true,\"mask\":\"99 99 99 99 99\",\"placeholder\":\"__ __ __ __ __\"});";
        $this->assertEquals($res, $obj->bootstrapInputMaskPhoneNumberFunction($arg));
    }

    /**
     * Tests the bootstrapInputMaskSIRETNumberFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testBootstrapInputMaskSIRETNumberFunction() {

        $obj = new InputMaskFormTwigExtension($this->router, $this->translator);

        $arg = ["selector" => "#selector"];
        $res = "$('#selector').inputmask({\"autoUnmask\":true,\"removeMaskOnSubmit\":true,\"mask\":\"999 999 999 99999\",\"placeholder\":\"___ ___ ___ _____\"});";
        $this->assertEquals($res, $obj->bootstrapInputMaskSIRETNumberFunction($arg));
    }

    /**
     * Tests the bootstrapInputMaskTime12Function() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testBootstrapInputMaskTime12Function() {

        $obj = new InputMaskFormTwigExtension($this->router, $this->translator);

        $arg = ["selector" => "#selector"];
        $res = "$('#selector').inputmask({\"autoUnmask\":true,\"removeMaskOnSubmit\":true,\"mask\":\"hh:mm t\",\"placeholder\":\"__:__ _m\",\"alias\":\"time12\",\"hourFormat\":\"12\"});";
        $this->assertEquals($res, $obj->bootstrapInputMaskTime12Function($arg));
    }

    /**
     * Tests the bootstrapInputMaskTime24Function() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testBootstrapInputMaskTime24Function() {

        $obj = new InputMaskFormTwigExtension($this->router, $this->translator);

        $arg = ["selector" => "#selector"];
        $res = "$('#selector').inputmask({\"autoUnmask\":true,\"removeMaskOnSubmit\":true,\"mask\":\"hh:mm\",\"placeholder\":\"__:__ _m\",\"alias\":\"time24\",\"hourFormat\":\"24\"});";
        $this->assertEquals($res, $obj->bootstrapInputMaskTime24Function($arg));
    }

    /**
     * Tests the bootstrapInputMaskSocialSecurityNumberFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testBootstrapInputMaskSocialSecurityNumberFunction() {

        $obj = new InputMaskFormTwigExtension($this->router, $this->translator);

        $arg = ["selector" => "#selector"];
        $res = "$('#selector').inputmask({\"autoUnmask\":true,\"removeMaskOnSubmit\":true,\"mask\":\"9 99 99 99 999 999 99\",\"placeholder\":\"_ __ __ __ ___ ___ __\"});";
        $this->assertEquals($res, $obj->bootstrapInputMaskSocialSecurityNumberFunction($arg));
    }

    /**
     * Tests the bootstrapInputMaskVATNumberFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testBootstrapInputMaskVATNumberFunction() {

        $obj = new InputMaskFormTwigExtension($this->router, $this->translator);

        $arg = ["selector" => "#selector"];
        $res = "$('#selector').inputmask({\"autoUnmask\":true,\"removeMaskOnSubmit\":true,\"mask\":\"**999 999 999 99\",\"placeholder\":\"_____ ___ ___ __\"});";
        $this->assertEquals($res, $obj->bootstrapInputMaskVATNumberFunction($arg));
    }

}
