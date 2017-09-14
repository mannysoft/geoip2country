<?php
use GeoIp2\Exception\AddressNotFoundException;

function getUserIp()
{
	if (env('APP_ENV') == 'local') {
		return env('TEST_IP_ADDRESS', '127.0.0.1');
	}

	return request()->ip();
}

function getLocation()
{
	try {
		$record = GeoIp2Country::country(getUserIp());
		$country = $record->country->names['en'];
	} catch (AddressNotFoundException $ex) {
		$country = 'United States';
	}

	return $country;
}