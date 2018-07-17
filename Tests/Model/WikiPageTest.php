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

use WBW\Bundle\BootstrapBundle\Model\WikiPage;
use WBW\Bundle\BootstrapBundle\Tests\Cases\AbstractBootstrapFrameworkTestCase;

/**
 * Wiki page model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Model
 * @final
 */
final class WikiPageTest extends AbstractBootstrapFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new WikiPage("category", "package", "page", "title");

        $this->assertEquals("Bootstrap", $obj->getBundle());
        $this->assertEquals("category", $obj->getCategory());
        $this->assertEquals("package", $obj->getPackage());
        $this->assertEquals("page", $obj->getPage());
        $this->assertEquals("title", $obj->getTitle());
    }

}
