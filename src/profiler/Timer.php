<?php declare(strict_types=1);
/* 
 * This file is part of the spf-contracts package which is distributed under the MIT License.
 * See LICENSE.md or go to https://github.com/simon-downes/spf-contracts for full license details.
 */
namespace spf\contracts\profiler;

/**
 * Simple timer implementation.
 */
interface Timer {

    /**
     * Start the timer.
     * @return self
     */
    public function start( float $time = null ): Timer;

    /**
     * Stop the timer and add the duration to the total elapsed time.
     * @return self
     */
    public function stop(): Timer;

    /**
     * Determine if the timer is currently running.
     */
    public function isRunning(): bool;

    /**
     * Return the elapsed time from last start.
     */
    public function getElapsed( bool $total = false ): float;

    /**
     * Return the total elapsed time.
     */
    public function getTotalElapsed(): float;

}
