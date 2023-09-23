<?php


namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Kl;
use App\Models\UploadDokumen;

class HomeController extends Controller
{
    function showcomponents()
    {
        return view('components.admin');
    }

    function showdokumen()
    {

        return view('admin.dokumen');
    }

    function showuser()
    {
        return view('admin.user');
    }

    function showkl()
    {
        return view('admin.kl');
    }

    // function showberanda()
    // {
    //     $data = ['list_kl'] = Kl::all();
    //     return view('admin.beranda.index', $data);
    // }

    // function showberanda()
    // {
    //     return view('admin.beranda.index');
    // }

    // function showberanda()
    // {
    //     $data['list_kl'] = Kl::all();
    //     return view('admin.beranda.index', $data);
    // }
}
