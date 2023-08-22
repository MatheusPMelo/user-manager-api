<?php

namespace App\Providers;

use App\Core\Repositories\Contracts\IUserDataRepository;
use App\Core\Repositories\Contracts\IUserRepository;
use App\Core\Repositories\UserDataRepository;
use App\Core\Repositories\UserRepository;
use App\Core\Services\Contracts\IUserDataService;
use App\Core\Services\Contracts\IUserService;
use App\Core\Services\UserDataService;
use App\Core\Services\UserService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // Repositories
        $this->app->singleton(IUserRepository::class, UserRepository::class);
        $this->app->singleton(IUserDataRepository::class, UserDataRepository::class);

        // Services
        $this->app->singleton(IUserService::class, UserService::class);
        $this->app->singleton(IUserDataService::class, UserDataService::class);
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
