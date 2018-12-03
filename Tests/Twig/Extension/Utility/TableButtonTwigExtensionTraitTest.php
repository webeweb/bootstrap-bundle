<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\Utility;

use WBW\Bundle\BootstrapBundle\Tests\Fixtures\Twig\Extension\Utility\TestTableButtonTwigExtensionTrait;
use WBW\Bundle\BootstrapBundle\Twig\Extension\CSS\ButtonTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Utility\TableButtonTwigExtension;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Table button Twig extension trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\Utility
 */
class TableButtonTwigExtensionTraitTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new TestTableButtonTwigExtensionTrait();

        $this->assertNull($obj->getTableButtonTwigExtension());
    }

    /**
     * Tests the setTableButtonTwigExtension() method.
     *
     * @return void
     */
    public function testSetTableButtonTwigExtension() {

        // Set a Button Twig extension mock.
        $buttonTwigExtension = new ButtonTwigExtension($this->twigEnvironment);

        // Set a Table button Twig extension mock.
        $tableButtonTwigExtension = new TableButtonTwigExtension($this->twigEnvironment, $this->translator, $buttonTwigExtension);

        $obj = new TestTableButtonTwigExtensionTrait();

        $obj->setTableButtonTwigExtension($tableButtonTwigExtension);
        $this->assertSame($tableButtonTwigExtension, $obj->getTableButtonTwigExtension());
    }

}
