<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Asset\Button;

/**
 * Abstract button.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Asset\Button
 * @abstract
 */
abstract class AbstractButton implements ButtonInterface {

    /**
     * Active
     *
     * @var bool|null
     */
    private $active;

    /**
     * Block.
     *
     * @var bool|null
     */
    private $block;

    /**
     * Content.
     *
     * @var string|null
     */
    private $content;

    /**
     * Disabled.
     *
     * @var bool|null
     */
    private $disabled;

    /**
     * Outline.
     *
     * @var bool|null
     */
    private $outline;

    /**
     * Size.
     *
     * @var string|null
     */
    private $size;

    /**
     * Title.
     *
     * @var string|null
     */
    private $title;

    /**
     * Type.
     *
     * @var string|null
     */
    private $type;

    /**
     * Constructor.
     *
     * @param string|null $type The type.
     */
    protected function __construct(?string $type) {
        $this->setType($type);
    }

    /**
     * {@inheritDoc}
     */
    public function getActive(): ?bool {
        return $this->active;
    }

    /**
     * {@inheritDoc}
     */
    public function getBlock(): ?bool {
        return $this->block;
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
    public function getDisabled(): ?bool {
        return $this->disabled;
    }

    /**
     * {@inheritDoc}
     */
    public function getOutline(): ?bool {
        return $this->outline;
    }

    /**
     * {@inheritDoc}
     */
    public function getPrefix(): ?string {
        return "btn-";
    }

    /**
     * {@inheritDoc}
     */
    public function getSize(): ?string {
        return $this->size;
    }

    /**
     * {@inheritDoc}
     */
    public function getTitle(): ?string {
        return $this->title;
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
    public function setActive(?bool $active): ButtonInterface {
        $this->active = $active;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setBlock(?bool $block): ButtonInterface {
        $this->block = $block;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setContent(?string $content): ButtonInterface {
        $this->content = $content;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setDisabled(?bool $disabled): ButtonInterface {
        $this->disabled = $disabled;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setOutline(?bool $outline): ButtonInterface {
        $this->outline = $outline;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setSize(?string $size): ButtonInterface {
        $this->size = $size;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setTitle(?string $title): ButtonInterface {
        $this->title = $title;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setType(?string $type): ButtonInterface {
        $this->type = $type;
        return $this;
    }
}
