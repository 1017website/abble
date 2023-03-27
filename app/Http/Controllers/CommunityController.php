<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\CommunityDescription;
use App\Models\CommunityDiversity;
use App\Models\CommunityVolunteering;
use App\Models\CommunityPartnership;

class CommunityController extends Controller {

    public function __construct() {
        
    }

    public function index() {
        $maintenance = Controller::maintenance();
        if ($maintenance) {
            return view('layouts.maintenance');
        }
        $urlBackend = Controller::urlBackend();
        $model = CommunityDescription::first();
        $banner = DB::table('banner')->first();

        return view('pages.community', ['model' => $model, 'urlBackend' => $urlBackend, 'banner' => $banner]);
    }

    public function community() {
        $maintenance = Controller::maintenance();
        if ($maintenance) {
            return view('layouts.maintenance');
        }
        $urlBackend = Controller::urlBackend();
        $model = CommunityDescription::first();
        $banner = DB::table('banner')->first();

        return view('pages.community', ['model' => $model, 'urlBackend' => $urlBackend, 'banner' => $banner]);
    }

    public function partnership() {
        $maintenance = Controller::maintenance();
        if ($maintenance) {
            return view('layouts.maintenance');
        }
        $urlBackend = Controller::urlBackend();
        $model = CommunityPartnership::all();
        $banner = DB::table('banner')->first();

        return view('pages.partnership', ['model' => $model, 'urlBackend' => $urlBackend, 'banner' => $banner]);
    }

    public function volunteering() {
        $maintenance = Controller::maintenance();
        if ($maintenance) {
            return view('layouts.maintenance');
        }
        $urlBackend = Controller::urlBackend();
        $model = CommunityVolunteering::all();
        $banner = DB::table('banner')->first();

        return view('pages.volunteering', ['model' => $model, 'urlBackend' => $urlBackend, 'banner' => $banner]);
    }

    public function diversityandinclusion() {
        $maintenance = Controller::maintenance();
        if ($maintenance) {
            return view('layouts.maintenance');
        }

        $urlBackend = Controller::urlBackend();
        $model = CommunityDiversity::first();
        $banner = DB::table('banner')->first();

        return view('pages.diversityandinclusion', ['model' => $model, 'urlBackend' => $urlBackend, 'banner' => $banner]);
    }

}
