<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /*
         * Laravel usa o conjunto de caracteres utf8mb4 por padrão, que inclui suporte para armazenar "emojis"
         *  no banco de dados. Se você estiver executando uma versão do MySQL mais antiga do que a versão 5.7.7
         *  ou MariaDB anterior à versão 10.2.2, talvez seja necessário configurar manualmente o comprimento da
         *  string padrão gerado pelas migrações para que o MySQL crie índices para elas. Você pode configurar
         *  isso chamando o método Schema::defaultStringLength no AppServiceProvider:
         */
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
    }
}
