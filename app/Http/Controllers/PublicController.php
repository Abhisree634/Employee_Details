<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class PublicController extends Controller
{
   public function public(){
      $users = User::all();
      return view('public',compact('users'));
  }
}
