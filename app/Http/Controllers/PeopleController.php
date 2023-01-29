<?php

namespace App\Http\Controllers;

class PeopleController extends Controller {

    public function __construct() {
        
    }

    public function index() {

        return view('pages.people', []);
    }

    public function ourdirectors() {

        return view('pages.ourdirectors', []);
    }

    public function consultants() {

        return view('pages.consultants', []);
    }

}
