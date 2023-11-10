<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view("Welcome");
    }

    public function contact() {
        return view('contact', [
            "name" => "Aditya"
        ]);
    }
    public function create() {
        return "Success";
    }
}
