<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Twig\Extension\Utility;

/**
 * Table button Twig extension trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\Utility
 */
trait TableButtonTwigExtensionTrait {

    /**
     * Table button Twig extension.
     *
     * @var TableButtonTwigExtension
     */
    private $tableButtonTwigExtension;

    /**
     * Get the table button Twig extention.
     *
     * @return TableButtonTwigExtension Returns the table button Twig extension.
     */
    public function getTableButtonTwigExtension() {
        return $this->tableButtonTwigExtension;
    }

    /**
     * Set the table button Twig extension.
     *
     * @param TableButtonTwigExtension $tableButtonTwigExtension The table button Twig extension.
     */
    protected function setTableButtonTwigExtension(TableButtonTwigExtension $tableButtonTwigExtension = null) {
        $this->tableButtonTwigExtension = $tableButtonTwigExtension;
        return $this;
    }

}
