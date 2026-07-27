<?php

namespace Zerp\Goal\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Zerp\Goal\Providers\GoalServiceProvider;

abstract class TestCase extends Orchestra
{
    protected function getPackageProviders($app): array
    {
        return [GoalServiceProvider::class];
    }
}
