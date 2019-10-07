<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Badge;

/**
 * Abstract badge.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Badge
 * @abstract
 */
abstract class AbstractBadge implements BadgeInterface {

    /**
     * Content.
     *
     * @var string
     */
    private $content;



    /**
     * {@inheritDoc}
     */
    public function getPrefix() {
        return "badge-";
    }
    /**
     * Pill.
     *
     * @var bool
     */
    private $pill;

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
    public function getContent() {
        return $this->content;
    }

    /**
     * {@inheritDoc}
     */
    public function getPill() {
        return $this->pill;
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
    public function setContent($content) {
        $this->content = $content;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setPill($pill) {
        $this->pill = $pill;
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
