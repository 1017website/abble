<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\AboutDescription;
use App\Models\AboutValues;

class HomeController extends Controller {

    public function __construct() {
        
    }

    public function index() {
        $maintenance = Controller::maintenance();
        if ($maintenance) {
            return view('layouts.maintenance');
        }

        $model = DB::table('about_description')->first();

        return view('pages.home', ['model' => $model]);
    }

    public function home() {
        $maintenance = Controller::maintenance();
        if ($maintenance) {
            return view('layouts.maintenance');
        }

        $model = DB::table('about_description')->first();

        return view('pages.home', ['model' => $model]);
    }

    public function ourvalues() {
        $maintenance = Controller::maintenance();
        if ($maintenance) {
            return view('layouts.maintenance');
        }
        
        $urlBackend = Controller::urlBackend();
        $model = AboutValues::all();

        return view('pages.ourvalues', ['model' => $model, 'urlBackend' => $urlBackend]);
    }

}
