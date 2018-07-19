<?php declare(strict_types=1);
/* 
 * This file is part of the spf-contracts package which is distributed under the MIT License.
 * See LICENSE.md or go to https://github.com/simon-downes/spf-contracts for full license details.
 */
namespace spf\contracts\support\profiler;

/**
 * Simple profiler class for recording code execution time, memory usage and database queries.
 */
interface Profiler {

    /**
     * Reset the specified timer.
     * @param float|null  $time   start time (microtime)
     * @param int|null    $memory start memory usage
     */
    public function reset( float $time = null, int $memory = null );

    /**
     * (Re)Start the specified timer.
     * @param  string     $timer the name of the timer
     * @param  boolean    $reset whether to reset the timer
     * @param  float|null $time  the start time of the timer (microtime)
     */
    public function start( string $timer, bool $reset = false, float $time = null ): Profiler;

    /**
     * Stop the specified timer.
     * If no timer is specified then all timers will be stopped.
     * @param  string  $timer the name of the timer
     */
    public function stop( string $timer = '' ): Profiler;

    /**
     * Determine if the specified timer is currently running.
     * @param  string  $timer
     */
    public function isRunning( string $timer = '' ): bool;

    /**
     * Return the elapsed time of the specified timer.
     * @param  string $timer
     */
    public function getElapsed( string $timer = '' ): float;

    /**
     * Return the total elapsed time of the specified timer.
     * @param  string $timer
     */
    public function getTotalElapsed( string $timer = '' ): float;

    /**
     * Mark the current point in time with a label.
     * @param  string $name unique name used to label the mark.
     */
    public function mark( string $name = '' ): Mark;

    /**
     * Record a database query.
     * @param  string $query      the query string used
     * @param  array $parameters  parameters passed into the query string
     * @param  float $duration    time taken to execute the query (microtime)
     */
    public function query( string $query, array $parameters, float $duration ): Profiler;

    /**
     * Add/remove a key/value pair to the profiler.
     * @param  string $key
     * @param  mixed $value if null, the key is removed
     */
    public function meta( string $key, $value ): Profiler;

    /**
     * Return the query information that have been recorded.
     */
    public function getQueries(): array;

    /**
     * Return all the data recorded by the profiler.
     */
    public function getData(): array;

    /**
     * Return HTML required to show the profiler.
     */
    public function getHTML(): string;

}
