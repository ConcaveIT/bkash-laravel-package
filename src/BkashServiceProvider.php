<?php
namespace Concave\Bkash;
use Illuminate\Support\ServiceProvider;

class BkashServiceProvider extends ServiceProvider{

    public function boot(){
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views','bkash');
        $this->loadMigrationsFrom(__DIR__.'/migrations/2020_24_10_000000_create_bkash_response_table.php');
    }

    public function register(){
        
    }

}