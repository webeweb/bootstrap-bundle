<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Manager;

use Twig_Environment;
use WBW\Bundle\BootstrapBundle\Provider\ThemeProviderInterface;
use WBW\Library\Core\Argument\ObjectHelper;

/**
 * Abstract theme manager.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Manager
 * @abstract
 */
abstract class AbstractThemeManager extends AbstractManager {

    /**
     * Index.
     *
     * @var array
     */
    private $index;

    /**
     * Twig service.
     *
     * @var Twig_Environment
     */
    private $twig;

    /**
     * Constructor.
     *
     * @param Twig_Environment $twig The Twig service.
     */
    public function __construct(Twig_Environment $twig) {
        parent::__construct();
        $this->setIndex($this->initIndex());
        $this->setTwig($twig);
    }

    /**
     * Add the global.
     *
     * @return void
     */
    public function addGlobal() {
        foreach ($this->getIndex() as $k => $v) {
            if (null === $v) {
                continue;
            }
            $this->getTwig()->addGlobal(str_replace("Interface", "", $k), $this->getProviders()[$v]);
        }
    }

    /**
     * Get the index.
     *
     * @return array Returns the index.
     */
    protected function getIndex() {
        return $this->index;
    }

    /**
     * Get a provider.
     *
     * @param string $provider The provider class name.
     * @return ThemeProviderInterface Returns the theme provider in case of success, null otherwise.
     */
    protected function getProvider($provider) {
        $k = ObjectHelper::getShortName($provider);
        $v = $this->getIndex()[$k];
        if (null === $v) {
            return null;
        }
        return $this->getProviders()[$v];
    }

    /**
     * Get the Twig.
     *
     * @return Twig_Environment Returns the Twig.
     */
    public function getTwig() {
        return $this->twig;
    }

    /**
     * Initialize the index.
     *
     * @return array Returns the initialized index.
     */
    abstract protected function initIndex();

    /**
     * Set the index.
     *
     * @param array $index The index.
     * @return ManagerInterface Returns this manager.
     */
    protected function setIndex(array $index) {
        $this->index = $index;
        return $this;
    }

    /**
     * Set a provider.
     *
     * @param mixed $provider The provider class name.
     * @param ThemeProviderInterface $object The theme provider.
     * @return ManagerInterface Returns this manager.
     */
    protected function setProvider($provider, ThemeProviderInterface $object) {
        $k = ObjectHelper::getShortName($provider);
        $v = $this->getIndex()[$k];
        if (null !== $v) {
            $this->getProviders()[$v] = $object;
            return;
        }
        $this->index[$k] = count($this->getProviders());
        return $this->registerProvider($object);
    }

    /**
     * Set the Twig.
     *
     * @param Twig_Environment $twig The Twig.
     * @return ManagerInterface Returns this manager.
     */
    protected function setTwig(Twig_Environment $twig) {
        $this->twig = $twig;
        return $this;
    }

}
