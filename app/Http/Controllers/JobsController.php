<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\JobBenefit;
use App\Models\JobDescription;
use App\Models\JobApply;
use App\Models\Country;
use App\Models\MasterCurrentlyHiring;
use App\Models\MasterSpecialization;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\Mail\SendMailNew;

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
        $country = Country::all();
        $masterHiring = MasterCurrentlyHiring::all();
        $masterSpecialization = MasterSpecialization::all();

        return view('pages.latestjobs', ['model' => $model, 'country' => $country, 'masterHiring' => $masterHiring, 'masterSpecialization' => $masterSpecialization, 'urlBackend' => $urlBackend]);
    }

    public function jobapply(Request $request) {
        $request->validate([
            'cv' => 'mimes:pdf,docx,doc|max:2048',
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|max:255',
            'phone_code' => 'required',
            'phone' => 'required',
        ]);

        $success = true;
        $message = 'Apply completed';

        if ($success) {
            try {
                $model = new JobApply();
                $model->job_id = isset($request['job_id']) ? $request['job_id'] : NULL;
                $model->first_name = isset($request['first_name']) ? $request['first_name'] : NULL;
                $model->last_name = isset($request['last_name']) ? $request['last_name'] : NULL;
                $model->email = isset($request['email']) ? $request['email'] : NULL;
                $model->phone_code = isset($request['phone_code']) ? $request['phone_code'] : NULL;
                $model->phone = isset($request['phone']) ? $request['phone'] : NULL;
                $model->currently_hiring = isset($request['currently_hiring']) ? $request['currently_hiring'] : NULL;
                $model->specialization = isset($request['specialization']) ? $request['specialization'] : NULL;
                $model->description = isset($request['description']) ? $request['description'] : NULL;
                if ($request->file('cv') && request('cv') != '') {
                    if (!file_exists('files')) {
                        mkdir('files', 0777, true);
                    }
                    if (!file_exists('files/cv/')) {
                        mkdir('files/cv/', 0777, true);
                    }
                    if (!empty($model->cv)) {
                        $filePath = $_SERVER['DOCUMENT_ROOT'] . $model->cv;
                        if (file_exists($filePath)) {
                            File::delete($filePath);
                        }
                    }
                    $nameImg = time() . '.' . $request->file('cv')->getClientOriginalExtension();
                    $destinationPath = $_SERVER['DOCUMENT_ROOT'] . '/files/cv/';
                    $filePath = $destinationPath . $nameImg;
                    $request->file('cv')->move($destinationPath, $nameImg);
                    $model->cv = '/files/cv/' . $nameImg;
                }
                if ($model->save()) {
                    $mailData = [
                        'subject' => 'Job Applied',
                        'view' => 'emails.applied_jobs',
                        'data' => [
                            'job' => $model->job->role . ' ' . $model->job->place,
                            'name' => $model->first_name . ' ' . $model->last_name,
                            'email' => $model->email,
                            'phone' => '(' . $model->phone_code . ') ' . $model->phone,
                            'cv' => '<a href="' . asset($model->cv) . '" target="_blank">Download</a>',
                            'description' => $model->description,
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

        return redirect('/jobdetail/' . $request['job_id'])->with('success', $message);
    }

    public function testEmail() {
        $mailData = [
            'subject' => 'Job Applied',
            'view' => 'emails.applied_jobs',
            'title' => 'Mail from ItSolutionStuff.com',
            'body' => 'This is for testing email using smtp.',
        ];

        Mail::to('hokihokiguy@gmail.com')->send(new SendMail($mailData));
    }

}
