<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index() {
        return view('frontend.home');
    }

    public function features() {
        return view('frontend.features');
    }

    public function pricing() {
        return view('frontend.pricing');
    }

    public function customers() {
        return view('frontend.customers');
    }

    public function why() {
        return view('frontend.why');
    }
}
