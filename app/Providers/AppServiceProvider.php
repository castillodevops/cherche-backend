<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Account\Domain\Repository\IRegisterUserRepository;
use Mudules\Account\Infrastructure\Respository\Mysql\MysqlRegisterUserRepository;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        /**
         * Account
         */
        $this->app->bind(\IRegisterUserService::class, \RegisterUserService::class);
        $this->app->bind(IRegisterUserRepository::class, MysqlRegisterUserRepository::class);
    }
}
