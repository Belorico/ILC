<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    //

    public function index()
    {
        return view('home');
    }

    public function products()
    {
        return view('pages.products');
    }

	public function services()
    {
        return view('pages.services');
    }

    public function marcas()
    {
        return view('pages.marcas');
    }

    public function ogrupo()
    {
        return view('pages.ogrupo');
    }

    public function contactos()
    {
        return view('pages.contactos');
    }

    public function organograma()
    {
        return view('pages.organograma');
    }
}

