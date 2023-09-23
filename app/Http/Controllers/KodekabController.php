<?php

namespace App\Http\Controllers;

use App\Models\Kodeba;
use App\Models\Kodekab;
use Illuminate\Http\Request;

class KodekabController extends Controller
{
    function index()
    {
        $data['list_kodekab'] = Kodekab::all();
        return view('admin.kodekab.index', $data);
    }

    function create()
    {
        return view('admin.kodekab.index');
    }

    function store()
    {
        $kodekab = new Kodekab();
        $kodekab['kode_kab'] = Request('kode_kab');
        $kodekab['deskripsi'] = request('deskripsi');
        $kodekab->save();
        return redirect('kodekab')->with('success', 'Data Berhasil DiTamabah');
    }

    function edit(Kodekab $kodekab)
    {
        $data['kodekab'] = $kodekab;
        return view('admin.kodekab.edit', $data);
    }

    function update(Kodekab $kodekab)
    {
        $kodekab['kode_kab'] = request('kode_kab');
        $kodekab['deskripsi'] = request('deskripsi');
        // return $kodekab;
        $kodekab->save();
        return redirect('kodekab')->with('success', 'Data Berhasil Diedit');
    }

    function destroy(Kodekab $kodekab)
    {
        $kodekab->delete();
        return redirect('kodekab')->with('danger', 'Data Berhasil DiHapus');
    }
}
