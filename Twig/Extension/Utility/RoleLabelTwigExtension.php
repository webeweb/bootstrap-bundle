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
use Twig\Environment;
use Twig\TwigFunction;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Component\LabelTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Component\LabelTwigExtensionTrait;
use WBW\Bundle\CoreBundle\Component\Translation\BaseTranslatorInterface;

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
    const SERVICE_NAME = "wbw.bootstrap.twig.extension.utility.role_label";

    /**
     * Constructor.
     *
     * @param Environment $twigEnvironment The Twig environment.
     * @param BaseTranslatorInterface $translator The translator.
     * @param LabelTwigExtension $extension The label component Twig extension.
     */
    public function __construct(Environment $twigEnvironment, $translator, LabelTwigExtension $extension) {
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
    private function applyColor(string $label, string $content, string $color): string {
        $searches = ">" . $content;
        $replaces = ' style="background-color:' . $color . ';"' . $searches;
        return str_replace([$searches], [$replaces], $label);
    }

    /**
     * Display a Bootstrap role label.
     *
     * @param UserInterface|null $user The user.
     * @param array $roleColors The role colors.
     * @param array $roleTrans The role translations.
     * @return string Returns the Bootstrap role label.
     */
    public function bootstrapRoleLabelFunction(?UserInterface $user, array $roleColors = [], array $roleTrans = []): string {

        if (null === $user) {
            return "";
        }

        $output = [];

        /** @var Role|string $current */
        foreach ($user->getRoles() as $current) {

            $role = true === $current instanceof Role ? $current->getRole() : $current;

            $trans = $role;
            if (true === array_key_exists($role, $roleTrans)) {
                $trans = $this->getTranslator()->trans($roleTrans[$role]);
            }

            $label = $this->getLabelTwigExtension()->bootstrapLabelDefaultFunction(["content" => $trans]);
            if (true === array_key_exists($role, $roleColors)) {
                $label = $this->applyColor($label, $trans, $roleColors[$role]);
            }

            $output[] = $label;
        }

        return implode(" ", $output);
    }

    /**
     * Get the Twig functions.
     *
     * @return TwigFunction[] Returns the Twig functions.
     */
    public function getFunctions(): array {
        return [
            new TwigFunction("bootstrapRoleLabel", [$this, "bootstrapRoleLabelFunction"], ["is_safe" => ["html"]]),
        ];
    }
}
