<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Button;

/**
 * Button factory.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Button
 */
class ButtonFactory {

    /**
     * Creates a new danger button.
     *
     * @return ButtonInterface Returns the danger button.
     */
    public static function newDangerButton() {
        return new DangerButton();
    }

    /**
     * Creates a new default button.
     *
     * @return ButtonInterface Returns the default button.
     */
    public static function newDefaultButton() {
        return new DefaultButton();
    }

    /**
     * Creates a new info button.
     *
     * @return ButtonInterface Returns the info button.
     */
    public static function newInfoButton() {
        return new InfoButton();
    }

    /**
     * Creates a new primary button.
     *
     * @return ButtonInterface Returns the primary button.
     */
    public static function newPrimaryButton() {
        return new PrimaryButton();
    }

    /**
     * Creates a new success button.
     *
     * @return ButtonInterface Returns the success button.
     */
    public static function newSuccessButton() {
        return new SuccessButton();
    }

    /**
     * Creates a new warning button.
     *
     * @return ButtonInterface Returns the warning button.
     */
    public static function newWarningButton() {
        return new WarningButton();
    }
}
