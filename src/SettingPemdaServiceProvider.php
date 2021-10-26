<?php


namespace Mdigi\SettingPemda;


use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Mdigi\SettingPemda\Helpers\Options;

class SettingPemdaServiceProvider extends ServiceProvider
{
    public function register()
    {
        if (Options::isConfigPublished()) {
            $this->mergeConfigFrom(config_path('settingpemda.php'), 'settingpemda');
        } else {
            $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'settingpemda');
        }
    }

    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/config.php' => config_path('settingpemda.php'),
            ], 'settingpemda-config');

            if (!class_exists('CreatePemdaTable')) {
                $this->publishes([
                    __DIR__ . '/../database/migrations/create_pemda_table.php.stub' => database_path('migrations/' . date('Y_m_d_His', time()) . '_create_pemda_table.php'),
                ], 'settingpemda-migrations');
            }

            $this->publishes([
                __DIR__ . '/../resources/views' => resource_path(Options::VIEWS_PATH),
            ], 'settingpemda-views');

            $this->publishes([
                __DIR__ . '/../database/seeders/PemdaSeeder.php.stub' => database_path('seeders/PemdaSeeder.php'),
            ], 'settingpemda-seeders');
        }

        $this->registerRoutes();
        if (Options::isViewsPublished()) {
            $this->loadViewsFrom(resource_path(Options::VIEWS_PATH), 'settingpemda');
        } else {
            $this->loadViewsFrom(__DIR__ . '/../resources/views', 'settingpemda');
        }

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