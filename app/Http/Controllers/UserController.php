<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kustom;
use Illuminate\Support\Facades\DB;
use App\Kriteria;
use App\Alternatif;
use App\Klasifikasi;
use App\Preferensi;

class UserController extends Controller
{
    public function Welcome()
    {
        $datas['alternatifs'] = Alternatif::get();
        $datas['kriterias'] = Kriteria::get();
        $datas['klasifikasis'] = Klasifikasi::get();
        $datas['prefs'] = Preferensi::get();

        $preferensis = DB::table('preferensis')->select('preferensis.id', 'preferensis.nama')->get();
        $kriterias = DB::table('kriterias')->select('kriterias.id', 'kriterias.nama', 'kriterias.minmaks', 'kriterias.pref', 'preferensis.nama as pref_nama', 'kriterias.q', 'kriterias.p', 'kriterias.bobot')->join('preferensis', 'preferensis.id', '=', 'kriterias.pref')->get();
        $data['allkriteria'] = Kriteria::all();
        $prefs = Preferensi::all();
        // dd($kriterias);

        // $arrayall = Kustom::LeavingEntering();
        $arraynet = Kustom::Net();
        return view('welcome', compact(['preferensis', 'kriterias', 'data', 'prefs', 'datas', 'arraynet']));
    }
}
