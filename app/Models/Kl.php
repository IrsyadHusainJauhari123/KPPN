<?php

namespace App\Models;

use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kl extends Model
{
    protected $table = 'tb_kl';
    protected $fillable = ['kode_ba', 'kode_akun', 'kode_kab', 'blokir', 'kontrak', 'pagu', 'realisasi', 'bulan'];

    // $this->handleDelete();
    // if (request()->hasFile('file')) {
    //     $destination = "kppn/file";
    //     $randomStr = Str::random(5);
    //     $filename = $this->id . "-" . time() . "-" . $randomStr . "." . $qr->extension();
    //     $url = $file->storeAs($destination, $filename);
    //     $this->qr = "app/" . $url;
    //     $this->save();
    // }

    function handleUploadFile()
    {

        if (request()->hasFile('file')) {
            $foto = request()->file('file');
            $destination = "kppn/file";
            $randomStr = Str::random(5);
            $filename = $this->id . "-" . time() . "-" . $randomStr . "." . $foto->extension();
            $url = $foto->storeAs($destination, $filename);
            $this->foto = "app/" . $url;
            $this->save;
        }
    }
}
