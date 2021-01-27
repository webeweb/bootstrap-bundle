<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Alert;

/**
 * Abstract alert.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Alert
 * @abstract
 */
abstract class AbstractAlert implements AlertInterface {

    /**
     * Content.
     *
     * @var string|null
     */
    private $content;

    /**
     * Dismissible.
     *
     * @var bool|null
     */
    private $dismissible;

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
    public function getType(): ?string {
        return $this->type;
    }

    /**
     * {@inheritDoc}
     */
    public function setContent(?string $content): AlertInterface {
        $this->content = $content;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setDismissible(?bool $dismissible): ALertInterface {
        $this->dismissible = $dismissible;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setType(?string $type): AlertInterface {
        $this->type = $type;
        return $this;
    }
}
