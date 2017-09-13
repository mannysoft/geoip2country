<?php 

namespace Mannysoft\GeoIp2Country\Facades;

use Illuminate\Support\Facades\Facade;

class Facade extends Facade {
	
    protected static function getFacadeAccessor() { return 'GeoIp2Country'; }
    
}