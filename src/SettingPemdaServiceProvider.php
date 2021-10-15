<?php


namespace Mdigi\SettingPemda;


use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class SettingPemdaServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'settingpemda');
    }

    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/config.php' => config('settingpemda.php'),
            ], 'config');

            if (!class_exists('CreatePemdaTable')) {
                $this->publishes([
                    __DIR__ . '/../database/migrations/create_pemda_table.php.stub' => database_path('migrations/' . date('Y_m_d_His', time()) . '_create_pemda_table.php'),
                ], 'migrations');
            }

            $this->publishes([
                __DIR__ . '/../resources/views' => resource_path('views/vendor/settingpemda'),
            ], 'views');

            $this->publishes([
                __DIR__ . '/../database/seeders/PemdaSeeder.php.stub' => database_path('seeders/PemdaSeeder.php'),
            ], 'seeders');
        }

        $this->registerRoutes();
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'settingpemda');
    }

    protected function registerRoutes()
    {
        Route::group($this->routeConfiguration(), function () {
            $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        });
    }

    protected function routeConfiguration()
    {
        return [
            'prefix' => config('settingpemda.routes.prefix'),
            'middleware' => config('settingpemda.routes.middleware'),
        ];
    }
}