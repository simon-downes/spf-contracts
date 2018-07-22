<?php declare(strict_types=1);
/* 
 * This file is part of the spf-contracts package which is distributed under the MIT License.
 * See LICENSE.md or go to https://github.com/simon-downes/spf-contracts for full license details.
 */
namespace spf\contract\database;

use PDO, PDOStatement;

interface DatabaseConnection {

    /**
     * Open the database connection.
     */
    public function connect(): void;

    /**
     * Close the database connection.
     */
    public function disconnect(): void;

    /**
     * Determines if the database connection is currently open.
     */
    public function isConnected(): bool;

    /**
     * Return a new SelectQuery instance;
     */
    public function select(): SelectQuery;

    /**
     * Return a new InsertQuery instance;
     */
    public function insert(): InsertQuery;

    /**
     * Return a new UpdateQuery instance;
     */
    public function update(): UpdateQuery;

    /**
     * Return a new DeleteQuery instance;
     */
    public function delete(): DeleteQuery;

    /**
     * Create a prepared statement.
     * @param  PDOStatement|string  $statement  an existing PDOStatement object or a SQL string.
     */
    public function prepare( $statement ): PDOStatement;

    /**
     * Perform a query against the database.
     * Prepared statements are cached so each query will only be prepared once per the object's lifetime.
     * Supports positional (?) and named (:name) parameter formats, see the PDO docs for more info.
     * @param  PDOStatement|string $statement   an existing PDOStatement object or a SQL string.
     * @param  array $params   an array of parameters to pass into the query.
     */
    public function query( $statement, array $params = [] ): PDOStatement;

    /**
     * Perform a non-select query and return the number of affected rows.
     * @param  PDOStatement|string $statement   an existing PDOStatement object or a SQL string.
     * @param  array $params   an array of parameters to pass into the query.
     */
    public function execute( $statement, array $params = [] ): int;

    /**
     * Perform a select query and return all matching rows.
     * @param  PDOStatement|string $statement   an existing PDOStatement object or a SQL string.
     * @param  array   $params    an array of parameters to pass into the query.
     */
    public function getAll( $statement, array $params = [] ): array;

    /**
     * Perform a select query and return all matching rows.
     * The first column in the resultset is used as the key for each record.
     * @param  PDOStatement|string $statement   an existing PDOStatement object or a SQL string.
     * @param  array   $params    an array of parameters to pass into the query.
     */
    public function getAssoc( $statement, array $params = [] ): array;

    /**
     * Perform a select query and return all matching rows as a multi-dimensional associative array.
     * The first column in the resultset is used as the key for each record, with each record being an array of rows
     * for that key.
     * @param  PDOStatement|string $statement   an existing PDOStatement object or a SQL string.
     * @param  array   $params    an array of parameters to pass into the query.
     */
    public function getAssocMulti( $statement, array $params = [] ): array;

    /**
     * Perform a select query and return the first matching row.
     * @param  PDOStatement|string $statement   an existing PDOStatement object or a SQL string.
     * @param  array   $params    an array of parameters to pass into the query.
     */
    public function getRow( $statement, array $params = [] ): array;

    /**
     * Perform a select query and return all the values of the first column in an array.
     * @param  PDOStatement|string $statement   an existing PDOStatement object or a SQL string.
     * @param  array $params   an array of parameters to pass into the query.
     */
    public function getCol( $statement, array $params = [] ): array;

    /**
     * Perform a select query and return the value of the first column of the first row.
     * @param  PDOStatement|string $statement   an existing PDOStatement object or a SQL string.
     * @param  array   $params    an array of parameters to pass into the query.
     */
    public function getOne( $statement, array $params = [] );

    /**
     * Begins a database transaction.
     */
    public function begin(): bool;

    /**
     * Commits the current transaction.
     */
    public function commit(): bool;

    /**
     * Discards the current transaction.
     */
    public function rollback(): bool;

    /**
     * Determines if there is an active transaction.
     */
    public function inTransaction(): bool;

    /**
     * Returns the ID of the last inserted row or sequence value.
     * If a sequence name was not specified for the name parameter, returns a string representing the row ID of the last row that was inserted into the database.
     * If a sequence name was specified for the name parameter, returns a string representing the last value retrieved from the specified sequence object. 
     */
    public function insertId( string $name = '' ): string;

    /**
     * Quote a value so it can be embedded in a query.
     * This is only required where values are being directly embedded in the SQL string,
     * values passed as parameters to a query will be escaped automatically.
     *
     * @param   mixed     $value   the value to quote.
     * @param   integer   $type    one of the PDO::PARAM_* constants indicating the datatype of $value.
     */
    public function quote( $value, int $type = PDO::PARAM_STR ): string;

    /**
     * Quote an identifier value so it can be embedded in a query.
     */
    public function quoteIdentifier( string $name ): string;

}
