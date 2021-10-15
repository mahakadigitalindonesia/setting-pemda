<?php

namespace Mdigi\SettingPemda\Tests;

use Mdigi\SettingPemda\SettingPemdaServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            SettingPemdaServiceProvider::class,
        ];
    }

    protected function getEnvironmentSetUp($app)
    {
        include_once __DIR__ . '/../database/migrations/create_pemda_table.php.stub';

        (new \CreatePemdaTable)->up();
    }
}