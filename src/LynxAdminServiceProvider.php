<?php

namespace DanceLynx\LynxAdmin;

use Illuminate\Support\ServiceProvider;

class LynxAdminServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__."/config/lynx-admin.php" => config_path("lynx-admin.php")
        ]);
        $this->mergeConfigFrom(__DIR__."/config/lynx-admin.php", "lynx-admin");
        $this->loadRoutesFrom(__DIR__."/routes/web.php");
        $this->loadMigrationsFrom(__DIR__."/database/migrations");
        $this->loadFactoriesFrom(__DIR__."/database/factories");
        $this->loadTranslationsFrom(__DIR__."/resources/lang", 'lynx-admin');
        $this->loadViewsFrom(__DIR__."/resources/views", 'lynx-admin');
    }
}
