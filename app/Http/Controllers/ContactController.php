<?php

namespace App\Http\Controllers;

class ContactController extends Controller {

    public function __construct() {
        
    }

    public function index() {

        return view('pages.contact', []);
    }


}
