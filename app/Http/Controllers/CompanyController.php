<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(auth()->user()->account_type == 0){
            $companies = Company::orderBy('name','asc')->get();
        }else {
            $companies = Company::orderBy('name','asc')->where('created_by', auth()->user()->id )->get();
        }
        
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
        $address = (object) [   "street_address" => $request->street_address, 
                                "city" => $request->street_address, 
                                "state" => $request->state,
                                "zip_code" => $request->zip_code,
                                "country" => $request->country,
                            ];
        $phone = (object) [    "country" => "United States", 
                                "number" => $request->number
                            ];
        $company_info = (object) [ "website" => $request->website,
                            "description" => $request->description,
                            "num_of_employee" => $request->num_of_employee,
                            "average_revenue" => $request->average_revenue,
                            "industry" => $request->industry,
                        ];
        $address =  json_encode($address);
        $phone = json_encode($phone);
        $company_info = json_encode($company_info);
        $data = [
            "name" => $request->name,
            "created_by" => auth()->user()->id,
            "access" => $request->access,
            "address" => $address,
            "phone" => $phone, 
            "company_info" => $company_info
        ];
        $company = Company::create($data);
        $success = "Prospect Created";

        return redirect( route('prospects.show', ['company' => $company->id]) )->with(['data' => $success]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show($company)
    {
        $company =  Company::find($company);
        $company['address'] = json_decode($company->address);
        $company['phone'] = json_decode($company->phone);
        $company['company_info'] = json_decode($company->company_info);

        $contacts = Contact::orderBy('full_name','asc')->where('company_id', $company->id)->get();

        return view('dashboard.company-view', compact('company', 'contacts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        $company['address'] = json_decode($company->address);
        $company['phone'] = json_decode($company->phone);
        $company['company_info'] = json_decode($company->company_info);
        return view('dashboard.company-edit', compact('company'));
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
        $address = (object) [   
            "street_address" => $request->street_address, 
            "city" => $request->street_address, 
            "state" => $request->state,
            "zip_code" => $request->zip_code,
            "country" => $request->country
        ];
        $phone = (object) [    
                "country" => $request->country, 
                "number" => $request->number,
                "home" => $request->home
            ];
        $company_info = (object) [ 
            "website" => $request->website,
            "description" => $request->description,
            "twitter_handle" => $request->twitter_handle, 
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

        $company->name = $request->name;
        $company->created_by = auth()->user()->id;
        $company->access = $request->access;
        $company->tags = $request->tags;
        $company->address = $address;
        $company->phone = $phone;
        $company->company_info = $company_info;
        $company->save();

        $success = "Company Updated";

        return redirect( route('company.show', ['company' => $company->id]) )->with(['data' => $success]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        $company = $company->delete();

        $success = "Company Deleted";

        return redirect( route('company.index') )->with(['data' => $success]);
    }
}
