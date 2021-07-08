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

expect()->extend('toMatchSnapshot', function () {
    test()->assertMatchesSnapshot($this->value);

    return $this;
});

expect()->extend('toMatchFileHashSnapshot', function () {
    test()->assertMatchesFileHashSnapshot($this->value);

    return $this;
});

expect()->extend('toMatchFileSnapshot', function () {
    test()->assertMatchesFileSnapshot($this->value);

    return $this;
});

expect()->extend('toMatchHtmlSnapshot', function () {
    test()->assertMatchesHtmlSnapshot($this->value);

    return $this;
});

expect()->extend('toMatchJsonSnapshot', function () {
    test()->assertMatchesJsonSnapshot($this->value);

    return $this;
});

expect()->extend('toMatchObjectSnapshot', function () {
    test()->assertMatchesObjectSnapshot($this->value);

    return $this;
});

expect()->extend('toMatchTextSnapshot', function () {
    test()->assertMatchesTextSnapshot($this->value);

    return $this;
});

expect()->extend('toMatchXmlSnapshot', function () {
    test()->assertMatchesXmlSnapshot($this->value);

    return $this;
});

expect()->extend('toMatchYamlSnapshot', function () {
    test()->assertMatchesYamlSnapshot($this->value);

    return $this;
});
