<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Kriteria;
use App\Alternatif;
use App\Klasifikasi;
use App\Preferensi;
use Illuminate\Support\Facades\DB;
use Kustom;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        // Data Home
        $datas['alternatifs'] = Alternatif::get();
        $datas['kriterias'] = Kriteria::get();
        $datas['klasifikasis'] = Klasifikasi::get();
        $datas['prefs'] = Preferensi::get();
        $preferensis = DB::table('preferensis')->select('preferensis.id', 'preferensis.nama')->get();
        $kriterias = DB::table('kriterias')->select('kriterias.id', 'kriterias.nama', 'kriterias.minmaks', 'kriterias.pref', 'preferensis.nama as pref_nama', 'kriterias.q', 'kriterias.p', 'kriterias.bobot')->join('preferensis', 'preferensis.id', '=', 'kriterias.pref')->get();
        $data['allkriteria'] = Kriteria::all();
        $prefs = Preferensi::all();
        $arraynet = Kustom::Net();


        //Corona Data
        $indonesia = Http::get('https://covid.mathdro.id/api/countries/indonesia')->json();
        $corona_jawaTengah = $this->dataCorona();
        // Retrieving Json Data
        $jsonData = file_get_contents("https://pomber.github.io/covid19/timeseries.json");
        $corona = json_decode($jsonData, true);
        // Counting the number of days in the Json File
        foreach ($corona as $key => $value) {
            $days_count = count($value) - 1;
            $days_count_prev = $days_count - 1;
        }
        $yesterday = date("Y-m-d", mktime(0, 0, 0, date("m"), date("d") - 1, date("Y")));
        return view('home', compact(['preferensis', 'kriterias', 'data', 'prefs', 'datas', 'arraynet', 'corona_jawaTengah', 'indonesia', 'corona', 'days_count', 'days_count_prev', 'yesterday']));
    }


    public function dataCorona()
    {
        $jawaTengah = Http::get('https://api.kawalcorona.com/indonesia/provinsi')
            ->json();
        return $jawaTengah;
    }
}
