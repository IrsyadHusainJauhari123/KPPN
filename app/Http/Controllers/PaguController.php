<?php

namespace App\Http\Controllers;

use App\Models\Pagu;
use Illuminate\Http\Request;

class PaguController extends Controller
{

    function index()
    {
        $data['list_pagu'] = Pagu::all();
        return view('admin.pagu.index', $data);
    }
    function create()
    {
        return view('admin.pagu.create');
    }

    function store()
    {
        $pagu = new Pagu();
        $pagu['kode_ba'] = request('kode_ba');
        $pagu['kode_kab'] = request('kode_kab');
        $pagu['kode_akun'] = request('kode_akun');
        $pagu['dipa'] = request('dipa');

        // return $pagu;
        $pagu->save();
        return redirect('pagu')->with('success', 'Data Berhasil Ditambah');
    }
    function show(Pagu $pagu)
    {
        $data['pagu'] = $pagu;
        return view('admin.pagu.show', $data);
    }
    function edit(Pagu $pagu)
    {
        $data['pagu'] = $pagu;
        return view('admin.pagu.edit', $data);
    }
    function update(Pagu $pagu)
    {
        // $kodeba['kodeba'] = request('kodeba');
        $pagu['kode_ba'] = request('kode_ba');
        $pagu['kode_akun'] = request('kode_akun');
        $pagu['kode_kab'] = request('kode_kab');
        $pagu['dipa'] = request('dipa');
        $pagu->save();
        return redirect('pagu')->with('success', 'Data Berhasil Diedit');
    }
    function destroy(Pagu $pagu)
    {
        $pagu->delete();
        // return $pagu;
        return redirect('pagu')->with('danger', 'Data Berhasil Dihapus');
    }

    
}
