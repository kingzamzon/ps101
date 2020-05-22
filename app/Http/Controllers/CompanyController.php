<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::orderBy('id','desc')->paginate(1);
        return view('dashboard.companies', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.company-new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $address = (object) ["street_address" => $request->street_address, 
        "city" => $request->street_address, 
        "state" => $request->state,
        "zip_code" => $request->zip_code,
        "country" => $request->country];
        $phone = (object) [    "country" => $request->country, 
                        "number" => $request->number,
                        "home" => $request->home
            ];
        $company_info = (object) [ "website" => $request->website,
                            "description" => $request->description,
                            "twittet_handle" => $request->twittet_handle, 
                            "num_of_employee" => $request->num_of_employee,
                            "average_revenue" => $request->average_revenue,
                            "identifier" => $request->identifier,
                            "category" => $request->category,
                            "industry" => $request->industry,
                            "stock_symbol" => $request->stock_symbol,
                            "priority" => $request->priority,
        ];
        $address =  json_encode($address);
        $phone = json_encode($phone);
        $company_info = json_encode($company_info);
        $data = [
            "name" => $request->name,
            "access" => $request->access,
            "tags" => $request->tags,     
            "phone" => $request->tags,     
            "company_info" => $request->tags,     
            "address" => $address,
            "phone" => $phone, 
            "company_info" => $company_info
        ];
        // return $data;
        // $data = (array)$data;
        return Company::create($data);
        return response()->json($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        $address = json_decode($company->address);
        $phone = json_decode($company->phone);
        $company_info = json_decode($company->company_info);
        return view('dashboard.company-view', compact('company','address', 'phone', 'company_info'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        //
    }
}
