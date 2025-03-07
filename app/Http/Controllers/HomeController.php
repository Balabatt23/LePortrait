<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        //$data = [
        //    'nama' => 'Muhamad yuki',
        //    'pekerjaan' => 'Programmer',
        //];
        //return view('home')->with($data);
        
        $nama = 'Muhamad Yuki'; 
        $pekerjaan = 'Programmer';
        return view('home', compact('nama', 'pekerjaan'));
    }

    public function contact() {
        return view('contact');
    }
}
