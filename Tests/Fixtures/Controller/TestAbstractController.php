<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Fixtures\Controller;

use WBW\Bundle\BootstrapBundle\Controller\AbstractController;

/**
 * Test abstract controller.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Fixtures\Controller
 */
class TestAbstractController extends AbstractController {

    /**
     * {@inheritdoc}
     */
    public function notifyDanger($content) {
        return parent::notifyDanger($content);
    }

    /**
     * {@inheritdoc}
     */
    public function notifyInfo($content) {
        return parent::notifyInfo($content);
    }

    /**
     * {@inheritdoc}
     */
    public function notifySuccess($content) {
        return parent::notifySuccess($content);
    }

    /**
     * {@inheritdoc}
     */
    public function notifyWarning($content) {
        return parent::notifyWarning($content);
    }

}
