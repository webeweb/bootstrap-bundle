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
use WBW\Library\Symfony\Assets\AbstractProgressBar as BaseProgressBar;
use WBW\Library\Traits\Integers\IntegerHeightTrait;
use WBW\Library\Traits\Integers\IntegerMaxTrait;
use WBW\Library\Traits\Integers\IntegerMinTrait;
use WBW\Library\Traits\Integers\IntegerValueTrait;

/**
 * Abstract progress bar.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Assets
 * @abstract
 */
abstract class AbstractProgressBar extends BaseProgressBar implements ProgressBarInterface {

    use IntegerHeightTrait;
    use IntegerMaxTrait;
    use IntegerMinTrait;
    use IntegerValueTrait;

    /**
     * Animated.
     *
     * @var bool|null
     */
    private $animated;

    /**
     * Striped.
     *
     * @var bool|null
     */
    private $striped;

    /**
     * Constructor.
     *
     * @param string|null $type The type.
     */
    public function __construct(?string $type) {
        parent::__construct($type);
    }

    /**
     * {@inheritDoc}
     */
    public function getAnimated(): ?bool {
        return $this->animated;
    }

    /**
     * {@inheritDoc}
     */
    public function getPrefix(): ?string {
        return "progress-bar-";
    }

    /**
     * {@inheritDoc}
     */
    public function getStriped(): ?bool {
        return $this->striped;
    }

    /**
     * {@inheritDoc}
     */
    public function getType(): ?string {
        return $this->type;
    }

    /**
     * {@inheritDoc}
     */
    public function jsonSerialize(): array {
        return JsonSerializer::serializeProgressBar($this);
    }

    /**
     * {@inheritDoc}
     */
    public function setAnimated(?bool $animated): ProgressBarInterface {
        $this->animated = $animated;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setStriped(?bool $striped): ProgressBarInterface {
        $this->striped = $striped;
        return $this;
    }
}
