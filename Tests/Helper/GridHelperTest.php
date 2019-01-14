<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Helper;

use WBW\Bundle\BootstrapBundle\Helper\GridHelper;
use WBW\Bundle\BootstrapBundle\Tests\AbstractTestCase;

/**
 * Grid helper test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Helper
 */
class GridHelperTest extends AbstractTestCase {

    /**
     * Tests the getCSSClassname() method.
     *
     * @return void
     */
    public function testGetCSSClassnameWithBadSize() {

        $this->assertNull(GridHelper::getCSSClassname("", 6, ""));
    }

    /**
     * Tests the getCSSClassname() method.
     *
     * @return void
     */
    public function testGetCSSClassnameWithBadSuffix() {

        $this->assertNull(GridHelper::getCSSClassname("lg", 6, "suffix"));
    }

    /**
     * Tests the getCSSClassname() method.
     *
     * @return void
     */
    public function testGetCSSClassnameWithBadValue() {

        $this->assertNull(GridHelper::getCSSClassname("lg", 0, ""));
        $this->assertNull(GridHelper::getCSSClassname("lg", 13, ""));
    }

    /**
     * Tests the getCSSClassname() method.
     *
     * @return void
     */
    public function testGetCSSClassnameWithSizeLg() {

        $res = "col-lg-6";
        $this->assertEquals($res, GridHelper::getCSSClassname("lg", 6, ""));
    }

    /**
     * Tests the getCSSClassname() method.
     *
     * @return void
     */
    public function testGetCSSClassnameWithSizeMd() {

        $res = "col-md-6";
        $this->assertEquals($res, GridHelper::getCSSClassname("md", 6, ""));
    }

    /**
     * Tests the getCSSClassname() method.
     *
     * @return void
     */
    public function testGetCSSClassnameWithSizeSm() {

        $res = "col-sm-6";
        $this->assertEquals($res, GridHelper::getCSSClassname("sm", 6, ""));
    }

    /**
     * Tests the getCSSClassname() method.
     *
     * @return void
     */
    public function testGetCSSClassnameWithSizeXs() {

        $res = "col-xs-6";
        $this->assertEquals($res, GridHelper::getCSSClassname("xs", 6, ""));
    }

    /**
     * Tests the getCSSClassname() method.
     *
     * @return void
     */
    public function testGetCSSClassnameWithSuffixOffset() {

        $res = "col-lg-offset-6";
        $this->assertEquals($res, GridHelper::getCSSClassname("lg", 6, "offset"));
    }

    /**
     * Tests the getCSSClassname() method.
     *
     * @return void
     */
    public function testGetCSSClassnameWithSuffixPull() {

        $res = "col-lg-pull-6";
        $this->assertEquals($res, GridHelper::getCSSClassname("lg", 6, "pull"));
    }

    /**
     * Tests the getCSSClassname() method.
     *
     * @return void
     */
    public function testGetCSSClassnameWithSuffixPush() {

        $res = "col-lg-push-6";
        $this->assertEquals($res, GridHelper::getCSSClassname("lg", 6, "push"));
    }
}
