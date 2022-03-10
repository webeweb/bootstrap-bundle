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

use Twig\Environment;
use Twig\TwigFunction;
use WBW\Bundle\BootstrapBundle\Twig\Extension\CSS\ButtonTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\CSS\ButtonTwigExtensionTrait;
use WBW\Bundle\CoreBundle\Translation\BaseTranslatorInterface;
use WBW\Library\Types\Helper\ArrayHelper;

/**
 * Table button Twig extension.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\Utility
 */
class TableButtonTwigExtension extends AbstractUtilityTwigExtension {

    use ButtonTwigExtensionTrait;

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "wbw.bootstrap.twig.extension.utility.table_button";

    /**
     * Constructor.
     *
     * @param Environment $twigEnvironment The Twig environment.
     * @param BaseTranslatorInterface $translator The translator.
     * @param ButtonTwigExtension $extension The button Twig extension.
     */
    public function __construct(Environment $twigEnvironment, $translator, ButtonTwigExtension $extension) {
        parent::__construct($twigEnvironment, $translator);

        $this->setButtonTwigExtension($extension);
    }

    /**
     * Displays a Bootstrap row button "default".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap form button "default".
     */
    public function bootstrapRowButtonDefaultFunction(array $args = []): string {

        $editButton   = $this->bootstrapRowButtonEditFunction(["href" => ArrayHelper::get($args, "edit_href")]);
        $deleteButton = $this->bootstrapRowButtonDeleteFunction(["href" => ArrayHelper::get($args, "delete_href")]);

        return implode(" ", [$editButton, $deleteButton]);
    }

    /**
     * Displays a Bootstrap row button "delete".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap row button "delete".
     */
    public function bootstrapRowButtonDeleteFunction(array $args = []): string {

        $txt = $this->getTranslator()->trans("label.delete", [], "WBWBootstrapBundle");
        $but = $this->getButtonTwigExtension()->bootstrapButtonDangerFunction([
            "title" => $txt,
            "icon"  => "g:trash",
        ]);

        return $this->getButtonTwigExtension()->bootstrapButtonLinkFilter($but, ArrayHelper::get($args, "href", self::DEFAULT_HREF));
    }

    /**
     * Displays a Bootstrap row button "edit".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap row button "edit".
     */
    public function bootstrapRowButtonEditFunction(array $args = []): string {

        $txt = $this->getTranslator()->trans("label.edit", [], "WBWBootstrapBundle");
        $but = $this->getButtonTwigExtension()->bootstrapButtonDefaultFunction([
            "title" => $txt,
            "icon"  => "g:pencil",
        ]);

        return $this->getButtonTwigExtension()->bootstrapButtonLinkFilter($but, ArrayHelper::get($args, "href", self::DEFAULT_HREF));
    }

    /**
     * Get the Twig functions.
     *
     * @return TwigFunction[] Returns the Twig functions.
     */
    public function getFunctions(): array {
        return [
            new TwigFunction("bootstrapRowButtonDefault", [$this, "bootstrapRowButtonDefaultFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("bootstrapRowButtonDelete", [$this, "bootstrapRowButtonDeleteFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("bootstrapRowButtonEdit", [$this, "bootstrapRowButtonEditFunction"], ["is_safe" => ["html"]]),
        ];
    }
}
