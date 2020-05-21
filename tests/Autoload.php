<?php

it('autoloads function', function ($name) {
    assertTrue(function_exists($name));
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
