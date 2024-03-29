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
use WBW\Library\Symfony\Assets\AbstractBadge as BaseBadge;

/**
 * Abstract badge.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Assets
 * @abstract
 */
abstract class AbstractBadge extends BaseBadge implements BadgeInterface {

    /**
     * Pill.
     *
     * @var bool|null
     */
    private $pill;

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
            self::BADGE_TYPE_DANGER,
            self::BADGE_TYPE_DARK,
            self::BADGE_TYPE_INFO,
            self::BADGE_TYPE_LIGHT,
            self::BADGE_TYPE_PRIMARY,
            self::BADGE_TYPE_SECONDARY,
            self::BADGE_TYPE_SUCCESS,
            self::BADGE_TYPE_WARNING,
        ];
    }

    /**
     * {@inheritDoc}
     */
    public function getPill(): ?bool {
        return $this->pill;
    }

    /**
     * {@inheritDoc}
     */
    public function getPrefix(): ?string {
        return "badge-";
    }

    /**
     * {@inheritDoc}
     */
    public function jsonSerialize(): array {
        return JsonSerializer::serializeBadge($this);
    }

    /**
     * {@inheritDoc}
     */
    public function setPill(?bool $pill): BadgeInterface {
        $this->pill = $pill;
        return $this;
    }
}
