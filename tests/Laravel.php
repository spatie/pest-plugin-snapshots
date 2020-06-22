<?php

use Faker\Factory;
use Illuminate\Support\Facades\Route;
use Spatie\Snapshots\Drivers\YamlDriver;
use Spatie\Snapshots\Laravel\SnapshotsServiceProvider;

class TestCase extends Orchestra\Testbench\TestCase
{
    public function getPackageProviders($app)
    {
        return [
            SnapshotsServiceProvider::class,
        ];
    }
}

uses(TestCase::class);

$faker = Factory::create();

beforeEach(function () use ($faker) {
    Route::get('html', function () {
        return trim(<<<HTML
            <!DOCTYPE html>
            <html lang="en"><head><title>title</title></head><body><h1>first headline</h1></body></html>
        HTML);
    });
    Route::get('json', function () {
        return [
            'foo' => 'bar',
            'ping' => 'pong',
        ];
    });
    Route::get('xml', function () {
        return trim(<<<XML
            <?xml version="1.0" encoding="utf-8"?>
            <list>
            <item>item #1</item>
            <item>item #2</item>
            </list>
        XML);
    });
    Route::get('txt', function () {
        return "FooBar\nPingPong";
    });
    Route::get('yaml', function () {
        return implode(PHP_EOL, [
            'foo: key',
            'ping: pong',
            '',
        ]);
    });
});

test('html response body matches with snapshot')
    ->get('/html')
    ->assertMatchesHtmlSnapshot();

test('json response body matches with snapshot')
    ->get('/json')
    ->assertMatchesJsonSnapshot();

test('xml response body matches with snapshot')
    ->get('/xml')
    ->assertMatchesXmlSnapshot();

test('txt response body matches with snapshot')
    ->get('/txt')
    ->assertMatchesTextSnapshot();

test('yaml response body matches with snapshot')
    ->get('/yaml')
    ->assertMatchesSnapshot(new YamlDriver());
