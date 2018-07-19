<?php declare(strict_types=1);
/* 
 * This file is part of the spf-contracts package which is distributed under the MIT License.
 * See LICENSE.md or go to https://github.com/simon-downes/spf-contracts for full license details.
 */
namespace spf\contracts\support\database;

interface InsertQuery extends Query {

    public function ignore( bool $ignore = true ): InsertQuery;

    public function into( string $table ): InsertQuery;

    public function cols( array $columns ): InsertQuery;

    public function item( array $item ): InsertQuery;

    public function execute( bool $return_insert_id = true );

}
