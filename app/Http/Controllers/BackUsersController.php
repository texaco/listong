<?php

namespace listong\Http\Controllers;

use Illuminate\Http\Request;
use listong\Http\Requests;
use listong\User;


class BackUsersController extends Controller {
	function index() {
		$users = User::paginate ( 5 );
		return view ( 'userBackend.index', compact ( 'users' ) );
	}
}
