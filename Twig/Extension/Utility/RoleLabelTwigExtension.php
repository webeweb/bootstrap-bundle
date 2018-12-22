<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Twig\Extension\Utility;

use Symfony\Component\Security\Core\Role\Role;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Translation\TranslatorInterface;
use Twig_Environment;
use Twig_SimpleFunction;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Component\LabelTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Component\LabelTwigExtensionTrait;
use WBW\Library\Core\Argument\StringHelper;

/**
 * Role label Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\Utility
 */
class RoleLabelTwigExtension extends AbstractUtilityTwigExtension {

    use LabelTwigExtensionTrait;

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.bootstrap.twig.extension.utility.role_label";

    /**
     * Constructor.
     *
     * @param Twig_Environment $twigEnvironment The Twig environment.
     * @param TranslatorInterface $translator The translator.
     * @param LabelTwigExtension $extension The label component Twig extension.
     */
    public function __construct(Twig_Environment $twigEnvironment, TranslatorInterface $translator, LabelTwigExtension $extension) {
        parent::__construct($twigEnvironment, $translator);
        $this->setLabelTwigExtension($extension);
    }

    /**
     * Apply the color.
     *
     * @param string $label The label.
     * @param string $content The content.
     * @param string $color The color.
     * @return string Returns the label with applied color.
     */
    private function applyColor($label, $content, $color) {
        $searches = ">" . $content;
        $replaces = " style=\"background-color:" . $color . ";\"" . $searches;
        return StringHelper::replace($label, [$searches], [$replaces]);
    }

    /**
     * Display a Bootstrap role label.
     *
     * @param UserInterface $user The user.
     * @param array $roleColors The role colors.
     * @param array $roleTrans The role translations.
     * @return string Returns the Bootstrap role label.
     */
    public function bootstrapRoleLabelFunction(UserInterface $user = null, array $roleColors = [], array $roleTrans = []) {

        // Check the user.
        if (null === $user) {
            return "";
        }

        // Initialize the ouptut.
        $output = [];

        // Handle each role.
        foreach ($user->getRoles() as $current) {

            // Get the role.
            $role = true === $current instanceof Role ? $current->getRole() : $current;

            // Initialize the translation.
            $trans = $role;
            if (true === array_key_exists($role, $roleTrans)) {
                $trans = $this->getTranslator()->trans($roleTrans[$role]);
            }

            // Initialize the label.
            $label = $this->getLabelTwigExtension()->bootstrapLabelDefaultFunction(["content" => $trans]);
            if (true === array_key_exists($role, $roleColors)) {
                $label = $this->applyColor($label, $trans, $roleColors[$role]);
            }

            // Add the label.
            $output[] = $label;
        }

        // Return the output.
        return implode(" ", $output);
    }

    /**
     * Get the Twig functions.
     *
     * @return array Returns the Twig functions.
     */
    public function getFunctions() {
        return [
            new Twig_SimpleFunction("bootstrapRoleLabel", [$this, "bootstrapRoleLabelFunction"], ["is_safe" => ["html"]]),
        ];
    }

}
