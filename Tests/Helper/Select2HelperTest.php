<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Helper;

use Exception;
use WBW\Bundle\BootstrapBundle\Helper\Select2Helper;
use WBW\Bundle\BootstrapBundle\Navigation\NavigationNode;
use WBW\Bundle\BootstrapBundle\Tests\AbstractBootstrapFrameworkTestCase;
use WBW\Bundle\BootstrapBundle\Tests\Fixtures\Model\Select2Item;
use WBW\Library\Core\Exception\Argument\IllegalArgumentException;

/**
 * Select2 helper test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Helper\Model
 * @final
 */
final class Select2HelperTest extends AbstractBootstrapFrameworkTestCase {

    /**
     * Items.
     *
     * @var array
     */
    private $items;

    /**
     * {@inheritdoc}
     */
    protected function setUp() {
        parent::setUp();

        // Set a items array mock.
        $this->items = [];

        $this->items[] = new Select2Item("1", "item1");
        $this->items[] = new Select2Item("2", "item2");
        $this->items[] = new Select2Item("3", "item3");
    }

    /**
     * Tests the toResults() method.
     *
     * @retrurn void
     */
    public function testToResults() {

        $res = [
            [
                "id"   => "1",
                "text" => "item1",
            ],
            [
                "id"   => "2",
                "text" => "item2",
            ],
            [
                "id"   => "3",
                "text" => "item3",
            ],
        ];
        $this->assertEquals($res, Select2Helper::toResults($this->items));

        try {

            $this->items[] = new NavigationNode("id4");
            Select2Helper::toResults($this->items);
        } catch (Exception $ex) {

            $this->assertInstanceOf(IllegalArgumentException::class, $ex);
            $this->assertEquals("The item must implements Select2DataFormatInterface", $ex->getMessage());
        }
    }

}
