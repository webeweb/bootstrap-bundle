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
     * @var bool
     */
    private $animated;

    /**
     * Content.
     *
     * @var string
     */
    private $content;

    /**
     * Max.
     *
     * @var int
     */
    private $max;

    /**
     * Min.
     *
     * @var int
     */
    private $min;

    /**
     * Striped.
     *
     * @var bool
     */
    private $striped;

    /**
     * Type.
     *
     * @var string
     */
    private $type;

    /**
     * Value.
     *
     * @var int
     */
    private $value;

    /**
     * Constructor.
     *
     * @param string $type The type.
     */
    public function __construct($type) {
        $this->setType($type);
    }

    /**
     * {@inheritDoc}
     */
    public function getAnimated() {
        return $this->animated;
    }

    /**
     * {@inheritDoc}
     */
    public function getContent() {
        return $this->content;
    }

    /**
     * {@inheritDoc}
     */
    public function getMax() {
        return $this->max;
    }

    /**
     * {@inheritDoc}
     */
    public function getMin() {
        return $this->min;
    }

    /**
     * {@inheritDoc}
     */
    public function getPrefix() {
        return "progress-bar-";
    }

    /**
     * {@inheritDoc}
     */
    public function getStriped() {
        return $this->striped;
    }

    /**
     * {@inheritDoc}
     */
    public function getType() {
        return $this->type;
    }

    /**
     * {@inheritDoc}
     */
    public function getValue() {
        return $this->value;
    }

    /**
     * {@inheritDoc}
     */
    public function setAnimated($animated) {
        $this->animated = $animated;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setContent($content) {
        $this->content = $content;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setMax($max) {
        $this->max = $max;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setMin($min) {
        $this->min = $min;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setStriped($striped) {
        $this->striped = $striped;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setType($type) {
        $this->type = $type;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setValue($value) {
        $this->value = $value;
        return $this;
    }
}
