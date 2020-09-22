<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Package;
use App\Recurrance;
use Session;
use App\Addon;
use App\PackageAddonPrice;

class PackagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $packages = Package::all();
        return view('admin.packages.index', compact('packages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $recurrances = Recurrance::all();
        $addons = Addon::all();
        return view('admin.packages.create', compact('recurrances', 'addons'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'recurrance_id'=> 'required',
            'headline' => 'required',
            'description' =>'required',
            'additional_user'=>'required',
        ]);
       $plans = new Package;
       $plans->name=$request->name;
       $plans->price=$request->price;
       $plans->recurrance_id=$request->recurrance_id;
       $plans->headline=$request->headline;
       $plans->description=$request->description;
       $plans->additional_user=$request->additional_user;
       $plans->save();
       if ($request->addon_name && $request->packageprice) {
        foreach($request->addon_name as $index => $addon_id) {
            if($addon_id && $request->packageprice[$index]) {
                $packageAddonPrice = new PackageAddonPrice;
                $packageAddonPrice->addon_id = $addon_id;
                $packageAddonPrice->package_id = $plans->id;
                $packageAddonPrice->price = $request->packageprice[$index];
                $packageAddonPrice->save();
            }
        }
       }
       Session::flash('message', 'Package inserted successfuly!');
       return redirect('packages');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return redirect('packages');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($package)
    {
        $package = Package::where("id", "=", $package)->first();
        $recurrances = Recurrance::all();
        $addons = Addon::all();
        $addedAddons = PackageAddonPrice::where('package_id', '=', $package->id)->get();
        return view("admin.packages.edit", compact('package', 'recurrances', 'addons', 'addedAddons'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $package)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'recurrance_id'=> 'required',
            'headline' => 'required',
            'description' =>'required',
            'additional_user'=>'required',
        ]);

       $plans = Package::find($request->id);
       $plans->name=$request->name;
       $plans->price=$request->price;
       $plans->recurrance_id=$request->recurrance_id;
       $plans->headline=$request->headline;
       $plans->description=$request->description;
       $plans->additional_user=$request->additional_user;
       $plans->save();
       if ($request->addon_name && $request->packageprice) {
            foreach($request->addon_name as $index => $addon_id) {
                if($addon_id && $request->packageprice[$index]) {
                    if ($index == 0) {
                        PackageAddonPrice::where('package_id', '=', $request->id)->delete();
                    }
                    $packageAddonPrice = new PackageAddonPrice;
                    $packageAddonPrice->addon_id = $addon_id;
                    $packageAddonPrice->package_id = $request->id;
                    $packageAddonPrice->price = $request->packageprice[$index];
                    $packageAddonPrice->save();
                }
            }
       }
        Session::flash('message', 'Package updated successfuly!');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($package)
    {
        Package::destroy($package);
        return redirect('packages');
    }

    /*
    * FRONT END METHODS
    */
    public function pricingPage() {
        $packages = Package::all();
        $packagesToReturn = [];
        foreach($packages as $package) {
            if (count($packagesToReturn) == 0 || !$packagesToReturn[$package->recurrance->name]) {
                $packagesToReturn[$package->recurrance->name] = [$package];
            } else {
                array_push($packagesToReturn[$package->recurrance->name], $package);    
            }
        }
        return view('frontend.pricingpage', compact('packagesToReturn'));
    }
}
