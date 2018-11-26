<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Twig\Extension\CSS;

use Twig_Environment;
use Twig_SimpleFunction;
use WBW\Library\Core\Argument\ArrayHelper;

/**
 * Typography Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\CSS
 * @link https://getbootstrap.com/docs/3.3/css/#type
 */
class TypographyTwigExtension extends AbstractTypographyTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.bootstrap.twig.extension.css.typography";

    /**
     * Constructor.
     *
     * @param Twig_Environment $twigEnvironment The Twig environment.
     */
    public function __construct(Twig_Environment $twigEnvironment) {
        parent::__construct($twigEnvironment);
    }

    /**
     * Displays a Bootstrap bold text.
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap bold text.
     */
    public function bootstrapBoldFunction(array $args = []) {
        return $this->bootstrapBold(ArrayHelper::get($args, "content"));
    }

    /**
     * Displays a Bootstrap deleted text.
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap deleted text.
     */
    public function bootstrapDeletedFunction(array $args = []) {
        return $this->bootstrapDeleted(ArrayHelper::get($args, "content"));
    }

    /**
     * Displays a Boostrap heading 1.
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap heading 1.
     */
    public function bootstrapHeading1Function(array $args = []) {
        return $this->bootstrapHeading(1, ArrayHelper::get($args, "content"), ArrayHelper::get($args, "description"), ArrayHelper::get($args, "class"));
    }

    /**
     * Displays a Bootstrap heading 2.
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap heading 2.
     */
    public function bootstrapHeading2Function(array $args = []) {
        return $this->bootstrapHeading(2, ArrayHelper::get($args, "content"), ArrayHelper::get($args, "description"), ArrayHelper::get($args, "class"));
    }

    /**
     * Displays a Bootstrap heading 3.
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap heading 3.
     */
    public function bootstrapHeading3Function(array $args = []) {
        return $this->bootstrapHeading(3, ArrayHelper::get($args, "content"), ArrayHelper::get($args, "description"), ArrayHelper::get($args, "class"));
    }

    /**
     * Displays a Bootstrap heading 4.
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap heading 4.
     */
    public function bootstrapHeading4Function(array $args = []) {
        return $this->bootstrapHeading(4, ArrayHelper::get($args, "content"), ArrayHelper::get($args, "description"), ArrayHelper::get($args, "class"));
    }

    /**
     * Displays a  heading 5.
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap heading 5.
     */
    public function bootstrapHeading5Function(array $args = []) {
        return $this->bootstrapHeading(5, ArrayHelper::get($args, "content"), ArrayHelper::get($args, "description"), ArrayHelper::get($args, "class"));
    }

    /**
     * Displays a Bootstrap heading 6.
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap heading 6.
     */
    public function bootstrapHeading6Function(array $args = []) {
        return $this->bootstrapHeading(6, ArrayHelper::get($args, "content"), ArrayHelper::get($args, "description"), ArrayHelper::get($args, "class"));
    }

    /**
     * Displays a Bootstrap inserted text.
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap inserted text.
     */
    public function bootstrapInsertedFunction(array $args = []) {
        return $this->bootstrapInserted(ArrayHelper::get($args, "content"));
    }

    /**
     * Displays a Bootstrap marked text.
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap marked text.
     */
    public function bootstrapMarkedFunction(array $args = []) {
        return $this->bootstrapMarked(ArrayHelper::get($args, "content"));
    }

    /**
     * Displays a Bootstrap italic text.
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap italic text.
     */
    public function bootstrapItalicFunction(array $args = []) {
        return $this->bootstrapItalic(ArrayHelper::get($args, "content"));
    }

    /**
     * Displays a Bootstrap small text.
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap small text.
     */
    public function bootstrapSmallFunction(array $args = []) {
        return $this->bootstrapSmall(ArrayHelper::get($args, "content"));
    }

    /**
     * Displays a Bootstrap strike through text.
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap strike through text.
     */
    public function bootstrapStrikeThroughFunction(array $args = []) {
        return $this->bootstrapStrikeThrough(ArrayHelper::get($args, "content"));
    }

    /**
     * Displays a Bootstrap underlined text.
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap underlined text.
     */
    public function bootstrapUnderlinedFunction(array $args = []) {
        return $this->bootstrapUnderlined(ArrayHelper::get($args, "content"));
    }

    /**
     * Get the Twig functions.
     *
     * @return array Returns the Twig functions.
     */
    public function getFunctions() {
        return [
            new Twig_SimpleFunction("bootstrapBold", [$this, "bootstrapBoldFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("bootstrapDeleted", [$this, "bootstrapDeletedFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("bootstrapHeading1", [$this, "bootstrapHeading1Function"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("bootstrapHeading2", [$this, "bootstrapHeading2Function"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("bootstrapHeading3", [$this, "bootstrapHeading3Function"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("bootstrapHeading4", [$this, "bootstrapHeading4Function"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("bootstrapHeading5", [$this, "bootstrapHeading5Function"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("bootstrapHeading6", [$this, "bootstrapHeading6Function"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("bootstrapInserted", [$this, "bootstrapInsertedFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("bootstrapItalic", [$this, "bootstrapItalicFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("bootstrapMarked", [$this, "bootstrapMarkedFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("bootstrapSmall", [$this, "bootstrapSmallFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("bootstrapStrikethrough", [$this, "bootstrapStrikethroughFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("bootstrapUnderlined", [$this, "bootstrapUnderlinedFunction"], ["is_safe" => ["html"]]),
        ];
    }

}
