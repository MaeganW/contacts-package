<?php

namespace Contacts;

use Contacts\Preset;
use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\Console\PresetCommand;

class ContactsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Contacts\ContactsController');
        $this->loadViewsFrom(__DIR__.'/views', 'contacts');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        include __DIR__.'/routes/web.php';

        $this->publishes([
            __DIR__.'/migrations' => base_path('database/migrations'),
        ]);

        PresetCommand::macro('testing', function($command){
            Preset::install();
        });
    }
}