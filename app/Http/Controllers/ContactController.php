<?php

namespace App\Http\Controllers;

use App\Http\Requests\contactRequest;
use App\Models\contactModel;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contact = contactModel::get();
        return view('contact', ['contact' => $contact]);
    }
    public function store(contactRequest $request)
    {
       contactModel::create($request->all());
        return redirect('/contact');
    }
}
