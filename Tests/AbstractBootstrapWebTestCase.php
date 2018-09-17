<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use TestKernel;

/**
 * Abstract Bootstrap web test case.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Cases
 * @abstract
 */
abstract class AbstractBootstrapWebTestCase extends WebTestCase {

    /**
     * {@inheritdoc}
     */
    protected static function getKernelClass() {
        require_once __DIR__ . "/Fixtures/App/TestKernel.php";
        return TestKernel::class;
    }

    /**
     * {@inheritdoc}
     */
    public static function setUpBeforeClass() {
        parent::setUpBeforeClass();

        // Initialize and boot the kernel.
        static::$kernel = static::createKernel();
        static::$kernel->boot();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown() {

        // Shutdown the kernel.
        static::$kernel->shutdown();
    }

}
