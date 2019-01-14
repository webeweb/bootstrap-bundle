<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Theme;

use WBW\Bundle\CoreBundle\Theme\DefaultApplicationThemeProvider as BaseApplicationThemeProvider;

/**
 * Default application theme provider.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Theme
 */
class DefaultApplicationThemeProvider extends BaseApplicationThemeProvider {

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * {@inheritdoc}
     */
    public function getDescription() {
        return "Bootstrap bundle";
    }

    /**
     * {@inheritdoc}
     */
    public function getName() {
        return "Bootstrap<b>bundle</b>";
    }

    /**
     * {@inheritdoc}
     */
    public function getTitle() {
        return "Bootstrap bundle";
    }
}
