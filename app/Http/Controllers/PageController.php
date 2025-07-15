<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {
        return view('pages.home');
    }

    public function services() {
        return view('pages.services');
    }

    public function about() {
        return view('pages.about');
    }

    public function testimoni() {
        return view('pages.testimoni');
    }

    public function faq() {
        return view('pages.faq');
    }

    // Layanan

    public function pendirianusaha() {
        return view('pages.layanan.pendirian');
    }
    public function legalitas() {
        return view('pages.layanan.legalitas');
    }
    public function paketgabungan() {
        return view('pages.layanan.paket');
    }
    public function perpajakan() {
        return view('pages.layanan.perpajakan');
    }

}
