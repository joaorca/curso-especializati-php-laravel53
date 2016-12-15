<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteController extends Controller
{
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
