<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        $viewData = [];
        $viewData["title"] = "Home Page - CSIS 3280 Online Store demo";
        return view('home.index')->with("viewData", $viewData);
    }

    public function about(){
        $viewData = [];
        $viewData["title"] = "About us - CSIS 3280 Online Store demo";
        $viewData["subtitle"] = "About us";
        $viewData["description"] = "This is the about page for the online store demo";
        $viewData["author"] = "Developed by: Bambang Sarif";
        return view('home.about')->with("viewData", $viewData);
    }
}
