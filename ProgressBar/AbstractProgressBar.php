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
     * {@inheritdoc}
     */
    public function getAnimated() {
        return $this->animated;
    }

    /**
     * {@inheritdoc}
     */
    public function getContent() {
        return $this->content;
    }

    /**
     * {@inheritdoc}
     */
    public function getMax() {
        return $this->max;
    }

    /**
     * {@inheritdoc}
     */
    public function getMin() {
        return $this->min;
    }

    /**
     * {@inheritdoc}
     */
    public function getStriped() {
        return $this->striped;
    }

    /**
     * {@inheritdoc}
     */
    public function getType() {
        return $this->type;
    }

    /**
     * {@inheritdoc}
     */
    public function getValue() {
        return $this->value;
    }

    /**
     * {@inheritdoc}
     */
    public function setAnimated($animated) {
        $this->animated = $animated;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setContent($content) {
        $this->content = $content;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setMax($max) {
        $this->max = $max;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setMin($min) {
        $this->min = $min;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setStriped($striped) {
        $this->striped = $striped;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setType($type) {
        $this->type = $type;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setValue($value) {
        $this->value = $value;
        return $this;
    }
}
