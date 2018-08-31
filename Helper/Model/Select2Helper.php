<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Helper\Model;

use WBW\Bundle\BootstrapBundle\Model\Select2\Select2DataFormatInterface;
use WBW\Library\Core\Exception\Argument\IllegalArgumentException;

/**
 * Select2 helper.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Helper\Model
 */
class Select2Helper {

    /**
     * Convert items into a "results" array.
     *
     * @param Select2DataFormatInterface[] $items The items.
     * @return array Returns the "results" array.
     * @throws IllegalArgumentException Throws an illegal argument exception if an item does not implement Select2DataFormatInterface.
     */
    public static function toResults($items) {

        // Initialize the output.
        $output = [];

        // Handle each item.
        foreach ($items as $current) {

            // Check the item.
            if (false === ($current instanceof Select2DataFormatInterface)) {
                throw new IllegalArgumentException("The item must implements Select2DataFormatInterface");
            }

            // Add the item.
            $output[] = [
                "id"   => $current->getSelect2DataFormatId(),
                "text" => $current->getSelect2DataFormatText(),
            ];
        }

        // Return the output.
        return $output;
    }

}
