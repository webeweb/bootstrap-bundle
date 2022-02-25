<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\Component;

use WBW\Bundle\BootstrapBundle\Tests\Fixtures\Twig\Extension\Component\TestGlyphiconTwigExtensionTrait;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Component\GlyphiconTwigExtension;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Glyphicon Twig extension trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\Component
 */
class GlyphiconTwigExtensionTraitTest extends AbstractTestCase {

    /**
     * Tests setGlyphiconTwigExtension()
     *
     * @return void
     */
    public function testSetGlyphiconTwigExtension(): void {

        // Set a Glyphicon Twig extension mock.
        $glyphiconTwigExtension = new GlyphiconTwigExtension($this->twigEnvironment);

        $obj = new TestGlyphiconTwigExtensionTrait();

        $obj->setGlyphiconTwigExtension($glyphiconTwigExtension);
        $this->assertSame($glyphiconTwigExtension, $obj->getGlyphiconTwigExtension());
    }
}
