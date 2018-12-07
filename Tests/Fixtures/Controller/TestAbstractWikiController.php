<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Fixtures\Controller;

use WBW\Bundle\BootstrapBundle\Controller\AbstractWikiController;

/**
 * Test abstract wiki controller.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Fixtures\Controller
 */
class TestAbstractWikiController extends AbstractWikiController {

    /**
     * {@inheritdoc}
     */
    public function getSampleUser() {
        return parent::getSampleUser();
    }

    /**
     * {@inheritdoc}
     */
    public function getSampleUserRoleColors() {
        return parent::getSampleUserRoleColors();
    }

    /**
     * {@inheritdoc}
     */
    public function getSampleUserRoleTranslations() {
        return parent::getSampleUserRoleTranslations();
    }

    /**
     * {@inheritdoc}
     */
    public function getSyntaxHighlighterConfig() {
        return parent::getSyntaxHighlighterConfig();
    }

    /**
     * {@inheritdoc}
     */
    public function getSyntaxHighlighterDefaults() {
        return parent::getSyntaxHighlighterDefaults();
    }

}
