<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        return view('site_principal.index');
    }

    public function contatos()
    {
        return view('site_principal.contatos');
    }

    public function contemplados()
    {
        return view('site.contemplados');
    }

    public function editais()
    {
        return view('site.editais');
    }

    public function listaespera()
    {
        return view('site.listaespera');
    }
}
