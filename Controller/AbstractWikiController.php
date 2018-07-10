<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Controller;

use Symfony\Component\Security\Core\User\User;
use Symfony\Component\Security\Core\User\UserInterface;
use WBW\Bundle\SyntaxHighlighterBundle\API\SyntaxHighlighterConfig;
use WBW\Bundle\SyntaxHighlighterBundle\API\SyntaxHighlighterDefaults;
use WBW\Bundle\SyntaxHighlighterBundle\Provider\SyntaxHighlighterStringsProvider;

/**
 * Abstract wiki controller.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Controller
 */
abstract class AbstractWikiController extends AbstractBootstrapController {

    /**
     * Get a user.
     *
     * @return UserInterface Returns the user.
     */
    protected function getSampleUser() {
        return new User("anonymous", "", ["ROLE_SUPER_ADMIN", "ROLE_ADMIN", "ROLE_USER"]);
    }

    /**
     * Get a user role colors.
     *
     * @return array Returns the user role colors.
     */
    protected function getSampleUserRoleColors() {
        return [
            "ROLE_SUPER_ADMIN" => "#F44336",
            "ROLE_ADMIN"       => "#E91E63",
            "ROLE_USER"        => "#9E9E9E",
        ];
    }

    /**
     * Get a user role translations.
     *
     * @return array Returns the user role translations.
     */
    protected function getSampleUserRoleTranslations() {
        return [
            "ROLE_SUPER_ADMIN" => "Super administrator",
            "ROLE_ADMIN"       => "Administrator",
            "ROLE_USER"        => "User",
        ];
    }

    /**
     * Get the Syntax Highlighter config.
     *
     * @return SyntaxHighlighterConfig Returns the SyntaxHighlighter config.
     */
    protected function getSyntaxHighlighterConfig() {

        // Get the SyntaxHighlighter strings provider.
        $provider = $this->get(SyntaxHighlighterStringsProvider::SERVICE_NAME);

        // Initialize the SyntaxHighlighter config.
        $config = new SyntaxHighlighterConfig();
        $config->setStrings($provider->getSyntaxHighlighterStrings());

        // Return the SyntaxHighlighter config.
        return $config;
    }

    /**
     * Get the Syntax Highlighter defaults.
     *
     * @return SyntaxHighlighterDefaults Returns the SyntaxHighlighter defaults.
     */
    protected function getSyntaxHighlighterDefaults() {

        // Initialize the SyntaxHighlighter defaults.
        $defaults = new SyntaxHighlighterDefaults();

        // Return the SyntaxHighlighter defaults.
        return $defaults;
    }

}
