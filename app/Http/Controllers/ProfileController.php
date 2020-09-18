<?php

namespace App\Http\Controllers;
use App\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        // $profile = Profile::get();
        return view('admin.profile.index'); 
    }
}