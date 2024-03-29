<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Factory;

use WBW\Bundle\BootstrapBundle\Assets\Button\DangerButton;
use WBW\Bundle\BootstrapBundle\Assets\Button\DarkButton;
use WBW\Bundle\BootstrapBundle\Assets\Button\DefaultButton;
use WBW\Bundle\BootstrapBundle\Assets\Button\InfoButton;
use WBW\Bundle\BootstrapBundle\Assets\Button\LightButton;
use WBW\Bundle\BootstrapBundle\Assets\Button\LinkButton;
use WBW\Bundle\BootstrapBundle\Assets\Button\PrimaryButton;
use WBW\Bundle\BootstrapBundle\Assets\Button\SecondaryButton;
use WBW\Bundle\BootstrapBundle\Assets\Button\SuccessButton;
use WBW\Bundle\BootstrapBundle\Assets\Button\WarningButton;
use WBW\Bundle\BootstrapBundle\Assets\ButtonInterface;
use WBW\Library\Types\Helper\ArrayHelper;

/**
 * Button factory.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Factory
 */
class ButtonFactory {

    /**
     * Create a new danger button.
     *
     * @return ButtonInterface Returns the danger button.
     */
    public static function newDangerButton(): ButtonInterface {
        return new DangerButton();
    }

    /**
     * Create a new dark button.
     *
     * @return ButtonInterface Returns the dark button.
     */
    public static function newDarkButton(): ButtonInterface {
        return new DarkButton();
    }

    /**
     * Create a new default button.
     *
     * @return ButtonInterface Returns the default button.
     */
    public static function newDefaultButton(): ButtonInterface {
        return new DefaultButton();
    }

    /**
     * Create a new info button.
     *
     * @return ButtonInterface Returns the info button.
     */
    public static function newInfoButton(): ButtonInterface {
        return new InfoButton();
    }

    /**
     * Create a new light button.
     *
     * @return ButtonInterface Returns the light button.
     */
    public static function newLightButton(): ButtonInterface {
        return new LightButton();
    }

    /**
     * Create a new link button.
     *
     * @return ButtonInterface Returns the link button.
     */
    public static function newLinkButton(): ButtonInterface {
        return new LinkButton();
    }

    /**
     * Create a new primary button.
     *
     * @return ButtonInterface Returns the primary button.
     */
    public static function newPrimaryButton(): ButtonInterface {
        return new PrimaryButton();
    }

    /**
     * Create a new secondary button.
     *
     * @return ButtonInterface Returns the secondary button.
     */
    public static function newSecondaryButton(): ButtonInterface {
        return new SecondaryButton();
    }

    /**
     * Create a new success button.
     *
     * @return ButtonInterface Returns the success button.
     */
    public static function newSuccessButton(): ButtonInterface {
        return new SuccessButton();
    }

    /**
     * Create a new warning button.
     *
     * @return ButtonInterface Returns the warning button.
     */
    public static function newWarningButton(): ButtonInterface {
        return new WarningButton();
    }

    /**
     * Parse a button.
     *
     * @param ButtonInterface $button The button.
     * @param array $args The arguments.
     * @return ButtonInterface Returns the button.
     */
    protected static function parseButton(ButtonInterface $button, array $args): ButtonInterface {

        $button->setActive(ArrayHelper::get($args, "active", false));
        $button->setBlock(ArrayHelper::get($args, "block", false));
        $button->setContent(ArrayHelper::get($args, "content"));
        $button->setData(ArrayHelper::get($args, "data", []));
        $button->setDisabled(ArrayHelper::get($args, "disabled", false));
        $button->setOutline(ArrayHelper::get($args, "outline", false));
        $button->setSize(ArrayHelper::get($args, "size"));
        $button->setTitle(ArrayHelper::get($args, "title"));

        return $button;
    }

    /**
     * Parse a danger button.
     *
     * @param array $args The arguments.
     * @return ButtonInterface Returns the danger button.
     */
    public static function parseDangerButton(array $args): ButtonInterface {
        return static::parseButton(static::newDangerButton(), $args);
    }

    /**
     * Parse a dark button.
     *
     * @param array $args The arguments.
     * @return ButtonInterface Returns the dark button.
     */
    public static function parseDarkButton(array $args): ButtonInterface {
        return static::parseButton(static::newDarkButton(), $args);
    }

    /**
     * Parse a default button.
     *
     * @param array $args The arguments.
     * @return ButtonInterface Returns the default button.
     */
    public static function parseDefaultButton(array $args): ButtonInterface {
        return static::parseButton(static::newDefaultButton(), $args);
    }

    /**
     * Parse a info button.
     *
     * @param array $args The arguments.
     * @return ButtonInterface Returns the info button.
     */
    public static function parseInfoButton(array $args): ButtonInterface {
        return static::parseButton(static::newInfoButton(), $args);
    }

    /**
     * Parse a light button.
     *
     * @param array $args The arguments.
     * @return ButtonInterface Returns the light button.
     */
    public static function parseLightButton(array $args): ButtonInterface {
        return static::parseButton(static::newLightButton(), $args);
    }

    /**
     * Parse a link button.
     *
     * @param array $args The arguments.
     * @return ButtonInterface Returns the link button.
     */
    public static function parseLinkButton(array $args): ButtonInterface {
        return static::parseButton(static::newLinkButton(), $args);
    }

    /**
     * Parse a primary button.
     *
     * @param array $args The arguments.
     * @return ButtonInterface Returns the primary button.
     */
    public static function parsePrimaryButton(array $args): ButtonInterface {
        return static::parseButton(static::newPrimaryButton(), $args);
    }

    /**
     * Parse a secondary button.
     *
     * @param array $args The arguments.
     * @return ButtonInterface Returns the secondary button.
     */
    public static function parseSecondaryButton(array $args): ButtonInterface {
        return static::parseButton(static::newSecondaryButton(), $args);
    }

    /**
     * Parse a success button.
     *
     * @param array $args The arguments.
     * @return ButtonInterface Returns the success button.
     */
    public static function parseSuccessButton(array $args): ButtonInterface {
        return static::parseButton(static::newSuccessButton(), $args);
    }

    /**
     * Parse a warning button.
     *
     * @param array $args The arguments.
     * @return ButtonInterface Returns the warning button.
     */
    public static function parseWarningButton(array $args): ButtonInterface {
        return static::parseButton(static::newWarningButton(), $args);
    }
}
