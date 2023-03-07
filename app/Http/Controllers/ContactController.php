<?php

namespace App\Http\Controllers;

use App\Models\Contact;

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

        return view('pages.contact', ['model' => $model, 'urlBackend' => $urlBackend]);
    }

}
