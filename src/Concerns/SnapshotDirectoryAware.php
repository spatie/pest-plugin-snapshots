<?php

namespace Spatie\Snapshots\Concerns;

use Pest\TestSuite;

trait SnapshotDirectoryAware
{
    /*
     * Determines the directory where snapshots are stored. By default a
     * `__snapshots__` directory is created at the same level as the test
     * class.
     */
    protected function getSnapshotDirectory(): string
    {
        return implode(DIRECTORY_SEPARATOR, [
            TestSuite::getInstance()->rootPath,
            'tests',
            '__snapshots__',
        ]);
    }
}
