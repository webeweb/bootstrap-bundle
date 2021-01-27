<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Twig\Extension;

use Twig\Environment;
use WBW\Bundle\CoreBundle\Twig\Extension\AbstractTwigExtension as BaseTwigExtension;

/**
 * Abstract Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension
 * @abstract
 */
abstract class AbstractTwigExtension extends BaseTwigExtension {

    /**
     * Version.
     *
     * @var int|null
     */
    private $version;

    /**
     * Constructor.
     *
     * @param Environment $twigEnvironment The Twig environment.
     */
    public function __construct(Environment $twigEnvironment) {
        parent::__construct($twigEnvironment);
    }

    /**
     * Get the version.
     *
     * @return int|null Returns the version.
     */
    public function getVersion(): ?int {
        return $this->version;
    }

    /**
     * Set the version.
     *
     * @param int|null $version The version.
     * @return AbstractTwigExtension Returns this Twig extension.
     */
    public function setVersion(?int $version): AbstractTwigExtension {
        $this->version = $version;
        return $this;
    }
}
