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
        $ong = Ong::where("user_id", "=", Auth()->user()->id)->paginate(5);
    	return view ( 'admin.index', compact ( 'ong' ) );
    }
}
