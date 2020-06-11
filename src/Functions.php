<?php

namespace Spatie\Snapshots;

use Pest\Plugin;

Plugin::uses(MatchesSnapshots::class);

function assertMatchesSnapshot($actual, Driver $driver = null): void
{
    test()->assertMatchesSnapshot(...func_get_args());
}

function assertMatchesFileHashSnapshot(string $filePath): void
{
    test()->assertMatchesFileHashSnapshot($filePath);
}

function assertMatchesFileSnapshot(string $file): void
{
    test()->assertMatchesFileSnapshot($file);
}

function assertMatchesHtmlSnapshot(string $actual): void
{
    test()->assertMatchesHtmlSnapshot($actual);
}

function assertMatchesJsonSnapshot(string $actual): void
{
    test()->assertMatchesJsonSnapshot($actual);
}

function assertMatchesObjectSnapshot(object $actual): void
{
    test()->assertMatchesObjectSnapshot($actual);
}

function assertMatchesTextSnapshot(string $actual): void
{
    test()->assertMatchesTextSnapshot($actual);
}

function assertMatchesXmlSnapshot(string $actual): void
{
    test()->assertMatchesXmlSnapshot($actual);
}

function assertMatchesYamlSnapshot(string $actual): void
{
    test()->assertMatchesYamlSnapshot($actual);
}
