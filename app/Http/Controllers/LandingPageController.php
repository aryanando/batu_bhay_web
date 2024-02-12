<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\BlogsModel;

class LandingPageController extends Controller
{
    public function index()
    {
        $postData = BlogsModel::join('binshops_post_categories', 'binshops_post_categories.post_id', '=', 'binshops_post_translations.post_id')
        ->select("*")
        ->where('binshops_post_categories.category_id', "1")->offset(0)
        ->limit(3)->get();

        $buletinData = BlogsModel::join('binshops_post_categories', 'binshops_post_categories.post_id', '=', 'binshops_post_translations.post_id')
        ->select("*")
        ->where('binshops_post_categories.category_id', "2")->offset(0)
        ->limit(3)->get();
        return view("welcome", ['postData' => $postData, 'buletinData' => $buletinData]);
    }
}
