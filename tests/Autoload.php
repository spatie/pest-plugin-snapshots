<?php

it('autoloads function', function ($name) {
    assertTrue(function_exists("\\Spatie\\Snapshots\\$name"));
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
