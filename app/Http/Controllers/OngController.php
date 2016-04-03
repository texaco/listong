<?php

namespace listong\Http\Controllers;

use listong\Http\Requests;
use listong\Http\Controllers\Controller;
use listong\Ong;
use Request;
use Redirect;
use Session;
use Gmaps;

class OngController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ong = Ong::where("user_id", "=", Auth()->user()->id)->paginate(5);
        return view('ong.index', compact('ong'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //configuaración
        $config = array();
        $config['center'] = '37.4419, -122.1419';
        $config['map_width'] = 700;
        $config['map_height'] = 500;
        $config['places'] = TRUE;
        $config['placesAutocompleteInputID'] = 'myPlaceTextBox';
        $config['placesAutocompleteBoundsMap'] = TRUE;
        $config['placesAutocompleteOnChange'] = 'alert(\'hacer algo\');';
        $config['onclick'] = 'fill_Location(event.latLng.lat(), event.latLng.lng());add_marker({ map: map, position:event.latLng });';
        $config['zoom'] = 'auto';
        
        Gmaps::initialize($config);
 
        $marker = array();
    
        Gmaps::add_marker($marker);
 
        $map = Gmaps::create_map();
 
        //Devolver vista con datos del mapa
        return view('ong.create', compact('map'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ong = new Ong(Request::all());
        $ong->save();

        return Redirect::to('/ong');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function detail($id)
    {
    	
        $ong = Ong::findOrFail($id);
        $ongs = Ong::all();
        //dd($ong->latitud.",".$ong->longitud);
        //configuaración
        $config = array();
        $config['center'] = $ong->latitud.",".$ong->longitud;
        $config['map_width'] = 400;
        $config['map_height'] = 300;
        //$config['onclick'] = 'alert(\'You just clicked at: \' + event.latLng.lat() + \', \' + event.latLng.lng()); createMarker_map({ map: map, position:event.latLng });';
        $config['onclick'] = 'fill_Location(event.latLng.lat(), event.latLng.lng());createMarker_map({ map: map, position:event.latLng });';
        $config['zoom'] = 10;
        
        Gmaps::initialize($config);
        
        foreach ($ongs as $o){
        	$marker = array ();        
        	$marker ['position'] = $o->latitud.",".$o->longitud;
        	if($o->latitud==$ong->latitud && $o->longitud==$ong->longitud)
        	{
        		$marker['icon'] = 'http://maps.google.com/mapfiles/ms/icons/blue-dot.png';
        	}else
        	{
        		$marker['icon'] = 'http://maps.google.com/mapfiles/ms/icons/red-dot.png';
        	}
        	Gmaps::add_marker ( $marker );
        }
        
        $map = Gmaps::create_map();
        return view('ong.detail', compact('ong','map'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ong = Ong::findOrFail($id);
        //dd($ong->latitud.",".$ong->longitud);
        //configuaración
        $config = array();
        $config['center'] = $ong->latitud.",".$ong->longitud;
        $config['map_width'] = 700;
        $config['map_height'] = 500;
        //$config['onclick'] = 'alert(\'You just clicked at: \' + event.latLng.lat() + \', \' + event.latLng.lng()); createMarker_map({ map: map, position:event.latLng });';
        $config['onclick'] = 'fill_Location(event.latLng.lat(), event.latLng.lng());createMarker_map({ map: map, position:event.latLng });';
        $config['zoom'] = 10;
        
        Gmaps::initialize($config);
 
        $marker = array();
        $marker['position'] = $ong->latitud.",".$ong->longitud;
        $marker['draggable'] = TRUE;
        $marker['animation'] = 'DROP';

        Gmaps::add_marker($marker);
 
        $map = Gmaps::create_map();
        return view('ong.edit', compact('ong','map'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ong = Ong::findOrFail($id);
        $ong->fill(Request::all());
        $ong->save();

        return Redirect::to('/ong');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //dd($id);
        Ong::destroy($id);
        return Redirect::to('/ong');
    }
}
