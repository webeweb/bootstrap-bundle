<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\ProgressBar;

/**
 * Abstract progress bar.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\ProgressBar
 * @abstract
 */
abstract class AbstractProgressBar implements ProgressBarInterface {

    /**
     * Animated.
     *
     * @var bool|null
     */
    private $animated;

    /**
     * Content.
     *
     * @var string|null
     */
    private $content;

    /**
     * Height.
     *
     * @var int|null
     */
    private $height;

    /**
     * Max.
     *
     * @var int|null
     */
    private $max;

    /**
     * Min.
     *
     * @var int|null
     */
    private $min;

    /**
     * Striped.
     *
     * @var bool|null
     */
    private $striped;

    /**
     * Type.
     *
     * @var string|null
     */
    private $type;

    /**
     * Value.
     *
     * @var int|null
     */
    private $value;

    /**
     * Constructor.
     *
     * @param string|null $type The type.
     */
    public function __construct(?string $type) {
        $this->setType($type);
    }

    /**
     * {@inheritDoc}
     */
    public function getAnimated(): ?bool {
        return $this->animated;
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
    public function getHeight(): ?int {
        return $this->height;
    }

    /**
     * {@inheritDoc}
     */
    public function getMax(): ?int {
        return $this->max;
    }

    /**
     * {@inheritDoc}
     */
    public function getMin(): ?int {
        return $this->min;
    }

    /**
     * {@inheritDoc}
     */
    public function getPrefix(): ?string {
        return "progress-bar-";
    }

    /**
     * {@inheritDoc}
     */
    public function getStriped(): ?bool {
        return $this->striped;
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
    public function getValue(): ?int {
        return $this->value;
    }

    /**
     * {@inheritDoc}
     */
    public function setAnimated(?bool $animated): ProgressBarInterface {
        $this->animated = $animated;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setContent(?string $content): ProgressBarInterface {
        $this->content = $content;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setHeight(?int $height): ProgressBarInterface {
        $this->height = $height;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setMax(?int $max): ProgressBarInterface {
        $this->max = $max;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setMin(?int $min): ProgressBarInterface {
        $this->min = $min;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setStriped(?bool $striped): ProgressBarInterface {
        $this->striped = $striped;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setType(?string $type): ProgressBarInterface {
        $this->type = $type;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setValue(?int $value): ProgressBarInterface {
        $this->value = $value;
        return $this;
    }
}
