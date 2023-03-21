<?php

namespace Spatie\Snapshots\Concerns;

use PHPUnit\Framework\TestCase;
use ReflectionClass;

/** @mixin TestCase */
trait SnapshotIdAware
{
    /*
     * Determines the snapshot's id. By default, the test case's class and
     * method names are used.
     */
    protected function getSnapshotId(): string
    {
        return sprintf(
            '%s__%s__%s',
            (new ReflectionClass($this))->getShortName(),
            str_replace(' ', '_', str_replace('__pest_evaluable_', '', $this->nameWithDataSet())),
            $this->snapshotIncrementor
        );
    }
}
