<?php

namespace App\Http\Controllers;

class SpecializationsController extends Controller {

    public function __construct() {
        
    }

    public function index() {

        return view('pages.specializations', []);
    }


}
