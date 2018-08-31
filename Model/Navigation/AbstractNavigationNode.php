<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Model\Navigation;

use WBW\Library\Core\Model\Node\AbstractNode;

/**
 * Abstract navigation node.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Model\Navigation
 * @abstract
 */
abstract class AbstractNavigationNode extends AbstractNode implements NavigationInterface {

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
     * Matcher.
     *
     * @var string
     */
    private $matcher;

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
     * @param string $matcher The matcher.
     */
    protected function __construct($name, $icon = null, $route = self::NAVIGATION_HREF_DEFAULT, $matcher = self::NAVIGATION_MATCHER_URL) {
        parent::__construct($name);
        $this->setActive(false);
        $this->setEnable(false);
        $this->setIcon($icon);
        $this->setMatcher($matcher);
        $this->setRoute($route);
        $this->setTarget(null);
        $this->setVisible(true);
    }

    /**
     * Get the active.
     *
     * @return boolean Returns the active.
     */
    public function getActive() {
        return $this->active;
    }

    /**
     * Get the enable.
     *
     * @return boolean Returns the enable.
     */
    public function getEnable() {
        return $this->enable;
    }

    /**
     * Get the icon.
     *
     * @return string Returns the icon.
     */
    public function getIcon() {
        return $this->icon;
    }

    /**
     * Get the matcher.
     *
     * @return string Returns the matcher.
     */
    public function getMatcher() {
        return $this->matcher;
    }

    /**
     * Get the route.
     *
     * @return string Returns the route.
     */
    public function getRoute() {
        return $this->route;
    }

    /**
     * Get the target.
     *
     * @return string Returns the target.
     */
    public function getTarget() {
        return $this->target;
    }

    /**
     * Get the visible.
     *
     * @return boolean Returns the visible.
     */
    public function getVisible() {
        return $this->visible;
    }

    /**
     * Determines if the node is displayable.
     *
     * @return boolean Returns true in case of success, false otherwise.
     */
    public function isDisplayable() {
        $displayable = $this->enable && $this->visible;
        if (true === $displayable) {
            return true;
        }
        foreach ($this->getNodes() as $current) {
            if (false === ($current instanceof AbstractNavigationNode)) {
                continue;
            }
            if (true === $current->isDisplayable()) {
                return true;
            }
        }
        return $displayable;
    }

    /**
     * Set the active.
     *
     * @param bool $active Active ?
     * @return NavigationNode Returns the navigation node.
     */
    public function setActive($active) {
        $this->active = $active;
        return $this;
    }

    /**
     * Set the enable.
     *
     * @param bool $enable Enable ?.
     * @return NavigationNode Returns the navigation node.
     */
    public function setEnable($enable) {
        $this->enable = $enable;
        return $this;
    }

    /**
     * Set the icon.
     *
     * @param string $icon The icon.
     * @return NavigationNode Returns the navigation node.
     */
    public function setIcon($icon) {
        $this->icon = $icon;
        return $this;
    }

    /**
     * Set the mather.
     *
     * @param string $matcher The matcher.
     * @return NavigationNode Returns the navigation node.
     */
    public function setMatcher($matcher) {
        $this->matcher = $matcher;
        return $this;
    }

    /**
     * Set the route.
     *
     * @param string $route The route.
     * @return NavigationNode Returns the navigation node.
     */
    public function setRoute($route) {
        $this->route = $route;
        return $this;
    }

    /**
     * Set the target.
     *
     * @param string $target The target.
     * @return NavigationNode Returns the navigation node.
     */
    public function setTarget($target) {
        $this->target = $target;
        return $this;
    }

    /**
     * Set the visible.
     *
     * @param bool $visible Visible ?
     * @return NavigationNode Returns the navigation node.
     */
    protected function setVisible($visible) {
        $this->visible = $visible;
        return $this;
    }

}
