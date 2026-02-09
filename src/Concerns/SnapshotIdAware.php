<?php

namespace Spatie\Snapshots\Concerns;

use PHPUnit\Framework\Attributes\Before;
use PHPUnit\Framework\TestCase;
use ReflectionClass;

/** @mixin TestCase */
trait SnapshotIdAware
{
    protected int $snapshotIncrementor = 0;

    /** @before */
    #[Before]
    public function setUpSnapshotIncrementor(): void
    {
        $this->snapshotIncrementor = 0;
    }

    /*
     * Determines the snapshot's id. By default, the test case's class and
     * method names are used.
     */
    protected function getSnapshotId(?string $id = null): string
    {
        if ($id !== null) {
            $suffix = 's-'.$id;
        } else {
            $this->snapshotIncrementor++;
            $suffix = $this->snapshotIncrementor;
        }

        return sprintf(
            '%s__%s__%s',
            (new ReflectionClass($this))->getShortName(),
            str_replace(' ', '_', str_replace('__pest_evaluable_', '', $this->nameWithDataSet())),
            $suffix
        );
    }
}
