<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
        //$this->middleware('auth')->only(['contato', 'categoria']);
        //$this->middleware('auth')->except(['index']);
    }

    public function index()
    {
        $title = 'Título Teste';

        $xss = '<script>alert("ataque XSS");</script>';

        return view('site.home.index', compact('title','xss'));
    }

    public function contato()
    {
        return view('site.contact.index');
    }

    public function categoria($id)
    {
        return "CATEGOIA {$id}";
    }
}
