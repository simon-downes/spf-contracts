<?php declare(strict_types=1);
/* 
 * This file is part of the spf-contracts package which is distributed under the MIT License.
 * See LICENSE.md or go to https://github.com/simon-downes/spf-contracts for full license details.
 */
namespace spf\contracts\support\collections;

/**
 * A collection of items accessed by a unique key.
 */
interface Dictionary extends Collection {

    /**
     * Determines if the specified item is in the dictionary.
     * @param  mixed $key
     */
    public function has( $key ): bool;

    /** Return the value assigned to the specified key.
     * 
     * @param string key
     * @param mixed  default   value returned if key doesn't exist
     * @return mixed
     */
    public function get( $key, $default = null );

    /**
     * Assign a value to the specified key.
     * @param mixed $item
     * @return mixed   the existing item assigned to key, or null if key doesn't exist
     */
    public function set( $key, $item );

    /**
     * Remove the specified item from the dictionary.
     * @param  mixed $key
     * @return mixed   the item associated with key, or null if key doesn't exist
     */
    public function remove( $key );

    /**
     * Return the keys contained in the dictionary.
     */
    public function keys(): array;

}
