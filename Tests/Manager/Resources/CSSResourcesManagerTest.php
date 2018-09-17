<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Manager\Resources;

use WBW\Bundle\BootstrapBundle\Manager\Resources\CSSResourcesManager;
use WBW\Bundle\BootstrapBundle\Provider\Resources\CSSResourcesProvider;
use WBW\Bundle\BootstrapBundle\Tests\AbstractBootstrapFrameworkTestCase;

/**
 * CSS resources manager test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Manager\Resources
 * @final
 */
final class CSSResourcesManagerTest extends AbstractBootstrapFrameworkTestCase {

    /**
     * Directory.
     *
     * @var string
     */
    private $directory;

    /**
     * Provider.
     *
     * @var CSSResourcesProvider
     */
    private $provider;

    /**
     * {@inheritdoc}
     */
    protected function setUp() {
        parent::setUp();

        // Set a Directory mock.
        $this->directory = getcwd() . "/Tests/Fixtures/App/web";

        // Set a CSS resources provider mock.
        $this->provider = new CSSResourcesProvider();
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new CSSResourcesManager($this->directory);

        $this->assertEquals($this->directory, $obj->getDirectory());
        $this->assertEquals(".css", $obj->getExtension());
        $this->assertRegExp("/^(.*)\/resources.css$/", $obj->getFilename());
        $this->assertEquals([], $obj->getProviders());
    }

    /**
     * Tests the addProvider() method.
     *
     * @return void
     */
    public function testAddProvider() {

        $obj = new CSSResourcesManager($this->directory);

        $this->assertSame($obj, $obj->addProvider($this->provider));
        $this->assertCount(1, $obj->getProviders());
        $this->assertSame($this->provider, $obj->getProviders()[0]);
    }

    /**
     * Tests the exists() method.
     *
     * @return void
     */
    public function testExists() {

        $obj = new CSSResourcesManager($this->directory);

        $this->assertFalse($obj->exists());
    }

    /**
     * Tests the registerProvider() method.
     *
     * @return void
     */
    public function testRegisterProvider() {

        $obj = new CSSResourcesManager($this->directory);

        $this->assertSame($obj, $obj->registerProvider($this->provider));
        $this->assertCount(1, $obj->getProviders());
        $this->assertSame($this->provider, $obj->getProviders()[0]);
    }

}
