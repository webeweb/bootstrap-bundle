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

use WBW\Bundle\BootstrapBundle\Tests\Fixtures\Twig\Extension\CSS\TestTypographyTwigExtensionTrait;
use WBW\Bundle\BootstrapBundle\Twig\Extension\CSS\TypographyTwigExtension;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Typography Twig extension trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\CSS
 */
class TypographyTwigExtensionTraitTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new TestTypographyTwigExtensionTrait();

        $this->assertNull($obj->getTypographyTwigExtension());
    }

    /**
     * Tests the setTypographyTwigExtension() method.
     *
     * @return void
     */
    public function testSetTypographyTwigExtension() {

        // Set a Typography Twig extension mock.
        $typographyTwigExtension = new TypographyTwigExtension($this->twigEnvironment);

        $obj = new TestTypographyTwigExtensionTrait();

        $obj->setTypographyTwigExtension($typographyTwigExtension);
        $this->assertSame($typographyTwigExtension, $obj->getTypographyTwigExtension());
    }
}
