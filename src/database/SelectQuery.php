<?php declare(strict_types=1);
/*
 * This file is part of the spf-contracts package which is distributed under the MIT License.
 * See LICENSE.md or go to https://github.com/simon-downes/spf-contracts for full license details.
 */
namespace spf\contracts\support\database;

interface SelectQuery extends Query {

	public function cols( array $columns ): SelectQuery;

	public function distinct( bool $distinct = true ): SelectQuery;

	public function from( string $table ): SelectQuery;

	public function groupBy( array $columns ): SelectQuery;

	public function having( string $having ): SelectQuery;

}
