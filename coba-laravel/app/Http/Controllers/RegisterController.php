<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title'=>'Register',
            'active' =>'register'
        ]);
    }
    public function store(Request $request)
    {
      $validatedData =  $request->validate([
           'name' => 'required|max:155',
           'username'=> ['required','min:3', 'max:255','unique:user'],
            'email'=>'required|email:dns|unique:user',
            'password' => 'required|min:5|max|255'

        ]);

        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        // $request->session()->flash('success','Registration successfull please login');

        return redirect('/login')->wit('success', 'Registration successfull please login');

    }
}
