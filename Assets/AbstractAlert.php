<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Assets;

use WBW\Library\Symfony\Assets\AbstractAlert as BaseAlert;

/**
 * Abstract alert.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Assets
 * @abstract
 */
abstract class AbstractAlert extends BaseAlert implements AlertInterface {

    /**
     * Dismissible.
     *
     * @var bool|null
     */
    private $dismissible;

    /**
     * Constructor.
     *
     * @param string $type The type.
     */
    protected function __construct(string $type) {
        parent::__construct($type);
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
    public function setDismissible(?bool $dismissible): AlertInterface {
        $this->dismissible = $dismissible;
        return $this;
    }
}
