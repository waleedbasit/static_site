<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\aboutpage;
class AboutpageController extends Controller
{
	public function __construct(){
        $this->middleware('auth')->except(['show']);
    }

    public function index()
    {
        
    }

   
    public function create()
    {
        //
    }

    
    public function store()
    {
                
    }

   public function show($id)
    {
        $about=aboutpage::find($id);
        return view('about', compact('about'));
    }
    
   
    public function update(Request $request, $id)
    {
        $this->validate(request(), [
            'heading'=>'required',
            'subtext'=>'required'


        ]);
         DB::table('aboutpage')
            ->where('id', $id)
            ->update(['heading' => request('heading'),'subtext'=>request('subtext')]);




        return back();
    }
    public function destroy()
    {
        //
    }
}
