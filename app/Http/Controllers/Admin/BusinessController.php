<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator, Hash, Auth, Str;
use App\Http\Models\Business;

class BusinessController extends Controller
{
    public function __Construct(){
        $this->middleware('auth');
        $this->middleware('isadmin');


    }
    public function getHome(){
        $bus = Business::orderBy('name','Desc')->get();
        $data = ['bus'=> $bus];
        return view('admin.business.home', $data);
        
    }
    public function postBusinessAdd(Request $request){
        $rules = [
            'name' => 'required',
        ];
        $messages = [
            'name.required' => 'Name business required.'
        ];
        $validator = Validator::make($request->all(),$rules, $messages);
        if($validator->fails()):
             return back()->withErrors($validator)->with('message', 'An error has occurred.')-> with('typealert', 'secondary');
        else:
            $b = new Business;
            $b-> name = e($request->input('name'));
            $b-> state = e($request->input('state'));
            $b-> slug = Str::slug($request->input('name'));
            if($b->save()):
                return back()->with('message', 'Successfully saved.')-> with('typealert', 'success');
            endif;


                
        endif;
    }

    public function getBusinessEdit($id){
        $buss = Business::find($id);
        $data =['buss' => $buss];
        return view('admin.business.edit', $data);
    }
}
