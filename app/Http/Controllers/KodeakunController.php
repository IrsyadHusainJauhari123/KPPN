<?php

namespace App\Http\Controllers;

use App\Models\Kodeakun;

use Illuminate\Http\Request;

class KodeakunController extends Controller
{
    function index()
    {
        $data['list_kodeakun'] = Kodeakun::all();
        return view('admin.kodeakun.index', $data);
    }

    function create()
    {
        return view('admin.kodeakun.create');
    }

    function store()
    {
        $kodeakun = new Kodeakun();
        $kodeakun['kode_akun'] = request('kode_akun');
        $kodeakun['deskripsi'] = request('deskripsi');
        $kodeakun->save();
        return redirect('kodeakun')->with('success', 'Data Berhasil Ditambahkan');
    }

    function edit(Kodeakun $kodeakun)
    {
        $data['kodeakun'] = $kodeakun;
        // return $kodeakun;
        return view('admin.kodeakun.edit', $data);
    }
    function update(Kodeakun $kodeakun)
    {
        $kodeakun['kode_akun'] = request('kode_akun');
        $kodeakun['deskripsi'] = request('deskripsi');
        // $kodeakun['email'] = request('email');
        // if (request('password')) $kodeakun['password'] = bcrypt(request('password'));
        $kodeakun->save();
        // return $kodeakun;
        return redirect('kodeakun')->with('success', 'Data Berhasil Diedit');
    }




    function destroy(Kodeakun $kodeakun)
    {
        $kodeakun->delete();
        // return $;
        return redirect('kodeakun')->with('danger', 'Data Berhasil Dihapus');
    }
}
