<?php


use App\Kriteria;
use App\Alternatif;
use App\Evaluasi;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Routing\Route;
use App\User;

class Kustom
{
    public static function test()
    {
        return 'mantaps akhirnya bisa';
    }

    public static function MenuKriteria()
    {
        $kriterias = Kriteria::all();
        return $kriterias;
    }

    public static function CountKriterias()
    {
        $countkriterias = Kriteria::count();
        return $countkriterias;
    }

    public static function CountAlternatifs()
    {
        $countalternatifs = Alternatif::count();
        return $countalternatifs;
    }

    public static function CountUsers()
    {
        $countusers = User::count();
        return $countusers;
    }

    public static function NamaAlternatifs()
    {
        $namaalternatifs = Alternatif::all('nama');
        return $namaalternatifs;
    }

    public static function JoinanTabel($id)
    {
        // AMBIL SEMUA
        // $data = DB::table('alternatifs')->select('alternatifs.nama','evals.id as id','kriterias.nama as kriteria','evals.nilai as nilai')->join('evals','alternatifs.id','=','evals.alternatif')->join('kriterias','evals.kriteria','=','kriterias.id')->get();

        // AMBIL BERDASARKAN ID
        // $data = DB::table('alternatifs')->select('alternatifs.id', 'alternatifs.nama', 'evals.id', 'evals.alternatif', 'evals.kriteria', 'evals.nilai', 'klasifikasis.klasifikasi')->join('evals', 'alternatifs.id', '=', 'evals.alternatif')->join('klasifikasis', 'evals.nilai', '=', 'klasifikasis.nilai')->where('alternatifs.id', '=', $id)->get();
        $data = DB::table('alternatifs')->select('alternatifs.id', 'alternatifs.nama', 'evaluasis.id', 'evaluasis.alternatif', 'evaluasis.kriteria', 'evaluasis.nilai')->join('evaluasis', 'alternatifs.id', '=', 'evaluasis.alternatif')->where('alternatifs.id', '=', $id)->get();
        // dd($data);
        return $data;
    }

    public static function LeavingEntering()
    {
        $pref = Kustom::Preferensi();
        $pref = $pref[1];
        $hasil = array(array());
        $cols = 0;
        $rows = 0;
        for ($i = 0; $i < count($pref); $i++) {
            array_push($hasil[$rows], $pref[$i]);
            $cols += 1;
            if ($cols == Kustom::CountAlternatifs()) {
                if (!($i == count($pref) - 1)) {
                    array_push($hasil, array());
                }
                $rows += 1;
                $cols = 0;
            }
        }
        // dd($hasil);

        $arraytlf = $arrayleaving = $arraytef = $arrayentering = array();
        for ($y = 0; $y < Kustom::CountAlternatifs(); $y++) {
            $tlf = $tef = 0;
            for ($x = 0; $x < Kustom::CountAlternatifs(); $x++) {
                $tlf = $tlf + $hasil[$y][$x]['value'];
                $tef = $tef + $hasil[$x][$y]['value'];
            }
            array_push($arraytlf, number_format($tlf, 4));
            array_push($arraytef, number_format($tef, 4));
            $leaving = $tlf / (Kustom::CountAlternatifs() - 1);
            $entering = $tef / (Kustom::CountAlternatifs() - 1);
            array_push($arrayleaving, number_format($leaving, 4));
            array_push($arrayentering, number_format($entering, 4));
        }
        // dd($arrayleaving);
        // dd($arraytef);
        // dd($arrayentering);

        $arrayall = $arraynet = array();
        $no = 1;
        for ($n = 0; $n < Kustom::CountAlternatifs(); $n++) {
            $net = $arrayleaving[$n] - $arrayentering[$n];
            $temp = [
                'alternatif' => $no,
                'net' => $net
            ];
            $no++;
            array_push($arraynet, $temp);
        }
        // dd($arraynet);
        array_push($arrayall, $hasil, $arraytlf, $arrayleaving, $arraytef, $arrayentering);
        // dd($arrayall);
        return $arrayall;
    }
    // Perhitungan Leaving & Entering end


