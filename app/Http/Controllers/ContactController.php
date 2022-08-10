<?php

namespace App\Http\Controllers;

use App\Http\Requests\contactRequest;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        return view('contact');
    }
    public function store(contactRequest $request){
        dd($request->all());
    }
                                                       
}
