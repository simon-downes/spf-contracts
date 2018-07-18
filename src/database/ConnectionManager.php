<?php declare(strict_types=1);
/* 
 * This file is part of the spf-contracts package which is distributed under the MIT License.
 * See LICENSE.md or go to https://github.com/simon-downes/spf-contracts for full license details.
 */
namespace spf\contracts\support\database;

interface ConnectionManager {

	/**
	 * Add a new connection to the manager.
	 * If an instance of DSN is specified a suitable connection object will be created automatically.
	 * @param string $name
	 * @param DatabaseConnection|DSN $connection an instance of DatabaseConnection or DSN
	 */
	public function add( string $name, $connection ): DatabaseConnection;

	/**
	 * Remove a connection from the manager. This doesn't not necessarily disconnect the connection.
	 * @param  string $name
	 * @return $this
	 */
	public function remove( string $name ): ConnectionManager;

	/**
	 * Return the specified connection.
	 * @param  string $name
	 */
	public function get( string $name ): DatabaseConnection;

	/**
	 * Determine if the manager is aware of a connection with the specified name.
	 * @param  string  $name
	 */
	public function has( string $name ): bool;

	/**
	 * Return the default connection.
	 */
	public function getDefault(): DatabaseConnection;

	/**
	 * Specify the default connection.
	 * @param string $name name of the connection.
	 */
	public function setDefault( string $name ): void;

}
