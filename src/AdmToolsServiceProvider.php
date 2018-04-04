<?php

namespace KudinovFedor\AdmTools;

use Illuminate\Support\ServiceProvider;

/**
 * Class AdmToolsServiceProvider
 * @package KudinovFedor\AdmTools
 */
class AdmToolsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/adm-tools.php' => config_path('adm-tools.php'),
        ], 'adm-tools');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/adm-tools.php', 'adm-tools');
    }
}
