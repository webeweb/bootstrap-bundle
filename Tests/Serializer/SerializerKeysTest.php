<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Serializer;

use WBW\Bundle\BootstrapBundle\Serializer\SerializerKeys;
use WBW\Bundle\BootstrapBundle\Tests\AbstractTestCase;

/**
 * Serializer keys test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Tests\Serializer
 */
class SerializerKeysTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("dismissible", SerializerKeys::DISMISSIBLE);
        $this->assertEquals("prefix", SerializerKeys::PREFIX);
    }
}
