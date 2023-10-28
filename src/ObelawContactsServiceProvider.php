<?php

namespace Obelaw\Contacts;

use Illuminate\Support\ServiceProvider;
use Obelaw\Contacts\Interfaces\ContactRepositoryInterface;
use Obelaw\Contacts\Repositories\ContactRepository;

class ObelawContactsServiceProvider extends ServiceProvider
{

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ContactRepositoryInterface::class, ContactRepository::class);

        $this->app->singleton('obelaw.contacts', ContactRepositoryInterface::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'obelaw-contacts');
    }
}
