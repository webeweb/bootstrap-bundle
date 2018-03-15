<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Provider\Footer;

/**
 * Footer provider interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Provider\Footer
 */
interface FooterProviderInterface {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = 'webeweb.bundle.bootstrapbundle.provider.footer';

    /**
     * Get the template.
     *
     * @return string Returns the template.
     */
    public function getTemplate();
}
