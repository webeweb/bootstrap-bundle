<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Navigation\Node;

use WBW\Library\Core\Node\AbstractNode;

/**
 * Abstract navigation node.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Navigation\Node
 * @abstract
 */
abstract class AbstractNavigationNode extends AbstractNode {

    /**
     * Active ?
     *
     * @var boolean
     */
    private $active;

    /**
     * Enable ?
     *
     * @var boolean
     */
    private $enable;

    /**
     * Icon.
     *
     * @var string
     */
    private $icon;

    /**
     * Route.
     *
     * @var string
     */
    private $route;

    /**
     * Target.
     *
     * @var string
     */
    private $target;

    /**
     * URL.
     *
     * @var string
     */
    private $url;

    /**
     * Visible ?
     *
     * @var boolean
     */
    private $visible;

    /**
     * Constructor.
     *
     * @param string $name The name.
     * @param string $icon The icon.
     * @param string $route The route.
     */
    protected function __construct($name, $icon = null, $route = null) {
        parent::__construct($name);
        $this->active  = false;
        $this->enable  = false;
        $this->icon    = $icon;
        $this->route   = $route;
        $this->target  = null;
        $this->url     = null;
        $this->visible = true;
    }

    /**
     * Get the active.
     *
     * @return boolean Returns the active.
     */
    final public function getActive() {
        return $this->active;
    }

    /**
     * Get the enable.
     *
     * @return boolean Returns the enable.
     */
    final public function getEnable() {
        return $this->enable;
    }

    /**
     * Get the icon.
     *
     * @return string Returns the icon.
     */
    final public function getIcon() {
        return $this->icon;
    }

    /**
     * Get the route.
     *
     * @return string Returns the route.
     */
    final public function getRoute() {
        return $this->route;
    }

    /**
     * Get the target.
     *
     * @return string Returns the target.
     */
    final public function getTarget() {
        return $this->target;
    }

    /**
     * Get the URL.
     *
     * @return string Returns the URL.
     */
    final public function getUrl() {
        return $this->url;
    }

    /**
     * Get the visible.
     *
     * @return boolean Returns the visible.
     */
    final public function getVisible() {
        return $this->visible;
    }

    /**
     * Determines if the node is displayable.
     *
     * @return boolean Returns true in case of success, false otherwise.
     */
    final public function isDisplayable() {
        $displayable = $this->enable && $this->visible;
        if (false === $displayable) {
            foreach ($this->getNodes() as $current) {
                if (false === ($current instanceof AbstractNavigationNode)) {
                    continue;
                }
                $displayable = $current->isDisplayable();
                if (true === $displayable) {
                    break;
                }
            }
        }
        return $displayable;
    }

    /**
     * Set the active.
     *
     * @param boolean $active Active ?
     * @return NavigationNode Returns the navigation node.
     */
    final public function setActive($active) {
        $this->active = $active;
        return $this;
    }

    /**
     * Set the enable.
     *
     * @param boolean $enable Enable ?.
     * @return NavigationNode Returns the navigation node.
     */
    final public function setEnable($enable) {
        $this->enable = $enable;
        return $this;
    }

    /**
     * Set the icon.
     *
     * @param string $icon The icon.
     * @return NavigationNode Returns the navigation node.
     */
    final public function setIcon($icon) {
        $this->icon = $icon;
        return $this;
    }

    /**
     * Set the route.
     *
     * @param string $route The route.
     * @return NavigationNode Returns the navigation node.
     */
    final public function setRoute($route) {
        $this->route = $route;
        return $this;
    }

    /**
     * Set the target.
     *
     * @param string $target The target.
     * @return NavigationNode Returns the navigation node.
     */
    final public function setTarget($target) {
        $this->target = $target;
        return $this;
    }

    /**
     * Set the URL.
     *
     * @param string $url The URL.
     * @return NavigationNode Returns the navigation node.
     */
    final public function setUrl($url) {
        $this->url = $url;
        return $this;
    }

    /**
     * Set the visible.
     *
     * @param boolean $visible Visible ?
     * @return NavigationNode Returns the navigation node.
     */
    final protected function setVisible($visible) {
        $this->visible = $visible;
        return $this;
    }

}
