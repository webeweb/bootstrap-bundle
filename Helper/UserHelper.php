<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Helper;

use Symfony\Component\Security\Core\User\UserInterface;

/**
 * User helper.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Helper
 */
class UserHelper {

    /**
     * Determines if the connected user entity has role $roles.
     *
     * @param UserInterface|null $user The user.
     * @param string|array $roles The role or roles.
     * @param boolean $or OR ? If true, matches a role cause a break and the method returns true.
     * @return boolean Returns true in case of success, false otherwise.
     */
    public static function hasRoles($user, $roles, $or = true) {

        // Check the user.
        if (null === $user || false === ($user instanceof UserInterface)) {
            return false;
        }

        // Check the roles.
        if (false === is_array($roles)) {
            $roles = [$roles];
        }

        // Initialize the result.
        $result = 1 <= count($roles);

        // Handle each role.
        foreach ($roles as $role) {
            $buffer = in_array($role, $user->getRoles());
            if (true === $buffer && true === $or) {
                $result = $buffer;
                break;
            }
            $result &= $buffer;
        }

        // Return the result.
        return boolval($result);
    }

}
