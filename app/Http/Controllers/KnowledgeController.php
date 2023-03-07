<?php

namespace App\Http\Controllers;

use App\Models\KnowledgeNews;
use App\Models\KnowledgeThought;

class KnowledgeController extends Controller {

    public function __construct() {
        
    }

    public function index() {

        return view('pages.knowledge', []);
    }

    public function knowledge() {

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

        return view('pages.salarysurveys', []);
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

}
