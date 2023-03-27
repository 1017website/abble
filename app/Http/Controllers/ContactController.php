<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use Illuminate\Http\Request;

class ContactController extends Controller {

    public function __construct() {
        
    }

    public function index() {
        $maintenance = Controller::maintenance();
        if ($maintenance) {
            return view('layouts.maintenance');
        }

        $urlBackend = Controller::urlBackend();
        $model = Contact::all();
        $banner = DB::table('banner')->first();

        return view('pages.contact', ['model' => $model, 'urlBackend' => $urlBackend, 'banner' => $banner]);
    }

    public function contactemail(Request $request) {
        $success = true;
        $message = 'Email sent !';

        if ($success) {
            try {
                $mailData = [
                    'subject' => 'Contact',
                    'view' => 'emails.contact',
                    'data' => [
                        'name' => $request->name,
                        'email' => $request->email,
                        'description' => $request->description,
                    ],
                ];
                $emailAdmin = Controller::emailAdmin();
                if (strlen($emailAdmin) > 0) {
                    Mail::to($emailAdmin)->send(new SendMail($mailData));
                }
            } catch (Exception $ex) {
                $success = false;
                $message = $ex->getMessage();
            }
        }

        return redirect('/contact')->with('success', $message);
    }

}
