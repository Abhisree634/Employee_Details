<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function homepage(){
        $users = User::all();
        return view('welcome',compact('users'));
    }

    public function create(){
        return view('users.create');
    }
    public function edit($id){
        $user = User::find(decrypt($id));
        return view('users.edit',compact('user'));
    }


    public function save(){
    //     $donor_name=request('donor_name');
    //     $blood_group=request('blood_group');
    //     $date_of_donation=request('date_of_donation');
    //     $quantity=request('quantity');


        User::create([
            'donor_name'=>request('donor_name'),
            'email'=>request('email'),
            'blood_group'=>request('blood_group'),
            'date_of_donation'=>request('date_of_donation'),
            'quantity'=>request('quantity'),
        ]);


        $user=User::updateOrCreate([
            'email'=>request('email'),
        ],[
            'donor_name'=>request('donor_name'),
            'blood_group'=>request('blood_group'),
            'date_of_donation'=>request('date_of_donation'),
            'quantity'=>request('quantity'),
        ]);
        return redirect()->route('home')
                ->with('message','User Created Successfully !!');
        
    }
    public function update(){
        $id= decrypt(request('id'));
        User::find($id)->update([
            'donor_name'=>request('donor_name'),
            'email'=>request('email'),
            'blood_group'=>request('blood_group'),
            'date_of_donation'=>request('date_of_donation'),
            'quantity'=>request('quantity'),
            ]); 

        return redirect()->route('home')
                 ->with('message','User Updated Successfully !!');
    }
    public function delete($id){
        User::find(decrypt($id))->delete();
        return redirect()->route('home')->with('message','User Deleted Successfully !!');
    } 
    
    
}
