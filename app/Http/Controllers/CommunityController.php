<?php

namespace App\Http\Controllers;

use App\Models\CommunityDiversity;
use App\Models\CommunityVolunteering;
use App\Models\CommunityPartnership;

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
        $maintenance = Controller::maintenance();
        if ($maintenance) {
            return view('layouts.maintenance');
        }
        $urlBackend = Controller::urlBackend();
        $model = CommunityPartnership::all();

        return view('pages.partnership', ['model' => $model, 'urlBackend' => $urlBackend]);
    }

    public function volunteering() {
        $maintenance = Controller::maintenance();
        if ($maintenance) {
            return view('layouts.maintenance');
        }
        $urlBackend = Controller::urlBackend();
        $model = CommunityVolunteering::all();

        return view('pages.volunteering', ['model' => $model, 'urlBackend' => $urlBackend]);
    }

    public function diversityandinclusion() {
        $maintenance = Controller::maintenance();
        if ($maintenance) {
            return view('layouts.maintenance');
        }

        $urlBackend = Controller::urlBackend();
        $model = CommunityDiversity::first();

        return view('pages.diversityandinclusion', ['model' => $model, 'urlBackend' => $urlBackend]);
    }

}
