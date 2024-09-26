<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class RegisterController extends Controller
{
    //
    public function index(){
        return view("register.index", [
            "title" => "Register",
            "active" => "register"
        ]);
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            "name" => "required|max:255",
            "email" => "required|email:dns|unique:users",
            "password"=> "required|min:5|max:255"
        ]);

        User::create($validatedData);
        $request = session();

        $request->flash("success", "Registration successfull! Please Login");
        return redirect("/login");
    }
}
