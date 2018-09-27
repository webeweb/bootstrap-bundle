<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Exception;

use Symfony\Component\Security\Core\User\User;
use WBW\Bundle\BootstrapBundle\Exception\BadUserRoleException;
use WBW\Bundle\BootstrapBundle\Tests\AbstractFrameworkTestCase;

/**
 * Bad user role exception test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Exception
 * @final
 */
final class BadUserRoleExceptionTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $user     = new User("anonymous", "empty");
        $roles    = ["ROLE_ADMIN", "ROLE_USER"];
        $route    = "https://github.com/webeweb";
        $redirect = "https://github.com";

        $ex = new BadUserRoleException($user, $roles, $route, $redirect);

        $this->assertEquals("User \"anonymous\" is not allowed to access to \"https://github.com/webeweb\" with roles [ROLE_ADMIN,ROLE_USER]", $ex->getMessage());

        $this->assertSame($user, $ex->getUser());
        $this->assertEquals($roles, $ex->getRoles());
        $this->assertEquals($route, $ex->getRoute());
        $this->assertEquals($redirect, $ex->getRedirect());
    }

}
