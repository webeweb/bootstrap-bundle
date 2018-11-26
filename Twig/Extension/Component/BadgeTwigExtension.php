<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Twig\Extension\Component;

use Twig_Environment;
use Twig_SimpleFunction;
use WBW\Library\Core\Argument\ArrayHelper;

/**
 * Badge component Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\Component
 * @link https://getbootstrap.com/docs/3.3/components/#badges
 */
class BadgeTwigExtension extends AbstractBadgeTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.bootstrap.twig.extension.component.badge";

    /**
     * Constructor.
     *
     * @param Twig_Environment $twigEnvironment The Twig environment.
     */
    public function __construct(Twig_Environment $twigEnvironment) {
        parent::__construct($twigEnvironment);
    }

    /**
     * Displays a Bootstrap badge.
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap badge.
     */
    public function bootstrapBadgeFunction(array $args = []) {
        return $this->bootstrapBadge(ArrayHelper::get($args, "content"));
    }

    /**
     * Get the Twig functions.
     *
     * @return Twig_SimpleFunction[] Returns the Twig functions.
     */
    public function getFunctions() {
        return [
            new Twig_SimpleFunction("bootstrapBadge", [$this, "bootstrapBadgeFunction"], ["is_safe" => ["html"]]),
        ];
    }

}
