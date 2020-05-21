<?php

use Spatie\Snapshots\Driver;
use Spatie\Snapshots\MatchesSnapshots;

Pest\Plugin::uses(MatchesSnapshots::class);

if (! function_exists('assertMatchesSnapshot')) {

    /**
     * Assert that the given value matches the stored snapshot.
     *
     * @param mixed $actual
     */
    function assertMatchesSnapshot($actual, Driver $driver = null): void
    {
        test()->assertMatchesSnapshot($actual, $driver);
    }
}

if (! function_exists('assertMatchesFileHashSnapshot')) {

    /**
     * Assert that the given value matches the stored file hash snapshot.
     */
    function assertMatchesFileHashSnapshot(string $filePath): void
    {
        test()->assertMatchesFileHashSnapshot($filePath);
    }
}

if (! function_exists('assertMatchesFileSnapshot')) {

    /**
     * Assert that the given value matches the stored file snapshot.
     */
    function assertMatchesFileSnapshot(string $file): void
    {
        test()->assertMatchesFileSnapshot($file);
    }
}

if (! function_exists('assertMatchesHtmlSnapshot')) {
    function assertMatchesHtmlSnapshot(string $actual): void
    {
        test()->assertMatchesHtmlSnapshot($actual);
    }
}

if (! function_exists('assertMatchesJsonSnapshot')) {
    function assertMatchesJsonSnapshot(string $actual): void
    {
        test()->assertMatchesJsonSnapshot($actual);
    }
}

if (! function_exists('assertMatchesObjectSnapshot')) {
    function assertMatchesObjectSnapshot(object $actual): void
    {
        test()->assertMatchesObjectSnapshot($actual);
    }
}

if (! function_exists('assertMatchesTextSnapshot')) {
    function assertMatchesTextSnapshot(string $actual): void
    {
        test()->assertMatchesTextSnapshot($actual);
    }
}

if (! function_exists('assertMatchesXmlSnapshot')) {
    function assertMatchesXmlSnapshot(string $actual): void
    {
        test()->assertMatchesXmlSnapshot($actual);
    }
}

if (! function_exists('assertMatchesYamlSnapshot')) {
    function assertMatchesYamlSnapshot(string $actual): void
    {
        test()->assertMatchesYamlSnapshot($actual);
    }
}
