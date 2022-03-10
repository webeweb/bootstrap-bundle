<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Helper;

use WBW\Bundle\BootstrapBundle\Assets\ButtonInterface;
use WBW\Bundle\BootstrapBundle\Helper\ButtonHelper;
use WBW\Bundle\BootstrapBundle\Tests\AbstractTestCase;

/**
 * Button helper test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Tests\Helper
 */
class ButtonHelperTest extends AbstractTestCase {

    /**
     * Tests enumSizes()
     *
     * @return void
     */
    public function testEnumSizes(): void {

        $res = [
            ButtonInterface::BUTTON_SIZE_LG,
            ButtonInterface::BUTTON_SIZE_SM,
            ButtonInterface::BUTTON_SIZE_XS,
        ];
        $this->assertEquals($res, ButtonHelper::enumSizes());
    }

    /**
     * Tests enumTypes()
     *
     * @return void
     */
    public function testEnumTypes(): void {

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
        $this->assertEquals($res, ButtonHelper::enumTypes());
    }

}
