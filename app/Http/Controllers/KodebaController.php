<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Kodeba;

class KodebaController extends Controller
{
    function index()
    {
        $data['list_kodeba'] = Kodeba::all();
        return view('admin.kodeba.index', $data);
    }
    function create()
    {
        return view('admin.kodeba.create');
    }

    function store()
    {
        $kodeba = new Kodeba();
        $kodeba['kode_ba'] = request('kode_ba');
        // $kodeba['kodebaname'] = request('kodebaname');
        $kodeba['deskripsi'] = request('deskripsi');
        // return $kodeba;
        $kodeba->save();
        return redirect('kodeba')->with('success', 'Data Berhasil Ditambah');
    }
    function show(Kodeba $kodeba)
    {
        $data['kodeba'] = $kodeba;
        return view('admin.kodeba.show', $data);
    }
    function edit(Kodeba $kodeba)
    {
        $data['kodeba'] = $kodeba;
        return view('admin.kodeba.edit', $data);
    }
    function update(Kodeba $kodeba)
    {
        $kodeba['kode_ba'] = request('kode_ba');
        $kodeba['deskripsi'] = request('deskripsi');
        // $kodeba['email'] = request('email');
        // if (request('password')) $kodeba['password'] = bcrypt(request('password'));
        $kodeba->save();
        return redirect('kodeba')->with('success', 'Data Berhasil Diedit');
    }
    function destroy(Kodeba $kodeba)
    {
        $kodeba->delete();
        // return $kodeba;
        return redirect('kodeba')->with('danger', 'Data Berhasil Dihapus');
    }
}
