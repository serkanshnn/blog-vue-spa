<?php

namespace Modules\User\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\User\Repositories\UserRepository;
use Modules\User\Repositories\UserRepositoryInterface;
use Modules\User\Services\UserService;
use Modules\User\Services\UserServiceInterface;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(UserServiceInterface::class, UserService::class);

        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

}
