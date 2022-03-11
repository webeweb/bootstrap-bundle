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

use WBW\Bundle\BootstrapBundle\Assets\AlertInterface;
use WBW\Bundle\BootstrapBundle\Assets\BadgeInterface;

/**
 * JSON serializer.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Serializer
 */
class JsonSerializer {

    /**
     * Serializes an alert.
     *
     * @param AlertInterface $model The model.
     * @return array Returns the serialized model.
     */
    public static function serializeAlert(AlertInterface $model): array {
        return [
            SerializerKeys::CONTENT     => $model->getContent(),
            SerializerKeys::DISMISSIBLE => $model->getDismissible(),
            SerializerKeys::PREFIX      => $model->getPrefix(),
            SerializerKeys::TYPE        => $model->getType(),
        ];
    }

    /**
     * Serializes a badge.
     *
     * @param BadgeInterface $model The model.
     * @return array Returns the serialized model.
     */
    public static function serializeBadge(BadgeInterface $model): array {
        return [
            SerializerKeys::CONTENT => $model->getContent(),
            SerializerKeys::PILL    => $model->getPill(),
            SerializerKeys::PREFIX  => $model->getPrefix(),
            SerializerKeys::TYPE    => $model->getType(),
        ];
    }
}
