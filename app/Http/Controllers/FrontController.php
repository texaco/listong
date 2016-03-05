<?php

namespace listong\Http\Controllers;

use Illuminate\Http\Request;
use listong\Http\Requests;
use listong\Http\Controllers\Controller;
use Gmaps;

class FrontController extends Controller {
	function index() {
		// configuaración
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
		
		$marker = array ();
		$marker ['position'] = '37.429, -122.1519';
		$marker ['infowindow_content'] = '1 - Hello World!';
		$marker ['icon'] = 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=A|9999FF|000000';
		Gmaps::add_marker ( $marker );
		
		$marker = array ();
		$marker ['position'] = '37.409, -122.1319';
		$marker ['draggable'] = TRUE;
		$marker ['animation'] = 'DROP';
		Gmaps::add_marker ( $marker );
		
		$marker = array ();
		$marker ['position'] = '37.449, -122.1419';
		$marker ['onclick'] = 'alert("You just clicked me!!")';
		
		Gmaps::add_marker ( $marker );
		
		$map = Gmaps::create_map ();
		
		// Devolver vista con datos del mapa
		return View ( 'index', compact ( 'map' ) );
	}
}
