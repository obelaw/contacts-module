<?php

namespace Obelaw\Contacts;

use Illuminate\Support\ServiceProvider;
use Obelaw\Contacts\Console\Commands\ImportPinsCommand;
use Obelaw\Twist\Addons\AddonsPool;

class ObelawContactsServiceProvider extends ServiceProvider
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
        AddonsPool::loadTwist(__DIR__ . '/../twist.php');

        if ($this->app->runningInConsole()) {
            $this->commands([
                ImportPinsCommand::class,
            ]);
        }
    }
}