    public static function Net()
    {
        $arrayall = Kustom::LeavingEntering();
        $namaalternatifs = Kustom::NamaAlternatifs();
        $arraynet = array();
        // dd($arrayall);
        for ($n = 0; $n < Kustom::CountAlternatifs(); $n++) {
            $net = $arrayall[2][$n] - $arrayall[4][$n];
            $temp = [
                'alternatif' => $namaalternatifs[$n]['nama'],
                'net' => $net
            ];
            array_push($arraynet, $temp);
        }

        $ranks = array();
        foreach ($arraynet as $key => $row) {
            $ranks[$key] = $row['net'];
        }
        array_multisort($ranks, SORT_DESC, $arraynet);

        $no = 1;
        for ($x = 0; $x < count($arraynet); $x++) {

            if ($x > 0 && $arraynet[$x]['net'] == $arraynet[$x - 1]['net']) {
                $arraynet[$x]['rank'] = $arraynet[$x - 1]['rank'];
            } else {
                $arraynet[$x]['rank'] = $no;
                $no++;
            }
        }
        return $arraynet;
    }

    public static function Preferensi()
    {
        $d[] = Kustom::Deviasi();
        // dd($d);
        $preferensi = $pref = array();
        foreach ($d as $d) {
            for ($no = 0; $no < count($d); $no++) {
                // dd($d[$no]['tipe']);
                if ($d[$no]['tipe'] == 'Usual') {
                    if ($d[$no]['deviasi'] == 0) {
                        $nilai = 0;
                        $pref = [
                            'altx' => $d[$no]['alternatifx'],
                            'alty' => $d[$no]['alternatify'],
                            'kriteria' => $d[$no]['kriteria'],
                            'tipe' => $d[$no]['tipe'],
                            'nilai' => $nilai,
                            'ip' => $nilai * $d[$no]['bobot']
                        ];
                    } else {
                        $nilai = 1;
                        $pref = [
                            'altx' => $d[$no]['alternatifx'],
                            'alty' => $d[$no]['alternatify'],
                            'kriteria' => $d[$no]['kriteria'],
                            'tipe' => $d[$no]['tipe'],
                            'nilai' => $nilai,
                            'ip' => $nilai * $d[$no]['bobot']
                        ];
                    }
                } elseif ($d[$no]['tipe'] == 'Quasi') {
                    if (-$d[$no]['q'] <= $d[$no]['deviasi'] and $d[$no]['deviasi'] <= $d[$no]['q']) {
                        // dd(-$d[$no]['p']);
                        $nilai = 0;
                        $pref = [
                            'altx' => $d[$no]['alternatifx'],
                            'alty' => $d[$no]['alternatify'],
                            'kriteria' => $d[$no]['kriteria'],
                            'tipe' => $d[$no]['tipe'],
                            'nilai' => $nilai,
                            'ip' => $nilai * $d[$no]['bobot']
                        ];
                    } elseif ($d[$no]['deviasi'] < -$d[$no]['q'] or $d[$no]['deviasi'] > $d[$no]['q']) {
                        $nilai = 1;
                        $pref = [
                            'altx' => $d[$no]['alternatifx'],
                            'alty' => $d[$no]['alternatify'],
                            'kriteria' => $d[$no]['kriteria'],
                            'tipe' => $d[$no]['tipe'],
                            'nilai' => $nilai,
                            'ip' => $nilai * $d[$no]['bobot']
                        ];
                    }
                } elseif ($d[$no]['tipe'] == 'Linier') {
                    if (-$d[$no]['p'] <= $d[$no]['deviasi'] and $d[$no]['deviasi'] <= $d[$no]['p']) {
                        $nilai = ($d[$no]['deviasi'] / $d[$no]['p']);
                        $pref = [
                            'altx' => $d[$no]['alternatifx'],
                            'alty' => $d[$no]['alternatify'],
                            'kriteria' => $d[$no]['kriteria'],
                            'tipe' => $d[$no]['tipe'],
                            'nilai' => $nilai,
                            'ip' => $nilai * $d[$no]['bobot']
                        ];
                    } elseif ($d[$no]['deviasi'] < -$d[$no]['p'] or $d[$no]['deviasi'] > $d[$no]['p']) {
                        $nilai = 1;
                        $pref = [
                            'altx' => $d[$no]['alternatifx'],
                            'alty' => $d[$no]['alternatify'],
                            'kriteria' => $d[$no]['kriteria'],
                            'tipe' => $d[$no]['tipe'],
                            'nilai' => $nilai,
                            'ip' => $nilai * $d[$no]['bobot']
                        ];
                    }
                } elseif ($d[$no]['tipe'] == 'Level') {
                    if (abs($d[$no]['deviasi']) <= $d[$no]['q']) {
                        $nilai = 0;
                        $pref = [
                            'altx' => $d[$no]['alternatifx'],
                            'alty' => $d[$no]['alternatify'],
                            'kriteria' => $d[$no]['kriteria'],
                            'tipe' => $d[$no]['tipe'],
                            'nilai' => $nilai,
                            'ip' => $nilai * $d[$no]['bobot']
                        ];
                    } elseif ($d[$no]['q'] < abs($d[$no]['deviasi']) and abs($d[$no]['deviasi']) <= $d[$no]['p']) {
                        $nilai = 0.5;
                        $pref = [
                            'altx' => $d[$no]['alternatifx'],
                            'alty' => $d[$no]['alternatify'],
                            'kriteria' => $d[$no]['kriteria'],
                            'tipe' => $d[$no]['tipe'],
                            'nilai' => $nilai,
                            'ip' => $nilai * $d[$no]['bobot']
                        ];
                    } elseif ($d[$no]['p'] < abs($d[$no]['deviasi'])) {
                        $nilai = 1;
                        $pref = [
                            'altx' => $d[$no]['alternatifx'],
                            'alty' => $d[$no]['alternatify'],
                            'kriteria' => $d[$no]['kriteria'],
                            'tipe' => $d[$no]['tipe'],
                            'nilai' => $nilai,
                            'ip' => $nilai * $d[$no]['bobot']
                        ];
                    }
                } elseif ($d[$no]['tipe'] == 'Area') {
                    if (abs($d[$no]['deviasi']) <= $d[$no]['q']) {
                        $nilai = 0;
                        $pref = [
                            'altx' => $d[$no]['alternatifx'],
                            'alty' => $d[$no]['alternatify'],
                            'kriteria' => $d[$no]['kriteria'],
                            'tipe' => $d[$no]['tipe'],
                            'nilai' => $nilai,
                            'ip' => $nilai * $d[$no]['bobot']
                        ];
                    } elseif ($d[$no]['q'] < abs($d[$no]['deviasi']) and abs($d[$no]['deviasi']) <= $d[$no]['p']) {
                        $nilai = (abs($d[$no]['deviasi']) - $d[$no]['q']) / ($d[$no]['p'] - $d[$no]['q']);
                        $pref = [
                            'altx' => $d[$no]['alternatifx'],
                            'alty' => $d[$no]['alternatify'],
                            'kriteria' => $d[$no]['kriteria'],
                            'tipe' => $d[$no]['tipe'],
                            'nilai' => $nilai,
                            'ip' => $nilai * $d[$no]['bobot']
                        ];
                    } elseif ($d[$no]['p'] < abs($d[$no]['deviasi'])) {
                        $nilai = 1;
                        $pref = [
                            'altx' => $d[$no]['alternatifx'],
                            'alty' => $d[$no]['alternatify'],
                            'kriteria' => $d[$no]['kriteria'],
                            'tipe' => $d[$no]['tipe'],
                            'nilai' => $nilai,
                            'ip' => $nilai * $d[$no]['bobot']
                        ];
                    }
                } elseif ($d[$no]['tipe'] == 'Gaussian') {
                    echo $no . "Ini Gaussian <br>";
                }
                array_push($preferensi, $pref);
            }
        }

        $criterias = array(
            "Vegetasi Area G. E." => array(),
            "Volume Material T." => array(),
            "Luas Daerah Y. A. D." => array(),
            "Volume Tampungan E." => array(),
            "Lama Operasi" => array(),
            "Harga Air/M3" => array(),
            "Akses Jalan Menuju S" => array()
        );

        // dd($criterias);

        foreach ($preferensi as $p) {
            if (($p['kriteria']) == 'Vegetasi Area G. E.') {
                array_push($criterias["Vegetasi Area G. E."], $p);
            } elseif (($p['kriteria']) == 'Volume Material T.') {
                array_push($criterias["Volume Material T."], $p);
            } elseif (($p['kriteria']) == 'Luas Daerah Y. A. D.') {
                array_push($criterias["Luas Daerah Y. A. D."], $p);
            } elseif (($p['kriteria']) == 'Volume Tampungan E.') {
                array_push($criterias["Volume Tampungan E."], $p);
            } elseif (($p['kriteria']) == 'Lama Operasi') {
                array_push($criterias["Lama Operasi"], $p);
            } elseif (($p['kriteria']) == 'Harga Air/M3') {
                array_push($criterias["Harga Air/M3"], $p);
            } elseif (($p['kriteria']) == 'Akses Jalan Menuju S') {
                array_push($criterias["Akses Jalan Menuju S"], $p);
            }
            // dd($p['kriteria'] == 'Luas Daerah Y. A. G.');
        }
        $hasil = array();
        for ($i = 0; $i < count($criterias['Vegetasi Area G. E.']); $i++) {
            $calculation = $criterias['Vegetasi Area G. E.'][$i]['ip'] + $criterias['Volume Material T.'][$i]['ip'] + $criterias['Luas Daerah Y. A. D.'][$i]['ip'] + $criterias['Volume Tampungan E.'][$i]['ip'] + $criterias['Lama Operasi'][$i]['ip'] + $criterias['Harga Air/M3'][$i]['ip'] + $criterias['Akses Jalan Menuju S'][$i]['ip'];
            $temp = array(
                "altx" => $criterias['Vegetasi Area G. E.'][$i]['altx'],
                "alty" => $criterias['Vegetasi Area G. E.'][$i]['alty'],
                "value" => $calculation
            );
            // dd($temp);
            array_push($hasil, $temp);
        }
        $arrays = array();
        array_push($arrays, $preferensi, $hasil);
        return $arrays;
    }
    // Perhitungan Indeks Preferensi End

