<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Asset\Badge;

/**
 * Dark badge.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Asset\Badge
 */
class DarkBadge extends AbstractBadge {

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct(self::BADGE_TYPE_DARK);
    }
}
