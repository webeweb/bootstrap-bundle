<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Provider;

use WBW\Library\Symfony\Provider\JavascriptProviderInterface;

/**
 * Javascript provider.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Provider
 */
class JavascriptProvider implements JavascriptProviderInterface {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "wbw.bootstrap.provider.javascript";

    /**
     * {@inheritDoc}
     */
    public function getJavascripts(): array {

        return [
            "WBWBootstrapNotify"    => "@WBWBootstrap/assets/WBWBootstrapNotify.js.twig",
            "WBWBootstrapSelect"    => "@WBWBootstrap/assets/WBWBootstrapSelect.js.twig",
            "WBWBootstrapTooltip"   => "@WBWBootstrap/assets/WBWBootstrapTooltip.js.twig",
            "WBWBootstrapWysihtml5" => "@WBWBootstrap/assets/WBWBootstrapWysihtml5.js.twig",
        ];
    }
}
