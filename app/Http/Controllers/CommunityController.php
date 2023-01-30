<?php

namespace App\Http\Controllers;

class CommunityController extends Controller {

    public function __construct() {
        
    }

    public function index() {

        return view('pages.community', []);
    }

    public function partnership() {

        return view('pages.partnership', []);
    }

    public function volunteering() {

        return view('pages.volunteering', []);
    }

    public function diversityandinclusion() {

        return view('pages.diversityandinclusion', []);
    }

}
