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
        $teste = 123;
        $teste2 = 321;
        $teste3 = 132;
        return view('site.home.teste', compact('teste', 'teste2', 'teste3'));
    }

    public function contato()
    {
        return 'CONTATO';
    }

    public function categoria($id)
    {
        return "CATEGOIA {$id}";
    }
}
