<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function actionHome()
    {
        return view('pages.home');
    }
}
