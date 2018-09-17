<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Manager\Resources;

/**
 * CSS resources manager.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Manager\Resources
 */
class CSSResourcesManager extends AbstractResourcesManager {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.bootstrap.manager.resources.css";

    /**
     * Constructor.
     *
     * @param string $directory The directory.
     */
    public function __construct($directory) {
        parent::__construct($directory, ".css");
    }

}
