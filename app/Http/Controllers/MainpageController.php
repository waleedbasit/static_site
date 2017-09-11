<?php

namespace App\Http\Controllers;
use App\mainpage;
use Illuminate\Http\Request;

class MainpageController extends Controller
{

	public function __construct(){
        $this->middleware('auth')->except(['index']);
    }

    public function index()
    {
        $main=mainpage::find('1');
        return view('index')->with('main', $main);
    }

    public function create()
    {
        //
    }

    
    public function store()
    {
                
    }

    public function show()
    {
        $main=mainpage::find('1');
        return view('mainpage', compact('main'));
    }
    
   
    public function update(Request $request)
    {
        $this->validate(request(), [
            'heading'=>'required',
            'logo'=>'required'


        ]);
         DB::table('mainpage')
            ->where('id', '1')
            ->update(['heading' => request('heading'),'logo'=>request('logo')]);




        return back();
    }

    public function destroy()
    {
        //
    }
}
