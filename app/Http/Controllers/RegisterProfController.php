<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class RegisterProfController extends Controller
{
    public function index(){


        return view ('prof.register');
        
            }
        
            public function save(Request $request)
            {
               $this->validate($request, [
                   'name' => 'string|max:255',
                   'image' => 'mimes:jpg,png',
                   'password' => 'string|confirmed|min:8',
                   'email' => 'string|unique:profs|max:100000',
                   ]);
               $users = new \App\Models\Prof();
                 $users->name = $request['name'];
                 $users->email = $request['email'];
                 $users->password=Hash::make($request['password']);
                 if($request->hasFile('image')){
                   $users->image=$request->image->store('Admin');
               }
                 $users->save();
        
              
                 return redirect()->route('prof.login')->with('success','اضيف بنجاح');
            }
}
