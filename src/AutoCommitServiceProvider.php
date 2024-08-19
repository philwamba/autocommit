<?php

namespace Philwamba\AutoCommit;

use Illuminate\Support\ServiceProvider;

class AutoCommitServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // Register the command with Artisan
        $this->commands([
            Console\SuggestCommitMessage::class,
        ]);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
