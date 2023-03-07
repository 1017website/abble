<?php

namespace App\Http\Controllers;

use App\Models\Specialization;

class SpecializationsController extends Controller {

    public function __construct() {
        
    }

    public function index() {
        $maintenance = Controller::maintenance();
        if ($maintenance) {
            return view('layouts.maintenance');
        }

        $urlBackend = Controller::urlBackend();
        $model = Specialization::all();

        return view('pages.specializations', ['model' => $model, 'urlBackend' => $urlBackend]);
    }

}
