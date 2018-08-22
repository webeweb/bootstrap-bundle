<?php

/**
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
use Twig_SimpleFunction;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Component\LabelTwigExtension;
use WBW\Library\Core\Argument\StringHelper;

/**
 * Role label Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\Utility
 */
class RoleLabelTwigExtension extends AbstractUtilityTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.bootstrap.twig.extension.utility.rolelabel";

    /**
     * Extension.
     *
     * @var LabelTwigExtension
     */
    private $extension;

    /**
     * Constructor.
     *
     * @param TranslatorInterface $translator The translator.
     * @param LabelTwigExtension $extension The label component Twig extension.
     */
    public function __construct(TranslatorInterface $translator, LabelTwigExtension $extension) {
        parent::__construct($translator);
        $this->setExtension($extension);
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
            $label = $this->getExtension()->bootstrapLabelDefaultFunction(["content" => $trans]);
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

    /**
     * Get the extension.
     *
     * @return LabelTwigExtension Returns the extension.
     */
    public function getExtension() {
        return $this->extension;
    }

    /**
     * Set the extension.
     *
     * @param LabelTwigExtension $extension The extension.
     * @return RoleLabelHelperTwigExtension Returns this role label utility Twig extension.
     */
    protected function setExtension(LabelTwigExtension $extension) {
        $this->extension = $extension;
        return $this;
    }

}
