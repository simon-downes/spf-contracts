<?php declare(strict_types=1);
/* 
 * This file is part of the spf-contracts package which is distributed under the MIT License.
 * See LICENSE.md or go to https://github.com/simon-downes/spf-contracts for full license details.
 */
namespace spf\contracts\exceptions;

use Throwable;

interface Handler {

    /**
     * Handle a throwable error or exception.
     */
    public function handle( Throwable $e );

}
