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

use WBW\Bundle\BootstrapBundle\Tests\Fixtures\Twig\Extension\Component\TestProgressBarTwigExtensionTrait;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Component\ProgressBarTwigExtension;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Progress bar Twig extension trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\Component
 */
class ProgressBarTwigExtensionTraitTest extends AbstractTestCase {

    /**
     * Tests setProgressBarTwigExtension()
     *
     * @return void
     */
    public function testSetProgressBarTwigExtension(): void {

        // Set a Progress bar Twig extension mock.
        $progressBarTwigExtension = new ProgressBarTwigExtension($this->twigEnvironment);

        $obj = new TestProgressBarTwigExtensionTrait();

        $obj->setProgressBarTwigExtension($progressBarTwigExtension);
        $this->assertSame($progressBarTwigExtension, $obj->getProgressBarTwigExtension());
    }
}
