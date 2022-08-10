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
use WBW\Bundle\BootstrapBundle\Assets\ButtonInterface;
use WBW\Bundle\BootstrapBundle\Assets\ProgressBarInterface;
use WBW\Library\Serializer\SerializerKeys as BaseSerializerKeys;

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
            BaseSerializerKeys::CONTENT => $model->getContent(),
            SerializerKeys::DISMISSIBLE => $model->getDismissible(),
            SerializerKeys::PREFIX      => $model->getPrefix(),
            BaseSerializerKeys::TYPE    => $model->getType(),
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
            BaseSerializerKeys::CONTENT => $model->getContent(),
            SerializerKeys::PILL        => $model->getPill(),
            SerializerKeys::PREFIX      => $model->getPrefix(),
            BaseSerializerKeys::TYPE    => $model->getType(),
        ];
    }

    /**
     * Serializes a button.
     *
     * @param ButtonInterface $model The model.
     * @return array Returns the serialized model.
     */
    public static function serializeButton(ButtonInterface $model): array {
        return [
            BaseSerializerKeys::ACTIVE   => $model->getActive(),
            SerializerKeys::BLOCK        => $model->getBlock(),
            BaseSerializerKeys::DISABLED => $model->getDisabled(),
            BaseSerializerKeys::CONTENT  => $model->getContent(),
            SerializerKeys::OUTLINE      => $model->getOutline(),
            SerializerKeys::PREFIX       => $model->getPrefix(),
            BaseSerializerKeys::SIZE     => $model->getSize(),
            BaseSerializerKeys::TITLE    => $model->getTitle(),
            BaseSerializerKeys::TYPE     => $model->getType(),
        ];
    }

    /**
     * Serializes a progress bar.
     *
     * @param ProgressBarInterface $model The model.
     * @return array Returns the serialized model.
     */
    public static function serializeProgressBar(ProgressBarInterface $model): array {
        return [
            SerializerKeys::ANIMATED    => $model->getAnimated(),
            BaseSerializerKeys::CONTENT => $model->getContent(),
            BaseSerializerKeys::HEIGHT  => $model->getHeight(),
            BaseSerializerKeys::MAX     => $model->getMax(),
            BaseSerializerKeys::MIN     => $model->getMin(),
            SerializerKeys::PREFIX      => $model->getPrefix(),
            SerializerKeys::STRIPED     => $model->getStriped(),
            BaseSerializerKeys::TYPE    => $model->getType(),
            BaseSerializerKeys::VALUE   => $model->getValue(),
        ];
    }
}
