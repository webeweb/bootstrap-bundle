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

use Symfony\Component\Translation\TranslatorInterface;
use Twig_Environment;
use WBW\Bundle\CoreBundle\Service\TranslatorTrait;
use WBW\Bundle\CoreBundle\Twig\Extension\AbstractTwigExtension;

/**
 * Abstract utility Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\Utility
 * @abstract
 */
abstract class AbstractUtilityTwigExtension extends AbstractTwigExtension {

    use TranslatorTrait;

    /**
     * Constructor.
     *
     * @param Twig_Environment $twigEnvironment The Twig environment.
     * @param TranslatorInterface $translator The translator.
     */
    protected function __construct(Twig_Environment $twigEnvironment, TranslatorInterface $translator) {
        parent::__construct($twigEnvironment);
        $this->setTranslator($translator);
    }

}
