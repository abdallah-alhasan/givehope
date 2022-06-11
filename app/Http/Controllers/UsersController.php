<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){
        $users = User::oldest()->paginate(10);
    return view('admin.users.index',compact('users'));
    }

    public function edit(User $user)
    {
        return view('admin.users.edit' , compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => ['required' , 'email'],
            'phonenumber' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'city' => '',
            'image' => 'image',
            'roles' => '',
        ]);
        $imagePath = request('image')->store('uploads', 'public');
        $user->update(array_merge($data,['image' => $imagePath]));
        return redirect()->route('user.index')
        ->with('message', 'user updated successfully');
    }
    // public function show(Listing $listing){
    //     return view('listings.show',compact('listing'));
    // }

    // public function create(){
    //     return view('listings.create');
    // }

    // public function store(Request $request){
    //     $data = $request->validate([
    //         'title' => 'required',
    //         'company' => ['required', Rule::unique('listings' , 'company')],
    //         'location' => 'required',
    //         'website' => 'required',
    //         'email' => ['required' , 'email'],
    //         'tags' => 'required',
    //         'description' => 'required',
    //     ]);
    //     Listing::create($data);
    //     return redirect('/');
    // }
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')
        ->with('message', 'user deleted successfully');
    }
}
