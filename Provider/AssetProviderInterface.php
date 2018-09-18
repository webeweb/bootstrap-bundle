<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Provider;

/**
 * Asset provider interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Provider
 */
interface AssetProviderInterface extends ProviderInterface {

    /**
     * Get the directory.
     *
     * @return string Returns the directory.
     */
    public function getDirectory();

    /**
     * Get the filenames.
     *
     * @return array Returns the filenames.
     */
    public function getFilenames();
}
