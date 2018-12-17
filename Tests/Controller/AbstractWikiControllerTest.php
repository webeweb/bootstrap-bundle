<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Controller;

use Symfony\Component\Security\Core\User\UserInterface;
use WBW\Bundle\BootstrapBundle\Tests\AbstractTestCase;
use WBW\Bundle\BootstrapBundle\Tests\Fixtures\Controller\TestAbstractWikiController;
use WBW\Bundle\SyntaxHighlighterBundle\API\SyntaxHighlighterConfig;
use WBW\Bundle\SyntaxHighlighterBundle\API\SyntaxHighlighterDefaults;
use WBW\Bundle\SyntaxHighlighterBundle\API\SyntaxHighlighterStrings;
use WBW\Bundle\SyntaxHighlighterBundle\Provider\SyntaxHighlighterStringsProvider;

/**
 * Abstract wiki controller test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Controller
 */
class AbstractWikiControllerTest extends AbstractTestCase {

    /**
     * Tests the getSampleUser() method.
     *
     * @return void
     */
    public function testGetSampleUser() {

        $obj = new TestAbstractWikiController();
        $obj->setContainer($this->containerBuilder);

        $res = $obj->getSampleUser();
        $this->assertInstanceOf(UserInterface::class, $res);

        $this->assertEquals("anonymous", $res->getUsername());
        $this->assertEquals("", $res->getPassword());
        $this->assertEquals(["ROLE_SUPER_ADMIN", "ROLE_ADMIN", "ROLE_USER"], $res->getRoles());
    }

    /**
     * Tests the getSampleUserRoleColors() method.
     *
     * @return void
     */
    public function testGetSampleUserRoleColors() {

        $obj = new TestAbstractWikiController();
        $obj->setContainer($this->containerBuilder);

        $res = [
            "ROLE_SUPER_ADMIN" => "#F44336",
            "ROLE_ADMIN"       => "#E91E63",
            "ROLE_USER"        => "#9E9E9E",
        ];
        $this->assertEquals($res, $obj->getSampleUserRoleColors());
    }

    /**
     * Tests the getSampleUserRoleTranslations() method.
     *
     * @return void
     */
    public function testGetSampleUserRoleTranslations() {

        $obj = new TestAbstractWikiController();
        $obj->setContainer($this->containerBuilder);

        $res = [
            "ROLE_SUPER_ADMIN" => "Super administrator",
            "ROLE_ADMIN"       => "Administrator",
            "ROLE_USER"        => "User",
        ];
        $this->assertEquals($res, $obj->getSampleUserRoleTranslations());
    }

    /**
     * Tests the getSyntaxHighlighterConfig() method.
     *
     * @return void
     */
    public function testGetSyntaxHighlighterConfig() {

        // Set a SyntaxHighlighter strings provider mock.
        $syntaxHighlighterStringsProvider = new SyntaxHighlighterStringsProvider($this->translator);

        // Register the SyntaxHighlighter strings provider mock.
        $this->containerBuilder->set(SyntaxHighlighterStringsProvider::SERVICE_NAME, $syntaxHighlighterStringsProvider);

        $obj = new TestAbstractWikiController();
        $obj->setContainer($this->containerBuilder);

        $res = $obj->getSyntaxHighlighterConfig();
        $this->assertInstanceOf(SyntaxHighlighterConfig::class, $res);

        $this->assertNotNull($res->getStrings());
        $this->assertInstanceOf(SyntaxHighlighterStrings::class, $res->getStrings());
    }

    /**
     * Tests the getSyntaxHighlighterDefaults() method.
     *
     * @return void
     */
    public function testGetSyntaxHighlighterDefaults() {

        $obj = new TestAbstractWikiController();
        $obj->setContainer($this->containerBuilder);

        $res = $obj->getSyntaxHighlighterDefaults();
        $this->assertInstanceOf(SyntaxHighlighterDefaults::class, $res);
    }

}
