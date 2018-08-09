<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Exception;

use Exception;

/**
 * Abstract Bootstrap exception.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Exception
 * @abstract
 */
abstract class AbstractBootstrapException extends Exception {

    /**
     * Constructor.
     *
     * @param string $message The message.
     * @param int $code The code.
     * @param Exception $previous The previous.
     */
    public function __construct($message, $code = 500, Exception $previous = null) {
        parent::__construct($message, $code, $previous);
    }

}
