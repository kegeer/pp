<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepoServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
//        parent::boot();
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Repos\Reports\ReportRepoInterface', 'App\Repos\Reports\ReportRepo');
        $this->app->bind('App\Repos\Batches\BatchRepoInterface', 'App\Repos\Batches\BatchRepo');
    }
}
