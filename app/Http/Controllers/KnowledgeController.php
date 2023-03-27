<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\KnowledgeNews;
use App\Models\KnowledgeThought;
use App\Models\KnowledgeSalary;
use App\Models\KnowledgeSalaryDescription;
use App\Models\Country;
use App\Models\MasterCurrentlyHiring;
use App\Models\MasterSpecialization;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\Mail\SendMailNew;

class KnowledgeController extends Controller {

    public function __construct() {
        
    }

    public function index() {
        $maintenance = Controller::maintenance();
        if ($maintenance) {
            return view('layouts.maintenance');
        }
        $modelNews = KnowledgeNews::first();
        $modelThought = KnowledgeThought::first();
        $modelSalary = KnowledgeSalaryDescription::first();
        $urlBackend = Controller::urlBackend();
        $banner = DB::table('banner')->first();

        return view('pages.knowledge', ['modelNews' => $modelNews, 'modelThought' => $modelThought, 'modelSalary' => $modelSalary, 'urlBackend' => $urlBackend, 'banner' => $banner]);
    }

    public function knowledge() {
        $maintenance = Controller::maintenance();
        if ($maintenance) {
            return view('layouts.maintenance');
        }
        $urlBackend = Controller::urlBackend();
        $banner = DB::table('banner')->first();

        return view('pages.knowledge', ['urlBackend' => $urlBackend, 'banner' => $banner]);
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
        $model = KnowledgeSalaryDescription::first();
        $urlBackend = Controller::urlBackend();
        $banner = DB::table('banner')->first();

        return view('pages.salarysurveys', ['urlBackend' => $urlBackend, 'model' => $model, 'country' => $country, 'masterHiring' => $masterHiring, 'masterSpecialization' => $masterSpecialization, 'banner' => $banner]);
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
        $message = 'Request salary surveys completed';

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
                if ($model->save()) {
                    $mailData = [
                        'subject' => 'Request Salary Surveys',
                        'view' => 'emails.salary_surveys',
                        'data' => [
                            'name' => $model->first_name . ' ' . $model->last_name,
                            'email' => $model->email,
                            'phone' => '(' . $model->phone_code . ') ' . $model->phone,
                            'hiring' => $model->currently_hiring,
                            'specialization' => $model->specialization,
                        ],
                    ];

                    $emailAdmin = Controller::emailAdmin();
                    if (strlen($emailAdmin) > 0) {
                        Mail::to($emailAdmin)->send(new SendMail($mailData));
                    }
                }
            } catch (Exception $ex) {
                $success = false;
                $message = $ex->getMessage();
            }
        }

        return redirect('/salarysurveys')->with('success', $message);
    }

}
