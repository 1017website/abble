<?php

namespace App\Http\Controllers;

class KnowledgeController extends Controller {

    public function __construct() {
        
    }

    public function index() {

        return view('pages.knowledge', []);
    }

    public function knowledge() {

        return view('pages.knowledge', []);
    }

    public function news() {

        return view('pages.news', []);
    }

    public function salarysurveys() {

        return view('pages.salarysurveys', []);
    }

    public function thoughtleadership() {

        return view('pages.thoughtleadership', []);
    }

}