    public static function Deviasi()
    {
        for ($id = 1; $id <= Kustom::CountKriterias(); $id++) {
            $getjoins = Kustom::JoinEvaluasi($id);
            $datas[] = $getjoins;
        }
        // dd($datas);
        foreach ($datas as $data => $value) {
            for ($x = 0; $x < Kustom::CountAlternatifs(); $x++) {
                for ($y = 0; $y < Kustom::CountAlternatifs(); $y++) {
                    $nilaideviasi[] = [
                        'alternatifx' => $value[$x]->alternatif,
                        'alternatify' => $value[$y]->alternatif,
                        'kriteria' => $value[$x]->kriteria,
                        'tipe' => $value[$x]->tipe,
                        "q" => $value[$x]->q,
                        "p" => $value[$x]->p,
                        'bobot' => $value[$x]->bobot,
                        "deviasi" => ($value[$x]->nilai) - ($value[$y]->nilai)
                    ];
                }
            }
        }
        // dd($nilaideviasi);
        // return $datas;
        return $nilaideviasi;
    }
    // Perhitungan Deviasi End

    public static function JoinEvaluasi($id)
    {
        $joins = DB::table('evaluasis')->select('evaluasis.id as id', 'alternatifs.nama as alternatif', 'kriterias.nama as kriteria', 'kriterias.q as q', 'kriterias.p as p', 'preferensis.nama as tipe', 'kriterias.bobot', 'evaluasis.nilai as nilai')->join('alternatifs', 'alternatifs.id', '=', 'evaluasis.alternatif')->join('kriterias', 'evaluasis.kriteria', '=', 'kriterias.id')->join('preferensis', 'kriterias.pref', '=', 'preferensis.id')->where('kriterias.id', '=', $id)->get();
        // dd($joins);
        // return view('coba');
        return $joins;
    }
}
