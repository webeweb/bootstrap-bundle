<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Asset\Theme;

use WBW\Bundle\CoreBundle\Asset\Theme\DefaultApplicationThemeProvider as BaseApplicationThemeProvider;

/**
 * Default application theme provider.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Asset\Theme
 */
class DefaultApplicationThemeProvider extends BaseApplicationThemeProvider {

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription(): ?string {
        return "Bootstrap bundle";
    }

    /**
     * {@inheritDoc}
     */
    public function getName(): ?string {
        return "Bootstrap<b>bundle</b>";
    }

    /**
     * {@inheritDoc}
     */
    public function getTitle(): ?string {
        return "Bootstrap bundle";
    }
}
