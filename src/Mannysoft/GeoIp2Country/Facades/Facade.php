<?php 

namespace Mannysoft\GeoIp2Country\Facades;

use Illuminate\Support\Facades\Facade as BaseFacade;

class Facade extends BaseFacade {
	
    protected static function getFacadeAccessor() { return 'GeoIp2Country'; }
    
}