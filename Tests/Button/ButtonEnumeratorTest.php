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

use WBW\Bundle\BootstrapBundle\Button\ButtonEnumerator;
use WBW\Bundle\BootstrapBundle\Button\ButtonInterface;
use WBW\Bundle\BootstrapBundle\Tests\AbstractTestCase;

/**
 * Button enumerator test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Button
 */
class ButtonEnumeratorTest extends AbstractTestCase {

    /**
     * Tests the enumSizes() method.
     *
     * @return void
     */
    public function testEnumSizes() {

        $res = [
            ButtonInterface::BUTTON_SIZE_LG,
            ButtonInterface::BUTTON_SIZE_SM,
            ButtonInterface::BUTTON_SIZE_XS,
        ];
        $this->assertEquals($res, ButtonEnumerator::enumSizes());
    }

    /**
     * Tests the enumTypes() method.
     *
     * @return void
     */
    public function testEnumTypes() {

        $res = [
            ButtonInterface::BUTTON_TYPE_DANGER,
            ButtonInterface::BUTTON_TYPE_DARK,
            ButtonInterface::BUTTON_TYPE_DEFAULT,
            ButtonInterface::BUTTON_TYPE_INFO,
            ButtonInterface::BUTTON_TYPE_LIGHT,
            ButtonInterface::BUTTON_TYPE_LINK,
            ButtonInterface::BUTTON_TYPE_PRIMARY,
            ButtonInterface::BUTTON_TYPE_SECONDARY,
            ButtonInterface::BUTTON_TYPE_SUCCESS,
            ButtonInterface::BUTTON_TYPE_WARNING,
        ];
        $this->assertEquals($res, ButtonEnumerator::enumTypes());
    }

}
