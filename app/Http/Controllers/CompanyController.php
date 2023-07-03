<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    //
    public function index()
    {
        # code...
        $data=Company::first();
        return view('appweb.companycomponent', compact('data'));
    }
    public function store(Request $request)
    {
        # code...
if ($request->hasFile('archivo')) {
    # code...
    $file=$request->file('archivo');
    $name=time().$file->getClientOriginalName();
    $file->move(public_path().'/CompanyImages/', $name);
    
Company::where('id',1)->update([
    //'company_name'=> $request->newdescription,
    'company_description'=>$request->newdescription,
    'company_image'=>$name,
    'company_nit'=>$request->new_nit,
    'company_phone'=>$request->new_phone,
    'company_email'=>$request->new_email,
    'company_address'=>$request->new_address,
    
]);
return redirect()->route('companysettings.index')
                        ->with('success','Los datos de la empresa se han actualizado con exito');

} else {
    # code...
    //dd($request->new_entryprice);
    Company::where('id',1)->update([
        //'company_name'=> $request->newdescription,
        'company_description'=>$request->newdescription,
        'company_nit'=>$request->new_nit,
        'company_phone'=>$request->new_phone,
        'company_email'=>$request->new_email,
        'company_address'=>$request->new_address,
        'company_entryprice'=>$request->new_entryprice
    ]);
    return redirect()->route('companysettings.index')
                        ->with('success','Los datos de la empresa se han actualizado con exito');

}

           
    }
}
