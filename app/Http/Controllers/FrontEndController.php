<?php

namespace App\Http\Controllers;
use App\Recurrance;
use App\Package;

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
        $recurrances = Recurrance::all();
        return view('frontend.pricing', compact('recurrances'));
    }

    public function customers() {
        return view('frontend.customers');
    }

    public function why() {
        return view('frontend.why');
    }

    public function checkout($id) {
        $package = Package::find($id);
        $recurrances = Recurrance::all();
        return view('frontend.checkout', compact('package'));
    }
}
