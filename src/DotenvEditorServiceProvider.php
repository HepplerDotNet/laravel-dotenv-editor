<?php

namespace HepplerDotNet\DotenvEditor;

use Illuminate\Support\ServiceProvider;

class DotenvEditorServiceProvider extends ServiceProvider
{
    /**
     * Provider boot.
     */
    public function boot()
    {
        $this->publishes(
            [
                __DIR__.'/../resources/views' => resource_path('views/vendor/dotenv-editor'),
            ],
            'views'
        );

        $this->publishes(
            [
                __DIR__.'/../config/dotenveditor.php' => config_path('dotenveditor.php'),
            ],
            'config'
        );

        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'dotenv-editor');
        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'dotenv-editor');
    }

    /**
     * Provider register.
     */
    public function register()
    {
        $this->app->bind(
            'dotenveditor',
            function () {
                return new DotenvEditor();
            }
        );

        $this->mergeConfigFrom(__DIR__.'/../config/dotenveditor.php', 'dotenveditor');
    }
}
