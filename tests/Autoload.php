<?php

it('autoloads function', function ($name) {
    expect(function_exists("\\Spatie\\Snapshots\\$name"))->toBeTrue();
})->with([
    'assertMatchesSnapshot',
    'assertMatchesFileHashSnapshot',
    'assertMatchesFileSnapshot',
    'assertMatchesHtmlSnapshot',
    'assertMatchesJsonSnapshot',
    'assertMatchesObjectSnapshot',
    'assertMatchesTextSnapshot',
    'assertMatchesXmlSnapshot',
    'assertMatchesYamlSnapshot',
]);
