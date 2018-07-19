<?php declare(strict_types=1);
/* 
 * This file is part of the spf-contracts package which is distributed under the MIT License.
 * See LICENSE.md or go to https://github.com/simon-downes/spf-contracts for full license details.
 */
namespace spf\contracts\support\collections;

/**
 * A collection of unique items.
 */
interface Set extends Collection {

    /**
     * Add a new item to the set.
     * @param mixed $item
     * @return boolean   true if item was added to the set, false if it already exists
     */
    public function add( $item );

    /**
     * Remove the specified item from the set.
     * @param  mixed $item
     * @return boolean   true if the item existed in the set.
     */
    public function remove( $item );

}
