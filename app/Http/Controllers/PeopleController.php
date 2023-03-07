<?php

namespace App\Http\Controllers;

use App\Models\People;

class PeopleController extends Controller {

    public function __construct() {
        
    }

    public function index() {

        return view('pages.people', []);
    }

    public function ourdirectors() {
        $maintenance = Controller::maintenance();
        if ($maintenance) {
            return view('layouts.maintenance');
        }

        $urlBackend = Controller::urlBackend();
        $model = People::where('type', '=', 'directors')->get();

        return view('pages.ourdirectors', ['model' => $model, 'urlBackend' => $urlBackend]);
    }

    public function consultants() {
        $maintenance = Controller::maintenance();
        if ($maintenance) {
            return view('layouts.maintenance');
        }

        $urlBackend = Controller::urlBackend();
        $model = People::where('type', '=', 'consultans')->get();

        return view('pages.consultants', ['model' => $model, 'urlBackend' => $urlBackend]);
    }

}
