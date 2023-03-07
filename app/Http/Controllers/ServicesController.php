<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\ServiceDescription;

class ServicesController extends Controller {

    public function __construct() {
        
    }

    public function index() {
        $maintenance = Controller::maintenance();
        if ($maintenance) {
            return view('layouts.maintenance');
        }

        $urlBackend = Controller::urlBackend();
        $model = Service::all();
        $modelDescription = ServiceDescription::first();

        return view('pages.services', ['model' => $model, 'modelDescription' => $modelDescription, 'urlBackend' => $urlBackend]);
    }

}
