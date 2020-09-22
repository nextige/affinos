<?php

namespace App\Http\Controllers;
use App\Profile;
use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Address;

class ProfileController extends Controller
{
        public function index(){
            if (Auth::User()){
                $user = User::find(Auth::User()->id);
                $address = Address::all();
                return view('admin.profile.index', compact("user", "address"));
            }
        }
        public function store(Request $request) {
            $request->validate([
                'name' => 'required',
                'last_name' => 'required',
                'phone' => 'required',
                'email' => 'required',
                'cagecode' => 'required',
                'sams' => 'required',
                'city' => 'required',
                'zip' => 'required',
                'state' => 'required',
                'country' => 'required',
                'address' => 'required',
               
            ]);
    
                $profile = User::find($request->id);
                $profile->name = $request->name;
                $profile->last_name = $request->last_name;
                $profile->phone = $request->phone;
                $profile->email = $request->email;
                $profile->cagecode = $request->cagecode;
                $profile->sams = $request->sams;
                $profile->city = $request->city;
                $profile->zip = $request->zip;
                $profile->state = $request->state;
                $profile->country = $request->country;
                $profile->address = $request->address;
                $profile->save();
               
                return redirect()->back();
    }
    
        public function  avatar(Request $request){
           
            if($request->file('image')){
                $profile = $request->file('image');
                $file_name = time() . '.' . $profile->getClientOriginalExtension();
                $path = public_path('uploads/section_image');
                $profile->move($path, $file_name);
                $program->image = $file_name;
            }
           
            User::save();

            return redirect()->back();
        }

}


  
