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

    /**
     * Serializes a button.
     *
     * @param ButtonInterface $model The model.
     * @return array Returns the serialized model.
     */
    public static function serializeButton(ButtonInterface $model): array {
        return [
            SerializerKeys::ACTIVE   => $model->getActive(),
            SerializerKeys::BLOCK    => $model->getBlock(),
            SerializerKeys::DISABLED => $model->getDisabled(),
            SerializerKeys::CONTENT  => $model->getContent(),
            SerializerKeys::OUTLINE  => $model->getOutline(),
            SerializerKeys::PREFIX   => $model->getPrefix(),
            SerializerKeys::SIZE     => $model->getSize(),
            SerializerKeys::TITLE    => $model->getTitle(),
            SerializerKeys::TYPE     => $model->getType(),
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
            SerializerKeys::ANIMATED => $model->getAnimated(),
            SerializerKeys::CONTENT  => $model->getContent(),
            SerializerKeys::HEIGHT   => $model->getHeight(),
            SerializerKeys::MAX      => $model->getMax(),
            SerializerKeys::MIN      => $model->getMin(),
            SerializerKeys::PREFIX   => $model->getPrefix(),
            SerializerKeys::STRIPED  => $model->getStriped(),
            SerializerKeys::TYPE     => $model->getType(),
            SerializerKeys::VALUE    => $model->getValue(),
        ];
    }
}
