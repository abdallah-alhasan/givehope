<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Http\Request;

class DonationController extends Controller
{


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $donations = Donation::all();
        return view('pages.donate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //Validate the input
         $request->validate([
            
            'donator_name'=> 'required',
            'phone_num'=> 'required',
            'city_id'=> 'required',
            'num_content'=> 'required',
            ]);
    
            //Create a new donation in the database
            //$request->all(): Retreiving all input data
            Donation::create($request->all());
    
            //Redirect the user and send friendly message
            return redirect()->route('donations.create')
                            ->with('success','Donation created successfully.');



    }


}
