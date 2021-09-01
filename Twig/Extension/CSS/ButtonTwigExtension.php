<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Twig\Extension\CSS;

use Twig\TwigFilter;
use Twig\TwigFunction;
use WBW\Bundle\BootstrapBundle\Asset\Button\ButtonFactory;
use WBW\Library\Types\Helper\ArrayHelper;
use WBW\Library\Types\Helper\StringHelper;

/**
 * Button Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\CSS
 * @link https://getbootstrap.com/docs/3.3/css/#buttons
 */
class ButtonTwigExtension extends AbstractButtonTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "wbw.bootstrap.twig.extension.css.button";

    /**
     * Displays a Bootstrap button "danger".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap button "danger".
     */
    public function bootstrapButtonDangerFunction(array $args = []): string {
        return $this->bootstrapButton(ButtonFactory::parseDangerButton($args), ArrayHelper::get($args, "icon"));
    }

    /**
     * Displays a Bootstrap button "dark".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap button "dark".
     */
    public function bootstrapButtonDarkFunction(array $args = []): string {
        return $this->bootstrapButton(ButtonFactory::parseDarkButton($args), ArrayHelper::get($args, "icon"));
    }

    /**
     * Displays a Bootstrap button "default".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap button "default".
     */
    public function bootstrapButtonDefaultFunction(array $args = []): string {
        return $this->bootstrapButton(ButtonFactory::parseDefaultButton($args), ArrayHelper::get($args, "icon"));
    }

    /**
     * Displays a Bootstrap button "info".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap button "info".
     */
    public function bootstrapButtonInfoFunction(array $args = []): string {
        return $this->bootstrapButton(ButtonFactory::parseInfoButton($args), ArrayHelper::get($args, "icon"));
    }

    /**
     * Displays a Bootstrap button "light".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap button "light".
     */
    public function bootstrapButtonLightFunction(array $args = []): string {
        return $this->bootstrapButton(ButtonFactory::parseLightButton($args), ArrayHelper::get($args, "icon"));
    }

    /**
     * Transforms a Bootstrap button into an anchor.
     *
     * @param string $button The button.
     * @param string $href The href attribute.
     * @param string|null $target The target attribute.
     * @return string Returns the Bootstrap button transformed into an anchor.
     */
    public function bootstrapButtonLinkFilter(string $button, string $href = self::DEFAULT_HREF, string $target = null): string {

        if (1 === preg_match('/disabled="disabled"/', $button)) {

            $searches = [' disabled="disabled"', 'class="'];
            $replaces = ["", 'class="disabled '];

            $button = str_replace($searches, $replaces, $button);
        }

        $searches = ["<button", "</button>", 'type="button"'];
        $replaces = ["<a", "</a>", StringHelper::parseArray(["href" => $href, "target" => $target])];

        return str_replace($searches, $replaces, $button);
    }

    /**
     * Displays a Bootstrap button "link".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap button "link".
     */
    public function bootstrapButtonLinkFunction(array $args = []): string {
        return $this->bootstrapButton(ButtonFactory::parseLinkButton($args), ArrayHelper::get($args, "icon"));
    }

    /**
     * Displays a Bootstrap button "primary".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap button "primary".
     */
    public function bootstrapButtonPrimaryFunction(array $args = []): string {
        return $this->bootstrapButton(ButtonFactory::parsePrimaryButton($args), ArrayHelper::get($args, "icon"));
    }

    /**
     * Displays a Bootstrap button "secondary".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap button "secondary".
     */
    public function bootstrapButtonSecondaryFunction(array $args = []): string {
        return $this->bootstrapButton(ButtonFactory::parseSecondaryButton($args), ArrayHelper::get($args, "icon"));
    }

    /**
     * Transforms a Bootstrap button into a submit button.
     *
     * @param string $button The button.
     * @return string Returns the Bootstrap button transformed into a submit button.
     */
    public function bootstrapButtonSubmitFilter(string $button): string {
        return str_replace(['type="button"'], ['type="submit"'], $button);
    }

    /**
     * Displays a Bootstrap button "success".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap button "success".
     */
    public function bootstrapButtonSuccessFunction(array $args = []): string {
        return $this->bootstrapButton(ButtonFactory::parseSuccessButton($args), ArrayHelper::get($args, "icon"));
    }

    /**
     * Displays a Bootstrap button "warning".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap button "warning".
     */
    public function bootstrapButtonWarningFunction(array $args = []): string {
        return $this->bootstrapButton(ButtonFactory::parseWarningButton($args), ArrayHelper::get($args, "icon"));
    }

    /**
     * Get the Twig filters.
     *
     * @return TwigFilter[] Returns the Twig filters.
     */
    public function getFilters(): array {
        return [
            new TwigFilter("bootstrapButtonLink", [$this, "bootstrapButtonLinkFilter"], ["is_safe" => ["html"]]),
            new TwigFilter("bsButtonLink", [$this, "bootstrapButtonLinkFilter"], ["is_safe" => ["html"]]),

            new TwigFilter("bootstrapButtonSubmit", [$this, "bootstrapButtonSubmitFilter"], ["is_safe" => ["html"]]),
            new TwigFilter("bsButtonSubmit", [$this, "bootstrapButtonSubmitFilter"], ["is_safe" => ["html"]]),
        ];
    }

    /**
     * Get the Twig functions.
     *
     * @return TwigFunction[] Returns the Twig functions.
     */
    public function getFunctions(): array {

        $functions3 = $this->getFunctions3();
        if (3 === $this->getVersion()) {
            return $functions3;
        }

        $functions4 = $this->getFunctions4();

        return array_merge($functions3, $functions4);
    }

    /**
     * Get the Twig functions.
     *
     * @return TwigFunction[] Returns the Twig functions.
     */
    protected function getFunctions3(): array {

        $functions = [
            new TwigFunction("bootstrapButtonDanger", [$this, "bootstrapButtonDangerFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("bsButtonDanger", [$this, "bootstrapButtonDangerFunction"], ["is_safe" => ["html"]]),

            new TwigFunction("bootstrapButtonInfo", [$this, "bootstrapButtonInfoFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("bsButtonInfo", [$this, "bootstrapButtonInfoFunction"], ["is_safe" => ["html"]]),

            new TwigFunction("bootstrapButtonLink", [$this, "bootstrapButtonLinkFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("bsButtonLink", [$this, "bootstrapButtonLinkFunction"], ["is_safe" => ["html"]]),

            new TwigFunction("bootstrapButtonPrimary", [$this, "bootstrapButtonPrimaryFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("bsButtonPrimary", [$this, "bootstrapButtonPrimaryFunction"], ["is_safe" => ["html"]]),

            new TwigFunction("bootstrapButtonSuccess", [$this, "bootstrapButtonSuccessFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("bsButtonSuccess", [$this, "bootstrapButtonSuccessFunction"], ["is_safe" => ["html"]]),

            new TwigFunction("bootstrapButtonWarning", [$this, "bootstrapButtonWarningFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("bsButtonWarning", [$this, "bootstrapButtonWarningFunction"], ["is_safe" => ["html"]]),
        ];

        if (3 === $this->getVersion()) {

            $functions3 = [
                new TwigFunction("bootstrapButtonDefault", [$this, "bootstrapButtonDefaultFunction"], ["is_safe" => ["html"]]),
                new TwigFunction("bsButtonDefault", [$this, "bootstrapButtonDefaultFunction"], ["is_safe" => ["html"]]),
            ];

            array_splice($functions, 2, 0, $functions3);
        }

        return $functions;
    }

    /**
     * Get the Twig functions.
     *
     * @return TwigFunction[] Returns the Twig functions.
     */
    protected function getFunctions4(): array {
        return [
            new TwigFunction("bootstrapButtonDark", [$this, "bootstrapButtonDarkFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("bsButtonDark", [$this, "bootstrapButtonDarkFunction"], ["is_safe" => ["html"]]),

            new TwigFunction("bootstrapButtonLight", [$this, "bootstrapButtonLightFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("bsButtonLight", [$this, "bootstrapButtonLightFunction"], ["is_safe" => ["html"]]),

            new TwigFunction("bootstrapButtonSecondary", [$this, "bootstrapButtonSecondaryFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("bsButtonSecondary", [$this, "bootstrapButtonSecondaryFunction"], ["is_safe" => ["html"]]),
        ];
    }
}
