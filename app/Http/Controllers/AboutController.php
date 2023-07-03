<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Moduleabout;

class AboutController extends Controller
{
    //
    public function index()
    {
        # code...
        $data=Moduleabout::first();
        //return $data;
        return view('appweb.aboutcomponent', compact('data'));
    }
    public function store(Request $request)
    {
        # code...
        //return $request;

        # code...
        if ($request->hasFile('archivo1') && $request->hasFile('archivo2')) {
            # code...
            $file1=$request->file('archivo1');
            $name1=time().$file1->getClientOriginalName();
            $file1->move(public_path().'/aboutimages/', $name1);
/*
image 2
*/
            $file2=$request->file('archivo2');
            $name2=time().$file2->getClientOriginalName();
            $file2->move(public_path().'/aboutimages/', $name2);

            Moduleabout::where('id',1)->update([
                'aboutdescription'=>$request->newdescription,
                'aboutexperience'=>$request->newexperience,
                'aboutmenu'=>$request->newmenu,
                'aboutplace'=>$request->newplaces,
                'aboutcharacters'=>$request->newcharacters,
                'imageabout1'=> $name1,
                'imageabout2'=> $name2,
                'user_id'=>'1'
            ]);
            return redirect()->route('aboutsettings.index')
                        ->with('success','Segmento Acerca de nosotros ha sido actualizado');

        }else {
            # code...
            Moduleabout::where('id',1)->update([
                'aboutdescription'=>$request->newdescription,
                'aboutexperience'=>$request->newexperience,
                'aboutmenu'=>$request->newmenu,
                'aboutplace'=>$request->newplaces,
                'aboutcharacters'=>$request->newcharacters,
                'user_id'=>'1'
            ]);
            return redirect()->route('aboutsettings.index')
            ->with('success','Segmento Acerca de nosotros ha sido actualizado');
        }
    }
    public function update(Request $request)
    {
        
        
    }
}
