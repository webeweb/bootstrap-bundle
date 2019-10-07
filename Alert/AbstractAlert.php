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
     * @var string
     */
    private $content;

    /**
     * Dismissible.
     *
     * @var bool
     */
    private $dismissible;

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
    public function getDismissible() {
        return $this->dismissible;
    }


    /**
     * {@inheritDoc}
     */
    public function getPrefix() {
        return "alert-";
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
    public function setDismissible($dismissible) {
        $this->dismissible = $dismissible;
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
