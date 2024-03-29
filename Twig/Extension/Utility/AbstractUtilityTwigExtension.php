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

use Symfony\Contracts\Translation\TranslatorInterface;
use Twig\Environment;
use WBW\Bundle\BootstrapBundle\Twig\Extension\AbstractTwigExtension;
use WBW\Bundle\CoreBundle\Translation\TranslatorTrait;

/**
 * Abstract utility Twig extension.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\Utility
 * @abstract
 */
abstract class AbstractUtilityTwigExtension extends AbstractTwigExtension {

    use TranslatorTrait;

    /**
     * Constructor.
     *
     * @param Environment $twigEnvironment The Twig environment.
     * @param TranslatorInterface $translator The translator.
     */
    public function __construct(Environment $twigEnvironment, TranslatorInterface $translator) {
        parent::__construct($twigEnvironment);

        $this->setTranslator($translator);
    }
}
