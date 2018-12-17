<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\CSS;

use WBW\Bundle\BootstrapBundle\Tests\Fixtures\Twig\Extension\CSS\TestCodeTwigExtensionTrait;
use WBW\Bundle\BootstrapBundle\Twig\Extension\CSS\CodeTwigExtension;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Code Twig extension trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\CSS
 */
class CodeTwigExtensionTraitTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new TestCodeTwigExtensionTrait();

        $this->assertNull($obj->getCodeTwigExtension());
    }

    /**
     * Tests the setCodeTwigExtension() method.
     *
     * @return void
     */
    public function testSetCodeTwigExtension() {

        // Set a Code Twig extension mock.
        $codeTwigExtension = new CodeTwigExtension($this->twigEnvironment);

        $obj = new TestCodeTwigExtensionTrait();

        $obj->setCodeTwigExtension($codeTwigExtension);
        $this->assertSame($codeTwigExtension, $obj->getCodeTwigExtension());
    }

}
