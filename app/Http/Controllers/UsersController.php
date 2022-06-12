<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    public function index(){
        $users = User::orderBy('city_id', 'ASC')->oldest()->paginate(10);
        $user_city = User::orderBy('id', 'ASC')->join('cities', 'users.city_id', '=', 'cities.id')
        ->get(['users.id', 'cities.name']);
        // dd($user_city);
        return view('admin.users.index',compact('users' , 'user_city'));
    }

    public function edit(User $user)
    {
        $cities = City::orderBy('id', 'ASC')->get();
        return view('admin.users.edit' , compact('user', 'cities'));
    }

    public function update(Request $request, User $user)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => ['required' , 'email'],
            'phonenumber' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'city_id' => '',
            'image' => 'image',
            'roles' => '',
        ]);
        if (request('image')) {
            $imagePath = request('image')->store('uploads', 'public');
        }
        $user->update(array_merge($data,request('image') != null ? ['image' => $imagePath ] : []));
        return redirect()->route('users.index')
        ->with('message', 'user updated successfully');
    }

    // public function show(Listing $listing){
    //     return view('listings.show',compact('listing'));
    // }

    public function create(){
        $cities = City::orderBy('id', 'ASC')->get();
        return view('admin.users.create' , compact('cities'));
    }

    public function store(Request $request){

        $data = $request->validate([
            'name' => 'required',
            'password' => 'required',
            'email' => ['required' , 'email'],
            'phonenumber' => 'required',
            // |regex:/^([0-9\s\-\+\(\)]*)$/|min:10'
            'city_id' => '',
            'image' => 'image',
            'roles' => '',
        ]);

        if (request('image')) {
            $imagePath = request('image')->store('uploads', 'public');
        }
        $save = User::create(array_merge($data , request('image') != null ? ['image' => $imagePath ] : [] ));
        return redirect()->route('users.index')
        ->with('message', 'User added successfully');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')
        ->with('message', 'user deleted successfully');
    }




    


    //profile 
    public function showProfile(User $user)
    {
        // dd($user->name);
        // auth()->users()->city()->name
        $city= City::where('id' , $user->city_id)->first();
        // dd($city->name);
        return view('pages.profile', compact('user','city'));

    }

    public function editProfile(User $user)
    {

        return view('pages.editprofile' , compact('user'));
    }

    public function updateProfile(Request $request, User $user)
    {
        $data = $request->validate([
            'name' => ' ',
            'email' =>  ' ',
            'phonenumber' => 'regex:/^([0-9\s\-\+\(\)]*)$/|min:10'


        ]);
        // $imagePath = request('image')->store('uploads', 'public');
        // $user->update(array_merge($data,['image' => $imagePath]));
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phonenumber = $request->phonenumber;
        $user->save();
        return redirect("profile/$user->id")
        ->with('message', 'user updated successfully');
    }


}
