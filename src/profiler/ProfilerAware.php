<?php declare(strict_types=1);
/* 
 * This file is part of the spf-contracts package which is distributed under the MIT License.
 * See LICENSE.md or go to https://github.com/simon-downes/spf-contracts for full license details.
 */
namespace spf\contracts\support\profiler;

/**
 * Interface to indicate a class supports profiling.
 */
interface ProfilerAware {

    /**
     * Inject a profiler object.
     */
    public function setProfiler( Profiler $profiler = null );

}
