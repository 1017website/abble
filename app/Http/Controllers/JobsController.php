<?php

namespace App\Http\Controllers;

class JobsController extends Controller {

    public function __construct() {
        
    }

    public function index() {

        return view('pages.jobs', []);
    }


}
