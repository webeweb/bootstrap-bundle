<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Assets;

use WBW\Bundle\BootstrapBundle\Serializer\JsonSerializer;
use WBW\Library\Symfony\Assets\AbstractAlert as BaseAlert;

/**
 * Abstract alert.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Assets
 * @abstract
 */
abstract class AbstractAlert extends BaseAlert implements AlertInterface {

    /**
     * Dismissible.
     *
     * @var bool|null
     */
    private $dismissible;

    /**
     * Constructor.
     *
     * @param string $type The type.
     */
    protected function __construct(string $type) {
        parent::__construct($type);
    }

    /**
     * Enumerate the types.
     *
     * @return string[] Returns the types.
     */
    public static function enumTypes(): array {

        return [
            self::ALERT_TYPE_DANGER,
            self::ALERT_TYPE_DARK,
            self::ALERT_TYPE_INFO,
            self::ALERT_TYPE_LIGHT,
            self::ALERT_TYPE_PRIMARY,
            self::ALERT_TYPE_SECONDARY,
            self::ALERT_TYPE_SUCCESS,
            self::ALERT_TYPE_WARNING,
        ];
    }

    /**
     * {@inheritDoc}
     */
    public function getDismissible(): ?bool {
        return $this->dismissible;
    }

    /**
     * {@inheritDoc}
     */
    public function getPrefix(): ?string {
        return "alert-";
    }

    /**
     * {@inheritDoc}
     */
    public function jsonSerialize(): array {
        return JsonSerializer::serializeAlert($this);
    }

    /**
     * {@inheritDoc}
     */
    public function setDismissible(?bool $dismissible): AlertInterface {
        $this->dismissible = $dismissible;
        return $this;
    }
}
