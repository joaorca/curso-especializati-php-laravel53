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
        return 'INDEX';
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
