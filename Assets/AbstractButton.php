<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Assets;

use WBW\Bundle\BootstrapBundle\Serializer\JsonSerializer;
use WBW\Library\Symfony\Assets\AbstractButton as BaseButton;
use WBW\Library\Traits\Booleans\BooleanActiveTrait;
use WBW\Library\Traits\Strings\StringSizeTrait;
use WBW\Library\Traits\Strings\StringTitleTrait;

/**
 * Abstract button.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Assets
 * @abstract
 */
abstract class AbstractButton extends BaseButton implements ButtonInterface {

    use BooleanActiveTrait;
    use StringSizeTrait;
    use StringTitleTrait;

    /**
     * Block.
     *
     * @var bool|null
     */
    private $block;

    /**
     * Disabled.
     *
     * @var bool|null
     */
    private $disabled;

    /**
     * Outline.
     *
     * @var bool|null
     */
    private $outline;

    /**
     * Constructor.
     *
     * @param string|null $type The type.
     */
    protected function __construct(?string $type) {
        parent::__construct($type);
    }

    /**
     * Enumerates the sizes.
     *
     * @return string[] Returns the sizes enumeration.
     */
    public static function enumSizes(): array {
        return [
            self::BUTTON_SIZE_LG,
            self::BUTTON_SIZE_SM,
            self::BUTTON_SIZE_XS,
        ];
    }

    /**
     * Enumerates the types.
     *
     * @return string[] Returns the types enumeration.
     */
    public static function enumTypes(): array {
        return [
            self::BUTTON_TYPE_DANGER,
            self::BUTTON_TYPE_DARK,
            self::BUTTON_TYPE_DEFAULT,
            self::BUTTON_TYPE_INFO,
            self::BUTTON_TYPE_LIGHT,
            self::BUTTON_TYPE_LINK,
            self::BUTTON_TYPE_PRIMARY,
            self::BUTTON_TYPE_SECONDARY,
            self::BUTTON_TYPE_SUCCESS,
            self::BUTTON_TYPE_WARNING,
        ];
    }

    /**
     * {@inheritDoc}
     */
    public function getBlock(): ?bool {
        return $this->block;
    }

    /**
     * {@inheritDoc}
     */
    public function getDisabled(): ?bool {
        return $this->disabled;
    }

    /**
     * {@inheritDoc}
     */
    public function getOutline(): ?bool {
        return $this->outline;
    }

    /**
     * {@inheritDoc}
     */
    public function getPrefix(): ?string {
        return "btn-";
    }

    /**
     * {@inheritDoc}
     */
    public function jsonSerialize(): array {
        return JsonSerializer::serializeButton($this);
    }

    /**
     * {@inheritDoc}
     */
    public function setBlock(?bool $block): ButtonInterface {
        $this->block = $block;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setDisabled(?bool $disabled): ButtonInterface {
        $this->disabled = $disabled;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setOutline(?bool $outline): ButtonInterface {
        $this->outline = $outline;
        return $this;
    }
}
