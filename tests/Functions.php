<?php

use function Spatie\Snapshots\assertMatchesSnapshot;

test('higher order tests')->assertMatchesSnapshot('higher order tests');

assertMatchesSnapshot('pending higher order tests');

test('closure tests', function () {
    assertMatchesSnapshot('closure tests');

    expect(__DIR__ . DIRECTORY_SEPARATOR . '__snapshots__')->toBeDirectory();
});

test('expectation test', function() {
   expect(1)->toMatchSnapshot();
});
