<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;

class TestController extends Controller
{
    public function index()
    {
        if (App::environment("local")) {
            return "App Name: ..." . config("app.name");
        }
        return "Your environment is not local!";
    }

    public function configTest()
    {
        Config::set('app.timezone', 'American/Chicago');

        $bad = null;

        try {
            Config::integer('app.timezone');
        } catch (\Throwable $th) {
            $bad = $th->getMessage();
        }

        return response()->json([
            'get' => config('app.timezone'),
            'string(app.name)' => Config::string('app.name')
        ]);
    }
}
