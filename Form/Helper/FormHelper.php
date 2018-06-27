<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Form\Helper;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Persistence\ObjectManager;

/**
 * Form helper.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Form\Helper
 */
class FormHelper {

    /**
     * On post handle request with collection.
     *
     * @param Collection $oldCollection The old colection.
     * @param Collection $newCollection The new collection.
     * @param ObjectManager $manager The entities manager.
     * @return void
     */
    public static function onPostHandleRequestWithCollection(Collection $oldCollection, Collection $newCollection, ObjectManager $manager) {
        foreach ($oldCollection as $current) {
            if (true === $newCollection->contains($current)) {
                continue;
            }
            $manager->remove($current);
        }
    }

    /**
     * On pre handle request with collection.
     *
     * @param Collection $collection The collection.
     * @return Collection Returns the cloned collection.
     */
    public static function onPreHandleRequestWithCollection(Collection $collection) {
        $output = new ArrayCollection();
        foreach ($collection as $current) {
            $output->add($current);
        }
        return $output;
    }

}
