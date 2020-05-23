<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Company;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::orderBy('id','desc')->paginate(1);
        return view('dashboard.contacts', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companies = Company::orderBy('name','asc')->get();

        return view('dashboard.contacts-new', compact('companies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $address = (object) [   "street_address" => $request->street_address, 
                                "city" => $request->street_address, 
                                "state" => $request->state,
                                "zip_code" => $request->zip_code,
                                "country" => $request->country
                            ];
        $phone = (object) [    "country" => $request->country, 
                                "number" => $request->number,
                                "home" => $request->home
                            ];
        
        $address =  json_encode($address);
        $phone = json_encode($phone);

        $data = [
            "full_name" => $request->full_name,
            "email" => $request->email,
            "status" => $request->status,     
            "company_id" => $request->company,     
            "tags" => $request->tags,     
            "birthday" => $request->birthday,     
            "address" => $address,
            "phone" => $phone,
            "description" => $request->description
        ];

        return Contact::create($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        $contact['address'] = json_decode($contact->address);
        $contact['phone'] = json_decode($contact->phone);
        return view('dashboard.contacts-view', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
