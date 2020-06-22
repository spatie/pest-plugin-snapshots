<?php

namespace Spatie\Snapshots\Laravel;

use Illuminate\Support\ServiceProvider;
use Illuminate\Testing\TestResponse;
use function Spatie\Snapshots\assertMatchesHtmlSnapshot;
use function Spatie\Snapshots\assertMatchesJsonSnapshot;
use function Spatie\Snapshots\assertMatchesSnapshot;
use function Spatie\Snapshots\assertMatchesTextSnapshot;
use function Spatie\Snapshots\assertMatchesXmlSnapshot;
use Spatie\Snapshots\Driver;

class SnapshotsServiceProvider extends ServiceProvider
{
    public function register()
    {
        TestResponse::macro('assertMatchesSnapshot', function (Driver $driver = null) {
            /** @var TestResponse $this */
            assertMatchesSnapshot($this->getContent(), $driver);
        });

        TestResponse::macro('assertMatchesHtmlSnapshot', function () {
            /** @var TestResponse $this */
            assertMatchesHtmlSnapshot($this->getContent());
        });

        TestResponse::macro('assertMatchesJsonSnapshot', function () {
            /** @var TestResponse $this */
            assertMatchesJsonSnapshot($this->getContent());
        });

        TestResponse::macro('assertMatchesTextSnapshot', function () {
            /** @var TestResponse $this */
            assertMatchesTextSnapshot($this->getContent());
        });

        TestResponse::macro('assertMatchesXmlSnapshot', function () {
            /** @var TestResponse $this */
            assertMatchesXmlSnapshot($this->getContent());
        });
    }
}
