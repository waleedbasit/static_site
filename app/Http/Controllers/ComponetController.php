<?php

namespace App\Http\Controllers;
use App\componet;
use Illuminate\Http\Request;

class ComponetController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except(['show']);
    }
    
    public function index()
    {
        
    }

   
    public function create()
    {
        return view("createComponet");
    }

    
    public function store(Request $request)
    {
    	
       $this->validate(request(), [
            'heading'=>'required',
            'subtext'=>'required',
            'pageHeading'=>'required',
            'image'=>'required'


        ]);
        componet::create([
            'heading'=>request('heading'),
            'subtext'=>request('subtext'),
            'pageHeading'=>request('pageHeading'),
            'image'=>request('image')

        ]);
        return back();
    }

    public function show($id)
    {
        $componet=componet::find($id);
        return view('fullComponet', compact('componet'));
    }
    
   
    public function update(Request $request, $id)
    {
        $this->validate(request(), [
            'heading'=>'required',
            'subtext'=>'required',
            'pageHeading'=>'required',
            'image'=>'required'


        ]);
         DB::table('componets')
            ->where('id', $id)
            ->update(['heading' => request('heading'),'subtext'=>request('subtext'),'pageHeading'=>request('pageHeading'),'image'=>request('image')]);




        return back();
    }

    public function destroy(componet $componet)
    {
        //
    }
}
