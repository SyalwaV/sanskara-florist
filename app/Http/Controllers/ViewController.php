<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function home() {
        return view('visitor.pages.home');
    }

    public function selamat() {
        return view('visitor.pages.selamat');
    }

    public function pernikahan() {
        return view('visitor.pages.pernikahan');
    }
    public function berduka() {
        return view('visitor.pages.berduka');
    }

    public function kontak() {
        return view('visitor.pages.kontak');
    }
    public function aboutus() {
        return view('visitor.pages.aboutus');
    }
}
