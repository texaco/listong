<?php

namespace listong\Http\Controllers;

use Illuminate\Http\Request;
use listong\Http\Requests;
use listong\Ong;


class BackUsersController extends Controller {
	function index() {
		$ong = Ong::paginate ( 5 );
		return view ( 'userBackend.index', compact ( 'ong' ) );
	}
}
