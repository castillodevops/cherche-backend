<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Account\Domain\Repository\IRegisterUserRepository;
use Mudules\Account\Infrastructure\Respository\Mysql\MysqlRegisterUserRepository;
use Illuminate\Support\Facades\Schema;
use Modules\Account\Domain\Service\IRegisterUserService;
use Modules\Account\Infrastructure\Service\RegisterUserService;
use Modules\Core\Domain\Repository\ICoreRepository;
use Modules\Core\Domain\Service\CoreService;
use Modules\Core\Domain\Service\ICoreService;
use Modules\Core\Infrastructure\Mysql\MysqlCoreRepository;


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
        /**
         * Core
         */

        $this->app->bind(ICoreRepository::class, MysqlCoreRepository::class);
        $this->app->bind(ICoreService::class, CoreService::class);
        //
        /**
         * Account
         */
        $this->app->bind(IRegisterUserService::class, RegisterUserService::class);
        $this->app->bind(IRegisterUserRepository::class, MysqlRegisterUserRepository::class);

    }
}
