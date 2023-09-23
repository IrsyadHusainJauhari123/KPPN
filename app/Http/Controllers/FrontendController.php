<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kl;
use NumberFormatter;

class FrontendController extends Controller
{
    function showdepan(Request $request)
    {

        if ($request->filled('bulan')) {
            $bulan = $request->bulan;
        } else {
            $bulannow = date('m-y');
            $bulan = $bulannow;
        }

        // List data ktg dan kku group by (kode_akun)
        $data['list_ktg_1'] = Kl::selectRaw('sum(realisasi) AS jlm_realisasi')
            ->selectRaw('sum(pagu) as pg')
            ->selectRaw('kode_akun')
            ->where('kode_akun', 'not like', '6%')
            ->where('kode_kab', '1306')
            ->whereRaw("bulan ='$bulan'") // Menggunakan whereRaw untuk kondisi khusus
            ->groupBy('kode_akun')
            ->get();


        $data['kb'] = Kl::select('kode_ba')->distinct()->get();
        $data['ka'] = Kl::select('kode_akun')->distinct()->get();

        // return $data;
        // if ($request->filled('bulan')) {
        //     $bulan = "Where('bulan' ,  '$request->bulan')";
        // } else {
        //     $bulannow = date('m-y');
        //     $bulan = "Where('bulan',  '01-2023')";
        // }
        // //list data ktg dan kku group by(kode_akun)
        // $data['list_ktg_1'] = Kl::selectRaw('sum(realisasi) AS jlm_realisasi')
        //     ->selectRaw('sum(pagu) as pg')
        //     ->selectRaw('kode_akun')
        //     ->where('kode_akun', 'not like', '6%')
        //     ->Where('kode_kab', '1306')
        //     ->$bulan
        //     ->groupBy('kode_akun')
        //     ->get();

        $data['list_kku_1'] = Kl::selectRaw('sum(realisasi) AS jlm_realisasi')
            ->selectRaw('sum(pagu) as pg')
            ->selectRaw('kode_akun')
            ->where('kode_akun', 'not like', '6%')
            ->Where('kode_kab', '1311')
            ->groupBy('kode_akun')
            ->get();

        //list data ktg dan kku group by(kode_ba)
        $data['list_ktg_2'] = Kl::selectRaw('sum(realisasi) AS jlm_realisasi')
            ->selectRaw('sum(pagu) as pg')
            ->selectRaw('kode_ba')
            ->where('kode_akun', 'not like', '6%')
            ->Where('kode_kab', '1306')
            ->groupBy('kode_ba')
            ->get();

        $data['list_kku_2'] = Kl::selectRaw('sum(realisasi) AS jlm_realisasi')
            ->selectRaw('sum(pagu) as pg')
            ->selectRaw('kode_ba')
            ->where('kode_akun', 'not like', '6%')
            ->Where('kode_kab', '1311')
            ->groupBy('kode_ba')
            ->get();

        //list data ktg dan kku by(realisasi dan pagu)

        $list_ktg_11 = $data['list_ktg_11'] = Kl::selectRaw('sum(realisasi) AS jlm_realisasi')
            ->selectRaw('sum(pagu) as pg')
            ->selectRaw('bulan')
            ->where('kode_akun', 'not like', '6%')
            ->Where('kode_kab', '1306')
            ->groupBy('bulan')
            ->get();
        foreach ($list_ktg_11 as $list_11) {
            $list_11->persentase = round(($list_11->jlm_realisasi / $list_11->pg) * 100, 2);
        }

        $list_kku_20 = $data['list_kku_20'] = Kl::selectRaw('sum(realisasi) AS jlm_realisasi')
            ->selectRaw('sum(pagu) as pg')
            ->selectRaw('bulan')
            ->where('kode_akun', 'not like', '6%')
            ->Where('kode_kab', '1306')
            ->groupBy('bulan')
            ->get();
        foreach ($list_kku_20 as $list_20) {
            $list_20->persentase = round(($list_20->jlm_realisasi / $list_11->pg) * 100, 2);
        }
        // routing linebar//


        //list data ktg dan kku by (realisasi dan pagu)
        $data['list_ktg_6'] = Kl::selectRaw('sum(realisasi) AS jlm_realisasi')
            ->selectRaw('sum(pagu) as pg')
            ->selectRaw('kode_akun')
            ->where('kode_akun', 'like', '6%')
            ->Where('kode_kab', '1306')
            ->groupBy('kode_akun')
            ->get();

        $data['list_kku_7'] = Kl::selectRaw('sum(realisasi) AS jlm_realisasi')
            ->selectRaw('sum(pagu) as pg')
            ->selectRaw('kode_akun')
            ->where('kode_akun', 'like', '6%')
            ->Where('kode_kab', '1311')
            ->groupBy('kode_akun')
            ->get();

        return view('frontend.depan', $data);

    }
}
