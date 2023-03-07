<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\JobBenefit;
use App\Models\JobDescription;

class JobsController extends Controller {

    public function __construct() {
        
    }

    public function index() {
        $maintenance = Controller::maintenance();
        if ($maintenance) {
            return view('layouts.maintenance');
        }

        $model = Job::all();
        $urlBackend = Controller::urlBackend();

        return view('pages.jobs', ['model' => $model, 'urlBackend' => $urlBackend]);
    }

    public function joinabblesearch() {
        $maintenance = Controller::maintenance();
        if ($maintenance) {
            return view('layouts.maintenance');
        }

        $modelDescription = JobDescription::first();
        $modelBenefit = JobBenefit::all();
        $modelJob = Job::orderBy('id', 'DESC')->get();
        $urlBackend = Controller::urlBackend();

        return view('pages.joinabblesearch', ['modelDescription' => $modelDescription, 'modelBenefit' => $modelBenefit, 'modelJob' => $modelJob, 'urlBackend' => $urlBackend]);
    }

    public function jobdetail($id) {
        $maintenance = Controller::maintenance();
        if ($maintenance) {
            return view('layouts.maintenance');
        }

        $model = Job::where('id', '=', $id)->first();
        $urlBackend = Controller::urlBackend();

        return view('pages.latestjobs', ['model' => $model, 'urlBackend' => $urlBackend]);
    }

}
