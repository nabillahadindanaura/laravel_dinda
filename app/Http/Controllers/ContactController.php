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

    public function delete($id){
    $data = contactModel::where('id' , $id)->forceDelete();
    return redirect('/contact');
    }

    public function FormUpload() {
    return view('post.upload');
    }

    public function upload(Request $request) {
     $request->validate([
        'gambar' => 'required|file|image|max:2000'
     ]);
      $namaFile = $request->gambar->getClient0riginalName();
      $path = $request->gambar->move('images, $namaFile');
      $path = str_replace('\\', '/', $path );
       
     echo 'Gambar di simpan di dalam  folder' . $path;
     $pathBaru= asset('image/ . $namaFile');
     echo 'Prose Upload berhasil, untuk melihat hasil gambar silahkan klik <a href="' . $pathBaru . '">LIHAT</a>';
      

    }

 
}
