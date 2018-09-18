<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Helper;

use WBW\Bundle\BootstrapBundle\Provider\AssetProviderInterface;
use WBW\Library\Core\Exception\Argument\IllegalArgumentException;

/**
 * Asset helper.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Helper
 */
class AssetHelper {

    /**
     * Check the filenames.
     *
     * @param AssetProviderInterface $provider The provider.
     * @param string $extension The extension.
     * @return array Returns the checked filenames.
     * @throw IllegalArgumentException Throw an illegal argument exception if a filename does not math the extension.
     */
    protected static function checkFilenames(AssetProviderInterface $provider, $extension) {

        // Initialize.
        $filenames = [];
        $pattern   = "/" . preg_quote($extension, ".") . "$/";

        // Handle each filename.
        foreach ($provider->getFilenames() as $current) {

            // Build the filename.
            $filename = $provider->getDirectory() . $current;

            // Check the filename.
            if (0 === preg_match($pattern, $filename)) {

                $message = sprintf("The filename \"%s\" must end with the extension %s", $filename, $extension);
                throw new IllegalArgumentException($message);
            }

            // Add the filename.
            $filenames[] = $filename;
        }

        // Return the filenames.
        return $filenames;
    }

    /**
     * Get the filenames.
     *
     * @param AssetProviderInterface[] $providers The asset providers.
     * @param strign $extension The extension.
     * @return array Returns the resources.
     * @throw IllegalArgumentException Throw an illegal argument exception if a filename does not math the extension.
     */
    public static function getFilenames(array $providers, $extension) {

        // Initialize the filenames.
        $filenames = [];

        // Handle each provider.
        foreach ($providers as $current) {

            // Check the provider.
            if (false === ($current instanceof AssetProviderInterface)) {
                continue;
            }

            // Add the filenames.
            $filenames = array_merge($filenames, static::checkFilenames($current, $extension));
        }

        // Return the filenames.
        return $filenames;
    }

}
