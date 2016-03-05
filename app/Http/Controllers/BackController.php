<?php

namespace listong\Http\Controllers;

use Illuminate\Http\Request;
use listong\Http\Requests;
use listong\Http\Controllers\Controller;
use listong\Ong;
use Gmaps;

class BackController extends Controller
{
    function index(){
    	$ong = Ong::paginate ( 5 );
    	//configuaración
        $config = array();
        $config['center'] = '37.4419, -122.1419';
        $config['map_width'] = 700;
        $config['map_height'] = 500;
        //$config['onclick'] = 'alert(\'You just clicked at: \' + event.latLng.lat() + \', \' + event.latLng.lng()); createMarker_map({ map: map, position:event.latLng });';
        $config['onclick'] = 'fill_Location(event.latLng.lat(), event.latLng.lng());createMarker_map({ map: map, position:event.latLng });';
        $config['zoom'] = 'auto';
        
        Gmaps::initialize($config);
 
        $marker = array();
    
        Gmaps::add_marker($marker);
 
        $map = Gmaps::create_map();
    	return view ( 'admin.index', compact ( 'ong','map' ) );
    }
}
