<?php

namespace App\Http\Controllers;

class KnowledgeController extends Controller {

    public function __construct() {
        
    }

    public function index() {

        return view('pages.knowledge', []);
    }


}
