<?php declare(strict_types=1);
/* 
 * This file is part of the spf-contracts package which is distributed under the MIT License.
 * See LICENSE.md or go to https://github.com/simon-downes/spf-contracts for full license details.
 */
namespace spf\contracts\support\database;

interface UpdateQuery extends Query {

    public function table( string $table ): UpdateQuery;

    public function set( array $data, bool $replace = false ): UpdateQuery;

    public function execute(): int;

}
