<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Event;

use Symfony\Component\EventDispatcher\Event;

/**
 * Abstract Bootstrap event.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Event
 * @abstract
 */
abstract class AbstractBootstrapEvent extends Event {

    /**
     * Event name.
     *
     * @var string
     */
    private $eventName;

    /**
     * Constructor.
     *
     * @param string $eventName The event name.
     */
    protected function __construct($eventName) {
        $this->setEventName($eventName);
    }

    /**
     * Get the event name.
     *
     * @return string Returns the event name.
     */
    public function getEventName() {
        return $this->eventName;
    }

    /**
     * Set the event name.
     *
     * @param type $eventName The event name.
     * @return AbstractBootstrapEvent Returns this Bootstrap event.
     */
    protected function setEventName($eventName) {
        $this->eventName = $eventName;
        return $this;
    }

}
