<?php

namespace App\Http\Controllers;

use App\Models\CommunityDiversity;

class CommunityController extends Controller {

    public function __construct() {
        
    }

    public function index() {

        return view('pages.community', []);
    }

    public function community() {

        return view('pages.community', []);
    }

    public function partnership() {

        return view('pages.partnership', []);
    }

    public function volunteering() {

        return view('pages.volunteering', []);
    }

    public function diversityandinclusion() {
        $maintenance = Controller::maintenance();
        if ($maintenance) {
            return view('layouts.maintenance');
        }

        $urlBackend = Controller::urlBackend();
        $model = CommunityDiversity::first();

        return view('pages.diversityandinclusion', ['model' => $model]);
    }

}
