<?php

it('allows to use snapshot assertions')->assertMatchesSnapshot('Foo');

it('creates snapshots directory on tests root folder', function () {
    assertMatchesSnapshot('Bar');

    assertFileExists(__DIR__ . DIRECTORY_SEPARATOR . '__snapshots__');
});
