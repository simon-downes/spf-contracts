<?php declare(strict_types=1);
/* 
 * This file is part of the spf-contracts package which is distributed under the MIT License.
 * See LICENSE.md or go to https://github.com/simon-downes/spf-contracts for full license details.
 */
namespace spf\contracts\database;

interface Query {

    public function innerJoin( string $table, array $on ): Query;

    public function leftJoin( string $table, array $on ): Query;

    public function where( string $column, string $operator, $value = null ): Query;

    public function orderBy( string $column, bool $ascending = true ): Query;

    public function offset( int $offset ): Query;

    public function limit( int $limit ): Query;

    public function __toString(): string;

}
