<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\BlogsModel;

class LandingPageController extends Controller
{
    public function index()
    {
        $postData = BlogsModel::all();
        return view("welcome", ['postData' => $postData]);
    }
}
