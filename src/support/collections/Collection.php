<?php declare(strict_types=1);
/* 
 * This file is part of the spf-contracts package which is distributed under the MIT License.
 * See LICENSE.md or go to https://github.com/simon-downes/spf-contracts for full license details.
 */
namespace spf\contracts\support\collections;

use Countable, Traversable;

use spf\contracts\support\Arrayable;

/**
 * Base collection interface.
 * Should not generally be implemented directly, instead use one of the more
 * specific child interfaces, such as Set or Dictionary.
 */
interface Collection extends Arrayable, Countable, Traversable {

    /**
     * Determines if the collection is empty.
     */
    public function isEmpty(): bool;

    /**
     * Remove all the items from the collection.
     * @return self
     */
    public function clear(): Collection;

    /**
     * Determines if the specified item is in the collection.
     * @param  mixed $item
     */
    public function contains( $item ): bool;

}
