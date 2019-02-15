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
 * Abstract button.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Button
 * @abstract
 */
abstract class AbstractButton implements ButtonInterface {

    /**
     * Active
     *
     * @var bool
     */
    private $active;

    /**
     * Block.
     *
     * @var bool
     */
    private $block;

    /**
     * Content.
     *
     * @var string
     */
    private $content;

    /**
     * Disabled.
     *
     * @var bool
     */
    private $disabled;

    /**
     * Size.
     *
     * @var string
     */
    private $size;

    /**
     * Title.
     *
     * @var string
     */
    private $title;

    /**
     * Type.
     *
     * @var string
     */
    private $type;

    /**
     * Constructor.
     *
     * @param string type.
     */
    protected function __construct($type) {
        $this->setActive(false);
        $this->setBlock(false);
        $this->setDisabled(false);
        $this->setType($type);
    }

    /**
     * {@inheritdoc}
     */
    public function getActive() {
        return $this->active;
    }

    /**
     * {@inheritdoc}
     */
    public function getBlock() {
        return $this->block;
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
    public function getDisabled() {
        return $this->disabled;
    }

    /**
     * {@inheritdoc}
     */
    public function getSize() {
        return $this->size;
    }

    /**
     * {@inheritdoc}
     */
    public function getTitle() {
        return $this->title;
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
    public function setActive($active) {
        $this->active = $active;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setBlock($block) {
        $this->block = $block;
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
    public function setDisabled($disabled) {
        $this->disabled = $disabled;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setSize($size) {
        $this->size = $size;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setTitle($title) {
        $this->title = $title;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setType($type) {
        $this->type = $type;
        return $this;
    }
}
