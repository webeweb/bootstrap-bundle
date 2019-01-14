<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Button;

use WBW\Bundle\BootstrapBundle\Button\ButtonFactory;
use WBW\Bundle\BootstrapBundle\Button\ButtonInterface;
use WBW\Bundle\BootstrapBundle\Tests\AbstractTestCase;

/**
 * Button factory test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Button
 */
class ButtonFactoryTest extends AbstractTestCase {

    /**
     * Tests the newDangerButton() method.
     *
     * @return void
     */
    public function testNewDangerButton() {

        $obj = ButtonFactory::newDangerButton();

        $this->assertInstanceOf(ButtonInterface::class, $obj);
        $this->assertEquals(ButtonInterface::BUTTON_TYPE_DANGER, $obj->getType());
    }

    /**
     * Tests the newDefaultButton() method.
     *
     * @return void
     */
    public function testNewDefaultButton() {

        $obj = ButtonFactory::newDefaultButton();

        $this->assertInstanceOf(ButtonInterface::class, $obj);
        $this->assertEquals(ButtonInterface::BUTTON_TYPE_DEFAULT, $obj->getType());
    }

    /**
     * Tests the newInfoButton() method.
     *
     * @return void
     */
    public function testNewInfoButton() {

        $obj = ButtonFactory::newInfoButton();

        $this->assertInstanceOf(ButtonInterface::class, $obj);
        $this->assertEquals(ButtonInterface::BUTTON_TYPE_INFO, $obj->getType());
    }

    /**
     * Tests the newPrimaryButton() method.
     *
     * @return void
     */
    public function testNewPrimaryButton() {

        $obj = ButtonFactory::newPrimaryButton();

        $this->assertInstanceOf(ButtonInterface::class, $obj);
        $this->assertEquals(ButtonInterface::BUTTON_TYPE_PRIMARY, $obj->getType());
    }

    /**
     * Tests the newSuccessButton() method.
     *
     * @return void
     */
    public function testNewSuccessButton() {

        $obj = ButtonFactory::newSuccessButton();

        $this->assertInstanceOf(ButtonInterface::class, $obj);
        $this->assertEquals(ButtonInterface::BUTTON_TYPE_SUCCESS, $obj->getType());
    }

    /**
     * Tests the newWarningButton() method.
     *
     * @return void
     */
    public function testNewWarningButton() {

        $obj = ButtonFactory::newWarningButton();

        $this->assertInstanceOf(ButtonInterface::class, $obj);
        $this->assertEquals(ButtonInterface::BUTTON_TYPE_WARNING, $obj->getType());
    }
}
