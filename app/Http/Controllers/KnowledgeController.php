<?php

namespace App\Http\Controllers;

use App\Models\KnowledgeNews;
use App\Models\KnowledgeThought;
use App\Models\KnowledgeSalary;
use App\Models\Country;
use App\Models\MasterCurrentlyHiring;
use App\Models\MasterSpecialization;
use Illuminate\Http\Request;

class KnowledgeController extends Controller {

    public function __construct() {
        
    }

    public function index() {
        $maintenance = Controller::maintenance();
        if ($maintenance) {
            return view('layouts.maintenance');
        }

        return view('pages.knowledge', []);
    }

    public function knowledge() {
        $maintenance = Controller::maintenance();
        if ($maintenance) {
            return view('layouts.maintenance');
        }

        return view('pages.knowledge', []);
    }

    public function news() {
        $maintenance = Controller::maintenance();
        if ($maintenance) {
            return view('layouts.maintenance');
        }

        $urlBackend = Controller::urlBackend();
        $model = KnowledgeNews::first();

        return view('pages.news', ['model' => $model, 'urlBackend' => $urlBackend]);
    }

    public function salarysurveys() {
        $maintenance = Controller::maintenance();
        if ($maintenance) {
            return view('layouts.maintenance');
        }
        $country = Country::all();
        $masterHiring = MasterCurrentlyHiring::all();
        $masterSpecialization = MasterSpecialization::all();

        return view('pages.salarysurveys', ['country' => $country, 'masterHiring' => $masterHiring, 'masterSpecialization' => $masterSpecialization]);
    }

    public function thoughtleadership() {
        $maintenance = Controller::maintenance();
        if ($maintenance) {
            return view('layouts.maintenance');
        }

        $urlBackend = Controller::urlBackend();
        $model = KnowledgeThought::first();

        return view('pages.thoughtleadership', ['model' => $model, 'urlBackend' => $urlBackend]);
    }

    public function downloadsurvey(Request $request) {
        $request->validate([
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|max:255',
            'phone_code' => 'required',
            'phone' => 'required',
        ]);

        $success = true;
        $message = 'Request completed';

        if ($success) {
            try {
                $model = new KnowledgeSalary();
                $model->first_name = isset($request['first_name']) ? $request['first_name'] : NULL;
                $model->last_name = isset($request['last_name']) ? $request['last_name'] : NULL;
                $model->email = isset($request['email']) ? $request['email'] : NULL;
                $model->phone_code = isset($request['phone_code']) ? $request['phone_code'] : NULL;
                $model->phone = isset($request['phone']) ? $request['phone'] : NULL;
                $model->currently_hiring = isset($request['currently_hiring']) ? $request['currently_hiring'] : NULL;
                $model->specialization = isset($request['specialization']) ? $request['specialization'] : NULL;
                $model->save();
            } catch (Exception $ex) {
                $success = false;
                $message = $ex->getMessage();
            }
        }

        return redirect('/salarysurveys')->with('success', $message);
    }

}
