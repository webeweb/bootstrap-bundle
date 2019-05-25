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
        $this->setType($type);
    }

    /**
     * {@inheritDoc}
     */
    public function getActive() {
        return $this->active;
    }

    /**
     * {@inheritDoc}
     */
    public function getBlock() {
        return $this->block;
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
    public function getDisabled() {
        return $this->disabled;
    }

    /**
     * {@inheritDoc}
     */
    public function getPrefix() {
        return "btn-";
    }

    /**
     * {@inheritDoc}
     */
    public function getSize() {
        return $this->size;
    }

    /**
     * {@inheritDoc}
     */
    public function getTitle() {
        return $this->title;
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
    public function setActive($active) {
        $this->active = $active;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setBlock($block) {
        $this->block = $block;
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
    public function setDisabled($disabled) {
        $this->disabled = $disabled;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setSize($size) {
        $this->size = $size;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setTitle($title) {
        $this->title = $title;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setType($type) {
        $this->type = $type;
        return $this;
    }
}
