<?php

namespace listong\Http\Controllers;

use Illuminate\Http\Request;
use listong\Http\Requests;
use listong\Http\Controllers\Controller;
use Gmaps;
use listong\Ong;

class FrontController extends Controller {
	function index() {
		// configuaración
		$ong = Ong::all();
		$config = array ();
		$config ['center'] = 'auto';
		$config ['map_width'] = 700;
		$config ['map_height'] = 500;
		// $config['onclick'] = 'alert(\'You just clicked at: \' + event.latLng.lat() + \', \' + event.latLng.lng());createMarker_map({ map: map, position:event.latLng });updateDatabase(event.latLng.lat());';
		$config ['onclick'] = 'updateDatabase(event.latLng.lat(), event.latLng.lng());';
		$config ['zoom'] = 'auto';
		$config ['onboundschanged'] = 'if (!centreGot) {
    	 var mapCentre = map.getCenter();
    	 marker_0.setOptions({
    	 position: new google.maps.LatLng(mapCentre.lat(), mapCentre.lng())
    	
    	 });
    	 }
    	 centreGot = true;';
		Gmaps::initialize ( $config );
		
		foreach ($ong as $o){
			$marker = array ();
				
			$marker ['position'] = $o->latitud.",".$o->longitud;
			$marker ['infowindow_content'] = $o->name;
			Gmaps::add_marker ( $marker );
		}
	
		$map = Gmaps::create_map ();
		
		// Devolver vista con datos del mapa
		return View ( 'index', compact ( 'map' ) );
	}
}
