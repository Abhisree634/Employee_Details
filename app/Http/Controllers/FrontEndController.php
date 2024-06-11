<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;
use App\Helpers\ToasterHelper;

class FrontEndController extends Controller
{
    public function Firstpages()
    {
        return view('welcome');
    }
    public function homepage(){
        $users = User::latest()->paginate(5);
        return view('welcome',compact('users'));
    }


    public function create(){
        return view('users.create');
    }
    
    
    public function save(Request $request){
        $attributes = $request->all();
        unset($attributes['_token']);
        $id=(request('id'));

        User::create([
        'name'=>request('name'),
        'email'=>request('email'),
        'city'=>request('city'),
        'mobile'=>request('mobile'),
        'password'=>request('password') 
    
        
        
    ]);


        $user=User::updateOrCreate([
            'email'=>request('email')
        ],[
            'name'=>request('name'),
            'city'=>request('city'),
            'mobile'=>request('mobile'),
            'password'=>request('password') 
          
            
    
         ]);
         ToasterHelper::success('message','User Creation Successfully !!');
         return redirect()->route('home');
        
        
         
        }
        public function update(Request $request){ 
        $attributes = $request->all();
        unset($attributes['_token']);
        $id=(request('id'));
        $update =  User::where('id', $id)->update($attributes);
        
        ToasterHelper::success('message','User Updated Successfully !!');
        return redirect()->route('home');
        
    }
    public function edit($id){
        $user = User::find(decrypt($id));
        return view('users.edit',compact('user'));
    }
    public function delete($id){
        User::find(decrypt($id))->delete();
        ToasterHelper::success('message','User Deleted Successfully !!');
        return redirect()->route('home');
    } 
    
    
}
