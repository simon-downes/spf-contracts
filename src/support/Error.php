<?php declare(strict_types=1);
/* 
 * This file is part of the spf-contracts package which is distributed under the MIT License.
 * See LICENSE.md or go to https://github.com/simon-downes/spf-contracts for full license details.
 */
namespace spf\contracts\support;

/**
 * Provides handy constants that can be used to indicate an error type.
 * These can then be used as keys to lookup translations for a given locale.
 */
class Error {
    
    const NONE      = false;
    const TEXT      = 'encoding';
    const INTEGER   = 'integer';
    const FLOAT     = 'float';
    const BOOLEAN   = 'boolean';
    const TIMESTAMP = 'timestamp';
    const DATETIME  = 'datetime';
    const DATE      = 'date';
    const YEAR      = 'year';
    const TIME      = 'time';
    const IP        = 'ip';
    const EMAIL     = 'email';
    const URL       = 'url';
    const JSON      = 'json';
    const REQUIRED  = 'required';
    const NULL      = 'null';
    const MIN       = 'min';
    const MAX       = 'max';
    const TOO_SHORT = 'too-short';
    const TOO_LONG  = 'too-long';
    const REGEX     = 'regex';
    const VALUE     = 'value';
    const EXISTS    = 'exists';

    /**
     * Return the correct error constant for a specified spf\contracts\support\Type.
     */
    public static function getTypeError( string $type ): string {

        $data = [
            Type::TEXT      => static::TEXT,
            Type::INTEGER   => static::INTEGER,
            Type::FLOAT     => static::FLOAT,
            Type::BOOLEAN   => static::BOOLEAN,
            Type::TIMESTAMP => static::TIMESTAMP,
            Type::DATETIME  => static::DATETIME,
            Type::DATE      => static::DATE,
            Type::TIME      => static::TIME,
            Type::YEAR      => static::YEAR,
            Type::IP        => static::IP,
            Type::EMAIL     => static::EMAIL,
            Type::URL       => static::URL,
            Type::JSON      => static::JSON,
            Type::OBJECT    => static::VALUE,
            Type::ENTITY    => static::VALUE,
        ];

        return $data[$type] ?? static::VALUE;

    }

    private function __construct() {}

}
