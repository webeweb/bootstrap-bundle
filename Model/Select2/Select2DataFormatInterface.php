<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Model\Select2;

/**
 * Select2 data format interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Model\Select2
 */
interface Select2DataFormatInterface {

    /**
     * Get a Select2 data format "Id".
     *
     * @return mixed Returns the Select2 data format "Id".
     */
    public function getSelect2DataFormatId();

    /**
     * Get a Select2 data format "Text".
     *
     * @return string Returns the Select2 data format "Text".
     */
    public function getSelect2DataFormatText();
}
