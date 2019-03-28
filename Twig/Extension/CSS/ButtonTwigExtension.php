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
use WBW\Bundle\BootstrapBundle\Button\ButtonFactory;
use WBW\Library\Core\Argument\ArrayHelper;
use WBW\Library\Core\Argument\StringHelper;

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
    const SERVICE_NAME = "webeweb.bootstrap.twig.extension.css.button";

    /**
     * Displays a Bootstrap button "Danger".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap button "Danger".
     */
    public function bootstrapButtonDangerFunction(array $args = []) {
        return $this->bootstrapButton(ButtonFactory::parseDangerButton($args), ArrayHelper::get($args, "icon"));
    }

    /**
     * Displays a Bootstrap button "Default".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap button "Default".
     */
    public function bootstrapButtonDefaultFunction(array $args = []) {
        return $this->bootstrapButton(ButtonFactory::parseDefaultButton($args), ArrayHelper::get($args, "icon"));
    }

    /**
     * Displays a Bootstrap button "Info".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap button "Info".
     */
    public function bootstrapButtonInfoFunction(array $args = []) {
        return $this->bootstrapButton(ButtonFactory::parseInfoButton($args), ArrayHelper::get($args, "icon"));
    }

    /**
     * Transforms a Bootstrap button into an anchor.
     *
     * @param string $button The button.
     * @param string $href The href attribute.
     * @param string $target The target attribute.
     * @return string Returns the Bootstrap button transformed into an anchor.
     */
    public function bootstrapButtonLinkFilter($button, $href = self::DEFAULT_HREF, $target = null) {

        if (1 === preg_match("/disabled=\"disabled\"/", $button)) {

            $searches = [" disabled=\"disabled\"", "class=\""];
            $replaces = ["", "class=\"disabled "];

            $button = StringHelper::replace($button, $searches, $replaces);
        }

        $searches = ["<button", "type=\"button\"", "</button>"];
        $replaces = ["<a", "href=\"" . $href . "\"" . (null !== $target ? " target=\"" . $target . "\"" : ""), "</a>"];

        return StringHelper::replace($button, $searches, $replaces);
    }

    /**
     * Displays a Bootstrap button "Link".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap button "Link".
     */
    public function bootstrapButtonLinkFunction(array $args = []) {
        return $this->bootstrapButton(ButtonFactory::parseLinkButton($args), ArrayHelper::get($args, "icon"));
    }

    /**
     * Displays a Bootstrap button "Primary".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap button "Primary".
     */
    public function bootstrapButtonPrimaryFunction(array $args = []) {
        return $this->bootstrapButton(ButtonFactory::parsePrimaryButton($args), ArrayHelper::get($args, "icon"));
    }

    /**
     * Transforms a Bootstrap button into a submit button.
     *
     * @param string $bootstrapButton The bootstrap button.
     * @return string Returns the Bootstrap button transformed into a submit button.
     */
    public function bootstrapButtonSubmitFilter($bootstrapButton) {
        return StringHelper::replace($bootstrapButton, ["type=\"button\""], ["type=\"submit\""]);
    }

    /**
     * Displays a Bootstrap button "Success".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap button "Success".
     */
    public function bootstrapButtonSuccessFunction(array $args = []) {
        return $this->bootstrapButton(ButtonFactory::parseSuccessButton($args), ArrayHelper::get($args, "icon"));
    }

    /**
     * Displays a Bootstrap button "Warning".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap button "Warning".
     */
    public function bootstrapButtonWarningFunction(array $args = []) {
        return $this->bootstrapButton(ButtonFactory::parseWarningButton($args), ArrayHelper::get($args, "icon"));
    }

    /**
     * Get the Twig filters.
     *
     * @return TwigFilter[] Returns the Twig filters.
     */
    public function getFilters() {
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
    public function getFunctions() {
        return [
            new TwigFunction("bootstrapButtonDanger", [$this, "bootstrapButtonDangerFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("bsButtonDanger", [$this, "bootstrapButtonDangerFunction"], ["is_safe" => ["html"]]),

            new TwigFunction("bootstrapButtonDefault", [$this, "bootstrapButtonDefaultFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("bsButtonDefault", [$this, "bootstrapButtonDefaultFunction"], ["is_safe" => ["html"]]),

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
    }
}
