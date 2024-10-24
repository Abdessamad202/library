<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LogInRequest;
use Illuminate\Support\Facades\Auth;

class LogInController extends Controller
{
    //
    public function index()
    {
        return view('login.login');
    }
    public function check(LogInRequest $request){
        if(Auth::attempt($request->validated())){
            return to_route("signup.index");
        }
        
    }
}
