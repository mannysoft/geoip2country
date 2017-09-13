<?php 

namespace Mannysoft\GeoIp2Country;

use Illuminate\Support\ServiceProvider;

class ServiceProvider extends ServiceProvider {
    
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('GeoIp2Country',function(){
            return new \GeoIp2\Database\Reader(storage_path('app/geoip2/GeoLite2-Country.mmdb'));
        });
    }

}
