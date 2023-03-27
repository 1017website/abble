<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\People;

class PeopleController extends Controller {

    public function __construct() {
        
    }

    public function index() {
        $maintenance = Controller::maintenance();
        if ($maintenance) {
            return view('layouts.maintenance');
        }
        $urlBackend = Controller::urlBackend();
        $banner = DB::table('banner')->first();

        return view('pages.people', ['urlBackend' => $urlBackend, 'banner' => $banner]);
    }

    public function ourdirectors() {
        $maintenance = Controller::maintenance();
        if ($maintenance) {
            return view('layouts.maintenance');
        }

        $urlBackend = Controller::urlBackend();
        $model = People::where('type', '=', 'directors')->get();
        $banner = DB::table('banner')->first();

        return view('pages.ourdirectors', ['model' => $model, 'urlBackend' => $urlBackend, 'banner' => $banner]);
    }

    public function consultants() {
        $maintenance = Controller::maintenance();
        if ($maintenance) {
            return view('layouts.maintenance');
        }

        $urlBackend = Controller::urlBackend();
        $model = People::where('type', '=', 'consultans')->get();
        $banner = DB::table('banner')->first();

        return view('pages.consultants', ['model' => $model, 'urlBackend' => $urlBackend, 'banner' => $banner]);
    }

}
