<?php

namespace App\Http\Controllers;

class HomeController extends Controller {

    public function __construct() {
        
    }

    public function index() {

        return view('pages.home', []);
    }

    public function home() {

        return view('pages.home', []);
    }

    public function ourvalues() {

        return view('pages.ourvalues', []);
    }

}
