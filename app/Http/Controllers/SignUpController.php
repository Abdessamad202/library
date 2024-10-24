<?php

namespace App\Http\Controllers;

use App\Models\Utilisateur;
use Illuminate\Http\Request;
use App\Http\Requests\SignUpRequest;
use Illuminate\Support\Facades\Hash;

class SignUpController extends Controller
{
    //
    public function index()
    {
        return view('login.sign-up');
    }
    public function store(SignUpRequest $request){
        // return dd($request->validated());
        $filables = $request->validated();
        $filables["password"] = Hash::make($filables["password"]);
        Utilisateur::create($filables);
        return route("login.index");
    }
}
