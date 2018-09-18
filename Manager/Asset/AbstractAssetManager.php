<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 E
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Manager\Asset;

use WBW\Bundle\BootstrapBundle\Helper\AssetHelper;
use WBW\Bundle\BootstrapBundle\Manager\AbstractManager;
use WBW\Bundle\BootstrapBundle\Manager\ManagerInterface;
use WBW\Library\Core\Exception\Argument\IllegalArgumentException;
use WBW\Library\Core\FileSystem\FileHelper;

/**
 * Abstract asset manager.
 *
 * @author e <https://github.com/e/>
 * @package WBW\Bundle\BootstrapBundle\Manager\Asset
 * @abstract
 */
abstract class AbstractAssetManager extends AbstractManager {

    /**
     * Directory.
     *
     * @var string
     */
    private $directory;

    /**
     * Extension.
     *
     * @var string
     */
    private $extension;

    /**
     * Constructor.
     *
     * @param string $directory The directory.
     * @param string $extension The extension.
     */
    public function __construct($directory, $extension) {
        parent::__construct();
        $this->setDirectory($directory);
        $this->setExtension($extension);
    }

    /**
     * Determines if the filename exists.
     *
     * @return boolean Returns true in case of success, false otherwise.
     */
    public function exists() {
        return file_exists($this->getFilename());
    }

    /**
     * Get the directory.
     *
     * @return string Returns the directory.
     */
    public function getDirectory() {
        return $this->directory;
    }

    /**
     * Get the extension.
     *
     * @return string Returns the extension.
     */
    public function getExtension() {
        return $this->extension;
    }

    /**
     * Get the filename.
     *
     * @return string Returns the filename.
     */
    public function getFilename() {
        return $this->getDirectory() . "/resources" . $this->getExtension();
    }

    /**
     * Set the directory.
     *
     * @param string $directory The directory.
     * @return ManagerInterface Returns this resources manager.
     */
    protected function setDirectory($directory) {
        $this->directory = $directory;
        return $this;
    }

    /**
     * Set the extension.
     *
     * @param string $extension The extension.
     * @return ManagerInterface Returns this resources manager.
     */
    protected function setExtension($extension) {
        $this->extension = $extension;
        return $this;
    }

}
