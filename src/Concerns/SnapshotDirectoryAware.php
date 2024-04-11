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
        $testClass = TestSuite::getInstance()->test::class;
        $testFile = str_replace('\\', DIRECTORY_SEPARATOR, explode('P\\', $testClass, limit: 2)[1]);

        return implode(DIRECTORY_SEPARATOR, [
            TestSuite::getInstance()->rootPath,
            dirname($testFile),
            '__snapshots__',
            basename($testFile),
        ]);
    }
}
