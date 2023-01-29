<?php

namespace App\Http\Controllers;

class ServicesController extends Controller {

    public function __construct() {
        
    }

    public function index() {

        return view('pages.services', []);
    }


}
