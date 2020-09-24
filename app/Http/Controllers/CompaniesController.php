<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */ 
    public function index()
    {
     

        $companies = Company::all();
        return view('companies.index',['companies'=> $companies]); 


    }

   
    public function create()
    {
        return view ('companies.create');

    }


    public function store(Request $request)
    {
        if(Auth::check()){
            $this->validate($request,[
                'name' => 'required|100',
                'image' =>'image|max:1999'

            ]);

            if ($request->hasfile('image'))
            {
                $filenameWithExt = $request->file('image')->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('image')->getClientOriginalExtension();
               $filenameToStore = $filename.'_'.time().'.'.$extension;
                $path= $request->file('image')->storeAs('public/companyimg', $filenameToStore);
                
                
                
               
            }
            else {
                $filenameToStore='';
            }


            $company = Company::create([
                'name' =>$request->input('name'),
                'description' =>$request->input('description'),
                'address' =>$request->input('address'),
                'contactno' =>$request->input('contactno'),
                'company_type' =>implode('',$request->input('companytype')),
                'imageurl' =>$filenameToStore,
                'user_id' => Auth::user()->id

            ]);
          
            if($company){
                echo('Successful');
                return redirect()->route('companies.show',['company' => $company->id])
                ->with('success','Company Created Successfully');
            }
            echo('Failure');

            return back()->withInput()->with('errors','Error Creating New Company');

        }
        else {
        return view('auth.login');
        }

    }

   
    public function show(Company $company)
    {
        $company = Company::find($company->id);

        return view('companies.show',['company'=>$company]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        $company = Company::find($company->id);

        return view('companies.edit',['company'=>$company]);

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
        //save data
 
        $companyUpdate = Company::where('id',$company->id)->update([
            'name'=>$request->input('name'),
            'description'=>$request->input('description')

        ]);
    if($companyUdate){
        return redirect()->route('companies.show',['company'=>$company->id])
        ->with('success','Company Updated Successfully');
    }
        return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        $findCompany = Company::find($company->id);
        if($findCompany->delete()){
            return redirect()->route('companies.index')
            ->with('success','Company deleted Successfully');

        }
        return back()->withInput()->with('error','Company could not be deleted');
    }
}
