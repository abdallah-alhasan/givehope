<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\City;
use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $donations = Package::orderBy('city_id', 'ASC')->oldest()->paginate(10);
        $donation_city = Package::orderBy('id', 'ASC')->join('cities', 'packages.city_id', '=', 'cities.id')
        ->get(['packages.id', 'cities.name']);
        // dd($user_city);
        return view('admin.packages.index',compact('donations' , 'donation_city'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('id', 'ASC')->get();
        $cities = City::orderBy('id', 'ASC')->get();
        return view('admin.packages.create' , compact('cities', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'doner_name' => 'required',
            'category_id' => 'required',
            'condition' => 'required',
            'products_number' => 'required',
            'title' => 'required',
            'phone_number' => 'required',
            // |regex:/^([0-9\s\-\+\(\)]*)$/|min:10'
            'city_id' => '',
            'image' => 'image',
            'description' => '',
        ]);

        if (request('image')) {
            $imagePath = request('image')->store('uploads', 'public');
        }
        $save = Package::create(array_merge($data , request('image') != null ? ['image' => $imagePath ] : [] ));
        return redirect()->route('packages.index')
        ->with('message', 'Donation added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function show(Package $package)
    {
        //
        return view('pages.single-product', compact('package'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function edit(Package $package)
    {
        $categories = Category::orderBy('id', 'ASC')->get();
        $cities = City::orderBy('id', 'ASC')->get();
        return view('admin.packages.edit' , compact('categories', 'cities' , 'package'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Package $package)
    {
        $data = $request->validate([
            'doner_name' => 'required',
            'category_id' => 'required',
            'condition' => 'required',
            'products_number' => 'required',
            'title' => 'required',
            'phone_number' => 'required',
            // |regex:/^([0-9\s\-\+\(\)]*)$/|min:10'
            'city_id' => '',
            'image' => 'image',
            'description' => '',
        ]);
        if (request('image')) {
            $imagePath = request('image')->store('uploads', 'public');
        }
        $package->update(array_merge($data,request('image') != null ? ['image' => $imagePath ] : []));
        return redirect()->route('packages.index')
        ->with('message', 'Donation updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function destroy(Package $package)
    {
        $package->delete();
        return redirect()->route('packages.index')
        ->with('message', 'Donation deleted successfully');
    }

    public function softDelete(Package $package)
    {
        //
        $package->delete();
        return redirect()->route('categories.show', 1)->withSuccess(__('Package Booked successfully.'));
        // return redirect()->route('home.index')->withSuccess(__('Package Booked successfully.'));
    }
}
