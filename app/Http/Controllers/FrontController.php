<?php

namespace listong\Http\Controllers;

use Illuminate\Http\Request;

use listong\Http\Requests;
use listong\Http\Controllers\Controller;

class FrontController extends Controller
{
    function index(){
        return View('index');
    }
}
