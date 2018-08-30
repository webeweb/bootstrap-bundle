<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Fixtures\Model\Select2;

use WBW\Bundle\BootstrapBundle\Model\Select2\Select2DataFormatInterface;
use WBW\Library\Core\Model\Node\AbstractNode;

/**
 * Select2 item model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Fixtures\Model\Select2;
 */
final class Select2Item extends AbstractNode implements Select2DataFormatInterface {

    /**
     * Name.
     *
     * @var string
     */
    private $name;

    /**
     * Constructor.
     *
     * @param string $id The id.
     * @param string $name The name.
     */
    public function __construct($id, $name) {
        parent::__construct($id);
        $this->setName($name);
    }

    /**
     * Get the name.
     *
     * @return string Returns the name.
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Get a Select2 data format "Id".
     *
     * @return mixed Returns the Select2 data format "Id".
     */
    public function getSelect2DataFormatId() {
        return $this->getId();
    }

    /**
     * Get a Select2 data format "Text".
     *
     * @return string Returns the Select2 data format "Text".
     */
    public function getSelect2DataFormatText() {
        return $this->getName();
    }

    /**
     * Set the name.
     *
     * @param string $name The name.
     * @return Select2Item Returns this Select2 item.
     */
    public function setName($name) {
        $this->name = $name;
        return $this;
    }

}
