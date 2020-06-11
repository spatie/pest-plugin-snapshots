<?php

use function Spatie\Snapshots\assertMatchesSnapshot;

test('higher order tests')->assertMatchesSnapshot('higher order tests');

assertMatchesSnapshot('pending higher order tests');

test('closure tests', function () {
    assertMatchesSnapshot('closure tests');

    assertFileExists(__DIR__ . DIRECTORY_SEPARATOR . '__snapshots__');
});
