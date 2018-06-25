<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Model;

use PHPUnit_Framework_TestCase;
use WBW\Bundle\BootstrapBundle\Model\EmailLayout;

/**
 * Email layout test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Model
 * @final
 */
final class EmailPageTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj = new EmailLayout();

        $this->assertNull($obj->getAccountSettingsURL());
        $this->assertNull($obj->getBestRegards());
        $this->assertNull($obj->getCompanyLogo());
        $this->assertNull($obj->getCompanyName());
        $this->assertNull($obj->getCompanyURL());
        $this->assertNull($obj->getSupportEmail());
        $this->assertNull($obj->getSupportName());
        $this->assertNull($obj->getSupportPhone());
        $this->assertNull($obj->getUnsubscribeURL());
    }

    /**
     * Tests the setAccountSettingsURL() method.
     *
     * @return void
     */
    public function testSetAccountSeetings() {

        $obj = new EmailLayout();

        $obj->setAccountSettingsURL("accountSettingsURL");
        $this->assertEquals("accountSettingsURL", $obj->getAccountSettingsURL());
    }

    /**
     * Tests the setBestRegards() method.
     *
     * @return void
     */
    public function testSetBestRegards() {

        $obj = new EmailLayout();

        $obj->setBestRegards("bestRegards");
        $this->assertEquals("bestRegards", $obj->getBestRegards());
    }

    /**
     * Tests the setCompanyLogo() method.
     *
     * @return void
     */
    public function testSetCompanyLogo() {

        $obj = new EmailLayout();

        $obj->setCompanyLogo("companyLogo");
        $this->assertEquals("companyLogo", $obj->getCompanyLogo());
    }

    /**
     * Tests the setCompanyName() method.
     *
     * @return void
     */
    public function testSetCompanyName() {

        $obj = new EmailLayout();

        $obj->setCompanyName("companyName");
        $this->assertEquals("companyName", $obj->getCompanyName());
    }

    /**
     * Tests the setCompanyURL() method.
     *
     * @return void
     */
    public function testSetCompanyURL() {

        $obj = new EmailLayout();

        $obj->setCompanyURL("companyURL");
        $this->assertEquals("companyURL", $obj->getCompanyURL());
    }

    /**
     * Tests the setSupportEmail() method.
     *
     * @return void
     */
    public function testSetSupportEmail() {

        $obj = new EmailLayout();

        $obj->setSupportEmail("supportEmail");
        $this->assertEquals("supportEmail", $obj->getSupportEmail());
    }

    /**
     * Tests the setSupportName() method.
     *
     * @return void
     */
    public function testSetSupportName() {

        $obj = new EmailLayout();

        $obj->setSupportName("supportName");
        $this->assertEquals("supportName", $obj->getSupportName());
    }

    /**
     * Tests the setSupportPhone() method.
     *
     * @return void
     */
    public function testSetSupportPhone() {

        $obj = new EmailLayout();

        $obj->setSupportPhone("supportPhone");
        $this->assertEquals("supportPhone", $obj->getSupportPhone());
    }

    /**
     * Tests the setUnsubscribeURL() method.
     *
     * @return void
     */
    public function testSetUnsubscribeURL() {

        $obj = new EmailLayout();

        $obj->setUnsubscribeURL("unsubscribeURL");
        $this->assertEquals("unsubscribeURL", $obj->getUnsubscribeURL());
    }

}
