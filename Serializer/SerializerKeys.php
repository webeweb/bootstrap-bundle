<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Serializer;

use WBW\Library\Serializer\SerializerKeys as BaseSerializerKeys;

/**
 * Serializer keys.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Serializer
 */
interface SerializerKeys extends BaseSerializerKeys {

    /**
     * Serializer key "animated".
     *
     * @var string
     */
    const ANIMATED = "animated";

    /**
     * Serializer key "block".
     *
     * @var string
     */
    const BLOCK = "block";

    /**
     * Serializer key "dismissible".
     *
     * @var string
     */
    const DISMISSIBLE = "dismissible";

    /**
     * Serializer key "outline".
     *
     * @var string
     */
    const OUTLINE = "outline";

    /**
     * Serializer key "pill".
     *
     * @var string
     */
    const PILL = "pill";

    /**
     * Serializer key "prefix".
     *
     * @var string
     */
    const PREFIX = "prefix";

    /**
     * Serializer key "striped".
     *
     * @var string
     */
    const STRIPED = "striped";
}
