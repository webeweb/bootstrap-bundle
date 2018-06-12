<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Model;

use PHPUnit_Framework_TestCase;
use WBW\Bundle\BootstrapBundle\Model\WikiPage;

/**
 * Wiki page model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Model
 * @final
 */
final class WikiPageTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj = new WikiPage("category", "package", "page", "title");

        $this->assertEquals("Bootstrap", $obj->getBootstrap());
        $this->assertEquals("category", $obj->getCategory());
        $this->assertEquals("package", $obj->getPackage());
        $this->assertEquals("page", $obj->getPage());
        $this->assertEquals("title", $obj->getTitle());
    }

}
