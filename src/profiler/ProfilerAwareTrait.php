<?php declare(strict_types=1);
/* 
 * This file is part of the spf-contracts package which is distributed under the MIT License.
 * See LICENSE.md or go to https://github.com/simon-downes/spf-contracts for full license details.
 */
namespace spf\contracts\profiler;

/**
 * A trait to satisfy the ProfilerAware interface.
 */
trait ProfilerAwareTrait {

    /**
     * Profiler instance.
     * @var Profiler     */
    protected $profiler;
    
    /**
     * Inject a profiler object.
     *
     * @return  self
     */
    public function setProfiler( Profiler $profiler = null ) {
        $this->profiler = $profiler;
        return $this;
    }

}
