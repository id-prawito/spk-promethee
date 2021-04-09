<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Helpers\Kustom;
use App\Kriteria;
use App\Alternatif;
use App\Evaluasi;
use App\Klasifikasi;
use App\Pengguna;
use App\Preferensi;
use App\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Mail\NotifAktivasi;
use App\Mail\NotifRegister;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function Home()
    {
        return view('pages/admin/home');
    }

    public function Semarang()
    {
        return view('pages/admin/semarang');
    }

    public function Bantuan()
    {
        return view('pages/admin/bantuan');
    }

    public function AlternatifRead()
    {
        $alternatifs = Alternatif::all();
        // $posts = DB::table('alternatifs')->get();
        $datas['getklasifikasi'] = DB::table('klasifikasis')->select('klasifikasis.id', 'kriterias.nama', 'klasifikasis.nilai', 'klasifikasis.klasifikasi')->join('kriterias', 'klasifikasis.kriteria', '=', 'kriterias.id')->get();
        // $hasil = json_decode($alternatifs, true);
        // dd($datas);
        return view('pages/data/alternatif/view', ['alternatifs' => $alternatifs], ['datas' => $datas]);
    }

    public function KriteriaRead()
    {
        $preferensis = DB::table('preferensis')->select('preferensis.id', 'preferensis.nama')->get();
        $kriterias = DB::table('kriterias')->select('kriterias.id', 'kriterias.nama', 'kriterias.minmaks', 'kriterias.pref', 'preferensis.nama as pref_nama', 'kriterias.q', 'kriterias.p', 'kriterias.bobot')->join('preferensis', 'preferensis.id', '=', 'kriterias.pref')->get();
        $data['allkriteria'] = Kriteria::all();
        $prefs = Preferensi::all();
        // dd($kriterias);
        return view('pages/data/kriteria', compact(['preferensis', 'kriterias', 'data', 'prefs']));
        // dd($result);
    }

    public function KriteriaUpdate(Request $request)
    {
        DB::table('kriterias')->where('id', $request->id)->update([
            'nama' => $request->nama,
            'minmaks' => $request->minmaks,
            'pref' => $request->pref,
            'q' => $request->q,
            'p' => $request->p
        ]);
        // dd($request);
        return redirect(route('kriteria.read'))->with('info', 'Kriteria berhasil di Update');
    }

    public function Preferensi()
    {
        $data = [
            'preferensis' => DB::table('preferensis')->get()
        ];
        return view('pages/data/preferensi', $data);
    }

    public function KriteriaView($id)
    {
        try {
            $alternatifs = DB::table('alternatifs')->select('alternatifs.id', 'alternatifs.nama', 'evaluasis.id', 'evaluasis.alternatif', 'evaluasis.kriteria', 'evaluasis.nilai')->join('evaluasis', 'alternatifs.id', '=', 'evaluasis.alternatif')->where('evaluasis.kriteria', '=', $id)->get();
            $datas['getkriteria'] = DB::table('kriterias')->select('kriterias.id', 'kriterias.nama')->find($id);
            $datas['getklasifikasi'] = DB::table('klasifikasis')->select('klasifikasis.id', 'kriterias.nama', 'klasifikasis.nilai', 'klasifikasis.klasifikasi')->join('kriterias', 'klasifikasis.kriteria', '=', 'kriterias.id')->get();
            // dd($datas['getkriteria']);
            return view('pages/data/kriteria/view', ['alternatifs' => $alternatifs], ['datas' => $datas]);
            
        } catch (\Exception $e) {

        }
        
    }

    public function Klasifikasi()
    {
        $klasifikasi = DB::table('klasifikasis')->select('klasifikasis.id', 'kriterias.nama', 'klasifikasis.nilai', 'klasifikasis.klasifikasi')->join('kriterias', 'klasifikasis.kriteria', '=', 'kriterias.id')->get();
        $kriteria = DB::table('kriterias')->select('id','nama')->get();
        // dd($kriteria);
        return view('pages/data/klasifikasi', ['klasifikasi' => $klasifikasi], ['kriteria' => $kriteria]);
    }

    public function KlasifikasiUpdate(Request $request)
    {
        DB::table('klasifikasis')->where('id', $request->id)->update(['klasifikasi' => $request->klasifikasi]);
        return redirect(route('klasifikasi.read'))->with('info', 'Klasifikasi Berhasil di Update');
    }

    public function KlasifikasiCreate(Request $request)
    {
        DB::table('klasifikasis')->insert([
            'kriteria' => $request->kriteria,
            'nilai' => $request->nilai,
            'klasifikasi' => $request->klasifikasi
        ]);
        return redirect()->back()->with('success', 'Klasifikasi Berhasil di Tambah');
    }

    public function KlasifikasiDelete($id)
    {
        DB::table('klasifikasis')->where('id', $id)->delete();
        return redirect()->back()->with('danger', 'Klasifikasi Berhasil di Hapus');
    }

    // Users Start (CRUD)
    public function Pengguna()
    {
        $datas = User::get();
        $users = DB::table('users')->get();
        // dd($datas);
        return view('pages/admin/users', compact('datas', 'users'));
    }

    public function CreatePengguna(Request $request)
    {

        $this->validate($request, [
            'name' => 'required|min:3|max:50',
            'email' => 'email',
            'password' => 'required|confirmed|min:6',
        ]);

        $data = new User();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->email_verified_at = now();
        $data->password = Hash::make($request->password);
        $data->role = $request->role;
        $data->status = false;
        $data->save();
        return back()->with('success', 'User berhasil dibuat');
    }

    public function UpdatePengguna(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3|max:50',
            'email' => 'required|string|email|max:255'
            // 'email' => 'required|string|email|max:255|unique:users'
        ]);
        $update = User::find($request->id);
        $update->name = $request->name;
        $update->email = $request->email;
        $update->role = $request->role;
        // dd($update);
        $update->save();
        return redirect()->route('pengguna.read')->with('success', 'User berhasil diperbarui');
    }

    public function DeletePengguna(Request $request)
    {
        $data = User::find($request->id);
        $data->delete();
        return back()->with('danger', 'User berhasil dihapus');
    }
    // Users End (CRUD)

    // Alternatif Start (CRUD)
    public function AlternatifUpdate(Request $request)
    {
        DB::table('alternatifs')->where('id', $request->id)->update([
            'nama' => $request->nama,
            'kode' => $request->kode
        ]);
        return redirect(route('alternatif.read'))->with('info', 'Alternatif Berhasil di Update');
    }

    public function AlternatifDelete($id)
    {
        DB::table('evaluasis')->where('alternatif', $id)->delete();
        DB::table('alternatifs')->where('id', $id)->delete();
        return redirect()->back()->with('danger', 'Alternatif Berhasil di Hapus');
    }

    public function AlternatifCreate(Request $request)
    {
        $this->validate($request, [
            'kode' => 'required|max:5|unique:alternatifs'
            // 'email' => 'required|string|email|max:255|unique:users'
        ]);

        DB::table('alternatifs')->insert([
            'nama' => $request->nama,
            'kode' => $request->kode
        ]);

        $getid = DB::table('alternatifs')->orderBy('id', 'desc')->first();
        // dd($getid->id);

        $panjang = count($request->kriteria) + 1;
        for ($i = 1; $i < $panjang; $i++) {
            DB::table('evaluasis')->insert([
                'alternatif' => $getid->id,
                'kriteria' => "$i",
                'nilai' => $request->kriteria[$i - 1],
                'submit_by' => Auth::user()->name
            ]);
        }

        return redirect()->back()->with('success', 'Alternatif Berhasil di Tambah');
    }
    // Alternatif End (CRUD)


    public function EvaluasiUpdate(Request $request)
    {
        // dd($request->all());
        $update = Evaluasi::find($request->id);
        $update->nilai = $request->nilai;
        $update->save();
        // dd($update);
        return back()->with('info', 'Nilai berhasil di Update');
    }

    public function DataCorona()
    {
        $response = Http::get('https://api.kawalcorona.com/indonesia');
        $indonesia = json_decode($response, true);
        // dd($indonesia);
    }

    public function Status(Request $request, $id)
    {
        $data = User::find($id);
        if ($data->status == 0) {
            $data->status = 1;
        } else {
            $data->status = 0;
        }
        $data->save();

        Mail::to($data->email)->send(new NotifAktivasi ($data));
        
        return Redirect::to('admin/user')->with('message', $data->name . ' Status has been changed succesfuly.');
    }
}
