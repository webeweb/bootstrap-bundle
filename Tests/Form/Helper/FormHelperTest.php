<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Form\Helper;

use Doctrine\Common\Collections\ArrayCollection;
use WBW\Bundle\BootstrapBundle\Form\Helper\FormHelper;
use WBW\Bundle\BootstrapBundle\Tests\Cases\AbstractBootstrapFrameworkTestCase;

/**
 * Form helper test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Form\Helper
 * @final
 */
final class FormHelperTest extends AbstractBootstrapFrameworkTestCase {

    /**
     * Collection.
     *
     * @var Collection
     */
    private $collection;

    /**
     * {@inheritdoc}
     */
    protected function setUp() {
        parent::setUp();

        // Set a Collection mock.
        $this->collection = new ArrayCollection();
        for ($i = 0; $i < 10; ++$i) {
            $this->collection->add("element" . $i);
        }
    }

    /**
     * Tests the onPreHandleRequestWithCollection() method.
     *
     * @return void
     */
    public function testOnPreHandleRequestWithCollection() {

        $res = FormHelper::onPreHandleRequestWithCollection($this->collection);

        $this->assertEquals(10, $res->count());
        $this->assertNotSame($res, $this->collection);
        for ($i = 0; $i < 10; ++$i) {
            $this->assertEquals("element" . $i, $res->get($i));
        }
    }

    /**
     * Tests the onPostHandleRequestWithCollection() method.
     *
     * @return void
     * @depends testOnPreHandleRequestWithCollection
     */
    public function testOnPostRequestWithCollection() {

        $oldCollection = $this->collection;
        $newCollection = FormHelper::onPreHandleRequestWithCollection($oldCollection);
        $newCollection->removeElement("element1");

        FormHelper::onPostHandleRequestWithCollection($oldCollection, $newCollection, $this->objectManager);
    }

}
