<?php declare(strict_types=1);
/* 
 * This file is part of the spf-contracts package which is distributed under the MIT License.
 * See LICENSE.md or go to https://github.com/simon-downes/spf-contracts for full license details.
 */
namespace spf\contracts\support;

/**
 * Provides handy constants that can be used to indicate a type for some data.
 * e.g. datatypes of form fields or model properties
 */
class Type {
	
	// numeric types
	const INTEGER    = 'integer';
	const FLOAT      = 'float';
	const BOOLEAN    = 'boolean';

	// temporal types
	const TIMESTAMP  = 'timestamp';
	const DATETIME   = 'datetime';
	const DATE       = 'date';
	const TIME       = 'time';
	const YEAR       = 'year';

	// text types
	const TEXT       = 'text';
	const SLUG       = 'slug';
	const IP         = 'ip';
	const EMAIL      = 'email';
	const URL        = 'url';

	// binary types
	const BINARY     = 'binary';

	// miscellaneous types
	const ENUM       = 'enum';
	const SET        = 'set';
	const JSON       = 'json';
	const CUSTOM     = 'custom';
	const OBJECT     = 'object';
	const ENTITY     = 'entity';
	const COLLECTION = 'collection';

	private function __construct() {}

}
