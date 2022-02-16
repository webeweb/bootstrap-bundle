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

use WBW\Bundle\BootstrapBundle\Tests\Fixtures\Twig\Extension\Component\TestAlertTwigExtensionTrait;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Component\AlertTwigExtension;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Alert Twig extension trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\Component
 */
class AlertTwigExtensionTraitTest extends AbstractTestCase {

    /**
     * Tests setAlertTwigExtension()
     *
     * @return void
     */
    public function testSetAlertTwigExtension(): void {

        // Set an Alert Twig extension mock.
        $alertTwigExtension = new AlertTwigExtension($this->twigEnvironment);

        $obj = new TestAlertTwigExtensionTrait();

        $obj->setAlertTwigExtension($alertTwigExtension);
        $this->assertSame($alertTwigExtension, $obj->getAlertTwigExtension());
    }
}
