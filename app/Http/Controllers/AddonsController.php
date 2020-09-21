<?php

namespace App\Http\Controllers;
use App\Addons;
use Illuminate\Http\Request;

class AddonsController extends Controller
{
    public function index()
    {
        //$packages = Package::all();
        return view('admin.addons.index');
    }
}
