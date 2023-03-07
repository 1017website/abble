<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController {

    use AuthorizesRequests,
        DispatchesJobs,
        ValidatesRequests;

    public static function maintenance() {
        $return = false;
        $setting = DB::table('settings')->first();
        if (isset($setting)) {
            if ($setting->maintenance == 1) {
                $return = true;
            }
        }

        return $return;
    }

    public static function urlBackend() {
        $return = '';
        $setting = DB::table('settings')->first();
        if (isset($setting)) {
            $return = $setting->domain_backend;
        }

        return $return;
    }

}
