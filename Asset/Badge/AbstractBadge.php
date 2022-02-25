<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Asset\Badge;

/**
 * Abstract badge.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Asset\Badge
 * @abstract
 */
abstract class AbstractBadge implements BadgeInterface {

    /**
     * Content.
     *
     * @var string|null
     */
    private $content;

    /**
     * Pill.
     *
     * @var bool|null
     */
    private $pill;

    /**
     * Type.
     *
     * @var string|null
     */
    private $type;

    /**
     * Constructor.
     *
     * @param string|null type.
     */
    protected function __construct(?string $type) {
        $this->setType($type);
    }

    /**
     * {@inheritDoc}
     */
    public function getContent(): ?string {
        return $this->content;
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
    public function getType(): ?string {
        return $this->type;
    }

    /**
     * {@inheritDoc}
     */
    public function setContent(?string $content): BadgeInterface {
        $this->content = $content;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setPill(?bool $pill): BadgeInterface {
        $this->pill = $pill;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setType(?string $type): BadgeInterface {
        $this->type = $type;
        return $this;
    }
}
