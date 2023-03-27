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
        
        $urlBackend = Controller::urlBackend();
        $model = DB::table('about_description')->first();
        $banner = DB::table('banner')->first();

        return view('pages.home', ['model' => $model, 'urlBackend' => $urlBackend, 'banner' => $banner]);
    }

    public function home() {
        $maintenance = Controller::maintenance();
        if ($maintenance) {
            return view('layouts.maintenance');
        }
        
        $urlBackend = Controller::urlBackend();
        $model = DB::table('about_description')->first();
        $banner = DB::table('banner')->first();

        return view('pages.home', ['model' => $model, 'urlBackend' => $urlBackend, 'banner' => $banner]);
    }

    public function ourvalues() {
        $maintenance = Controller::maintenance();
        if ($maintenance) {
            return view('layouts.maintenance');
        }
        
        $urlBackend = Controller::urlBackend();
        $model = AboutValues::all();
        $banner = DB::table('banner')->first();

        return view('pages.ourvalues', ['model' => $model, 'urlBackend' => $urlBackend, 'banner' => $banner]);
    }

}
