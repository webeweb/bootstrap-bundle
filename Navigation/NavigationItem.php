<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Navigation;

use WBW\Library\Core\Argument\ArrayHelper;
use WBW\Library\Core\Model\Node\AbstractNode;

/**
 * Navigation item.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Navigation
 * @deprecated
 */
class NavigationItem extends AbstractNode implements NavigationInterface {

    /**
     * Href.
     *
     * @var string
     */
    private $href;

    /**
     * Icon.
     *
     * @var string
     */
    private $icon;

    /**
     * Constructor.
     *
     * @param string $id The id.
     * @param string $icon The icon.
     * @param string $href The href.
     */
    public function __construct($id, $icon = null, $href = self::NAVIGATION_HREF_DEFAULT) {
        parent::__construct($id);
        $this->icon = $icon;
        $this->href = $href;
    }

    /**
     * Get the href.
     *
     * @return string Returns the href.
     */
    public function getHref() {
        return $this->href;
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
     * Set the href.
     *
     * @param string $href The href.
     * @return NavigationItem Returns the navigation item.
     */
    public function setHref($href) {
        $this->href = $href;
        return $this;
    }

    /**
     * Set the icon.
     *
     * @param string $icon The icon.
     * @return NavigationItem Returns the navigation item.
     */
    public function setIcon($icon) {
        $this->icon = $icon;
        return $this;
    }

    /**
     * Convert into an array representing this instance.
     *
     * @return array Returns an array representing this instance.
     */
    public function toArray() {

        // Initialize the output.
        $output = [];

        ArrayHelper::set($output, "href", $this->href, [null]);
        ArrayHelper::set($output, "icon", $this->icon, [null]);
        ArrayHelper::set($output, "span", $this->getId(), [null]);

        // Check the nodes.
        if (0 < $this->size()) {
            $output["subitems"] = [];
            foreach ($this->getNodes() as $current) {
                if (false === ($current instanceof NavigationItem)) {
                    continue;
                }
                $output["subitems"][] = $current->toArray();
            }
        }

        // Return the output.
        return $output;
    }

}
