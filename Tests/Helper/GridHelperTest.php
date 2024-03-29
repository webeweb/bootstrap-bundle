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
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Tests\Helper
 */
class GridHelperTest extends AbstractTestCase {

    /**
     * Test getCSSClassname()
     *
     * @return void
     */
    public function testGetCSSClassnameWithBadSize(): void {

        $this->assertNull(GridHelper::getCSSClassname("", 6, ""));
    }

    /**
     * Test getCSSClassname()
     *
     * @return void
     */
    public function testGetCSSClassnameWithBadSuffix(): void {

        $this->assertNull(GridHelper::getCSSClassname("lg", 6, "suffix"));
    }

    /**
     * Test getCSSClassname()
     *
     * @return void
     */
    public function testGetCSSClassnameWithBadValue(): void {

        $this->assertNull(GridHelper::getCSSClassname("lg", 0, ""));
        $this->assertNull(GridHelper::getCSSClassname("lg", 13, ""));
    }

    /**
     * Test getCSSClassname()
     *
     * @return void
     */
    public function testGetCSSClassnameWithSizeLg(): void {

        $res = "col-lg-6";
        $this->assertEquals($res, GridHelper::getCSSClassname("lg", 6, ""));
    }

    /**
     * Test getCSSClassname()
     *
     * @return void
     */
    public function testGetCSSClassnameWithSizeMd(): void {

        $res = "col-md-6";
        $this->assertEquals($res, GridHelper::getCSSClassname("md", 6, ""));
    }

    /**
     * Test getCSSClassname()
     *
     * @return void
     */
    public function testGetCSSClassnameWithSizeSm(): void {

        $res = "col-sm-6";
        $this->assertEquals($res, GridHelper::getCSSClassname("sm", 6, ""));
    }

    /**
     * Test getCSSClassname()
     *
     * @return void
     */
    public function testGetCSSClassnameWithSizeXs(): void {

        $res = "col-xs-6";
        $this->assertEquals($res, GridHelper::getCSSClassname("xs", 6, ""));
    }

    /**
     * Test getCSSClassname()
     *
     * @return void
     */
    public function testGetCSSClassnameWithSuffixOffset(): void {

        $res = "col-lg-offset-6";
        $this->assertEquals($res, GridHelper::getCSSClassname("lg", 6, "offset"));
    }

    /**
     * Test getCSSClassname()
     *
     * @return void
     */
    public function testGetCSSClassnameWithSuffixPull(): void {

        $res = "col-lg-pull-6";
        $this->assertEquals($res, GridHelper::getCSSClassname("lg", 6, "pull"));
    }

    /**
     * Test getCSSClassname()
     *
     * @return void
     */
    public function testGetCSSClassnameWithSuffixPush(): void {

        $res = "col-lg-push-6";
        $this->assertEquals($res, GridHelper::getCSSClassname("lg", 6, "push"));
    }
}
