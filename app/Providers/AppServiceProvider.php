<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Account\Domain\Repository\IAccountRepository;
use Modules\Account\Domain\Repository\IRegisterAccountRepository;
use Illuminate\Support\Facades\Schema;
use Modules\Account\Domain\Service\ICreateAccountService;
use Modules\Account\Domain\Service\IDeleteAccountService;
use Modules\Account\Domain\Service\IListAllAccountService;
use Modules\Account\Domain\Service\IRegisterAccountService;
use Modules\Account\Domain\Service\IUpdateAccountService;
use Modules\Account\Infrastructure\Mysql\MysqlRegisterAccountRepository;
use Modules\Account\Infrastructure\Repository\Mysql\MysqlAccountRepository;
use Modules\Account\Infrastructure\Service\CreateAccountService;
use Modules\Account\Infrastructure\Service\DeleteAccountService;
use Modules\Account\Infrastructure\Service\ListAllAccountService;
use Modules\Account\Infrastructure\Service\RegisterAccountService;
use Modules\Account\Infrastructure\Service\UpdateAccountService;
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
         * Core Service
         *
         */
        $this->app->bind(ICoreService::class, CoreService::class);
        /**
         *
         * Core Repository
         */
        $this->app->bind(ICoreRepository::class, MysqlCoreRepository::class);



        /**
         * Account Service
         */
        $this->app->bind(IRegisterAccountService::class, RegisterAccountService::class);
        $this->app->bind(IListAllAccountService::class, ListAllAccountService::class);
        $this->app->bind(ICreateAccountService::class, CreateAccountService::class);
        $this->app->bind(IUpdateAccountService::class, UpdateAccountService::class);
        $this->app->bind(IDeleteAccountService::class, DeleteAccountService::class);
        /**
         *
         * Account Repository for Mysql
         */
        $this->app->bind(IRegisterAccountRepository::class, MysqlRegisterAccountRepository::class);
        $this->app->bind(IAccountRepository::class, MysqlAccountRepository::class);

    }
}
