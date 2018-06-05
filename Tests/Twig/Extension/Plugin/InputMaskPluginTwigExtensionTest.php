<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\Plugin;

use Twig_Node;
use Twig_SimpleFunction;
use WBW\Bundle\BootstrapBundle\Tests\Cases\AbstractBootstrapFrameworkTestCase;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Plugin\InputMaskPluginTwigExtension;

/**
 * Input mask form Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\Plugin
 * @final
 */
final class InputMaskFormTwigExtensionTest extends AbstractBootstrapFrameworkTestCase {

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions() {

        $obj = new InputMaskPluginTwigExtension();

        $res = $obj->getFunctions();

        $this->assertCount(7, $res);

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[0]);
        $this->assertEquals("jQueryInputMask", $res[0]->getName());
        $this->assertEquals([$obj, "jQueryInputMaskFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[1]);
        $this->assertEquals("jQueryInputMaskPhoneNumber", $res[1]->getName());
        $this->assertEquals([$obj, "jQueryInputMaskPhoneNumberFunction"], $res[1]->getCallable());
        $this->assertEquals(["html"], $res[1]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[2]);
        $this->assertEquals("jQueryInputMaskSIRETNumber", $res[2]->getName());
        $this->assertEquals([$obj, "jQueryInputMaskSIRETNumberFunction"], $res[2]->getCallable());
        $this->assertEquals(["html"], $res[2]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[3]);
        $this->assertEquals("jQueryInputMaskSocialSecurityNumber", $res[3]->getName());
        $this->assertEquals([$obj, "jQueryInputMaskSocialSecurityNumberFunction"], $res[3]->getCallable());
        $this->assertEquals(["html"], $res[3]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[4]);
        $this->assertEquals("jQueryInputMaskTime12", $res[4]->getName());
        $this->assertEquals([$obj, "jQueryInputMaskTime12Function"], $res[4]->getCallable());
        $this->assertEquals(["html"], $res[4]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[5]);
        $this->assertEquals("jQueryInputMaskTime24", $res[5]->getName());
        $this->assertEquals([$obj, "jQueryInputMaskTime24Function"], $res[5]->getCallable());
        $this->assertEquals(["html"], $res[5]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[6]);
        $this->assertEquals("jQueryInputMaskVATNumber", $res[6]->getName());
        $this->assertEquals([$obj, "jQueryInputMaskVATNumberFunction"], $res[6]->getCallable());
        $this->assertEquals(["html"], $res[6]->getSafe(new Twig_Node()));
    }

    /**
     * Tests the jQueryInputMaskFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testJQueryInputMaskFunction() {

        $obj = new InputMaskPluginTwigExtension();

        $arg0 = ["selector" => "#selector"];
        $res0 = "$('#selector').inputmask(\"\",[]);";
        $this->assertEquals($res0, $obj->jQueryInputMaskFunction($arg0));

        $arg9 = ["selector" => "#selector", "mask" => "+33 9 99 99 99 99", "scriptTag" => true, "opts" => ["placeholder" => "+__ _ __ __ __ __"]];
        $res9 = "<script type=\"text/javascript\">\n$('#selector').inputmask(\"+33 9 99 99 99 99\",{\"placeholder\":\"+__ _ __ __ __ __\"});\n</script>";
        $this->assertEquals($res9, $obj->jQueryInputMaskFunction($arg9));
    }

    /**
      /**
     * Tests the jQueryInputMaskPhoneNumberFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testJQueryInputMaskPhoneNumberFunction() {

        $obj = new InputMaskPluginTwigExtension();

        $arg = ["selector" => "#selector"];
        $res = "$('#selector').inputmask(\"99 99 99 99 99\",{\"autoUnmask\":true,\"removeMaskOnSubmit\":true,\"placeholder\":\"__ __ __ __ __\"});";
        $this->assertEquals($res, $obj->jQueryInputMaskPhoneNumberFunction($arg));
    }

    /**
     * Tests the jQueryInputMaskSIRETNumberFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testJQueryInputMaskSIRETNumberFunction() {

        $obj = new InputMaskPluginTwigExtension();

        $arg = ["selector" => "#selector"];
        $res = "$('#selector').inputmask(\"999 999 999 99999\",{\"autoUnmask\":true,\"removeMaskOnSubmit\":true,\"placeholder\":\"___ ___ ___ _____\"});";
        $this->assertEquals($res, $obj->jQueryInputMaskSIRETNumberFunction($arg));
    }

    /**
     * Tests the jQueryInputMaskTime12Function() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testJQueryInputMaskTime12Function() {

        $obj = new InputMaskPluginTwigExtension();

        $arg = ["selector" => "#selector"];
        $res = "$('#selector').inputmask(\"hh:mm t\",{\"autoUnmask\":true,\"removeMaskOnSubmit\":true,\"hourFormat\":\"12\",\"placeholder\":\"__:__ _m\"});";
        $this->assertEquals($res, $obj->jQueryInputMaskTime12Function($arg));
    }

    /**
     * Tests the jQueryInputMaskTime24Function() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testJQueryInputMaskTime24Function() {

        $obj = new InputMaskPluginTwigExtension();

        $arg = ["selector" => "#selector"];
        $res = "$('#selector').inputmask(\"hh:mm\",{\"autoUnmask\":true,\"removeMaskOnSubmit\":true,\"hourFormat\":\"24\",\"placeholder\":\"__:__\"});";
        $this->assertEquals($res, $obj->jQueryInputMaskTime24Function($arg));
    }

    /**
     * Tests the jQueryInputMaskSocialSecurityNumberFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testJQueryInputMaskSocialSecurityNumberFunction() {

        $obj = new InputMaskPluginTwigExtension();

        $arg = ["selector" => "#selector"];
        $res = "$('#selector').inputmask(\"9 99 99 99 999 999 99\",{\"autoUnmask\":true,\"removeMaskOnSubmit\":true,\"placeholder\":\"_ __ __ __ ___ ___ __\"});";
        $this->assertEquals($res, $obj->jQueryInputMaskSocialSecurityNumberFunction($arg));
    }

    /**
     * Tests the jQueryInputMaskVATNumberFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testJQueryInputMaskVATNumberFunction() {

        $obj = new InputMaskPluginTwigExtension();

        $arg = ["selector" => "#selector"];
        $res = "$('#selector').inputmask(\"**999 999 999 99\",{\"autoUnmask\":true,\"removeMaskOnSubmit\":true,\"placeholder\":\"_____ ___ ___ __\"});";
        $this->assertEquals($res, $obj->jQueryInputMaskVATNumberFunction($arg));
    }

}
