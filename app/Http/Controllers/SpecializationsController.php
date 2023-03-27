<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Specialization;

class SpecializationsController extends Controller {

    public function __construct() {
        
    }

    public function index() {
        $maintenance = Controller::maintenance();
        if ($maintenance) {
            return view('layouts.maintenance');
        }

        $banner = DB::table('banner')->first();
        $urlBackend = Controller::urlBackend();
        $model = Specialization::all();

        return view('pages.specializations', ['model' => $model, 'urlBackend' => $urlBackend, 'banner' => $banner]);
    }

}
