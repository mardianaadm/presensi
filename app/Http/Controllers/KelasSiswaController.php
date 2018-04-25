<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Jurusan;
use App\UrutanKelas;
use App\KelasSiswa;
use App\DataSiswa;
use App\DataKelasSiswa;
use App\TahunAjaran;
use Alert;
use Auth;
use Illuminate\Support\Facades\DB;

class KelasSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_siswa = DataSiswa::all();
        $jurusan = Jurusan::all();
        $urutan_kelas = UrutanKelas::all();
        $KelasSiswa = KelasSiswa::
            join('jurusan','kelas_siswa.id_jurusan','=','jurusan.id_jurusan')
            ->join('urutan_kelas','kelas_siswa.id_urutan_kelas','=','urutan_kelas.id_urutan_kelas')
            ->get();
        return view('kelas_siswa/kelas_siswa')
        ->with('KelasSiswa', $KelasSiswa)
        ->with('jurusan', $jurusan)
        ->with('urutan_kelas', $urutan_kelas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*cek nama dan urutan ada di DB*/
        $cek = KelasSiswa::where('tingkat', $request->tingkat)
        ->where('id_jurusan', $request->nama_jurusan)
        ->where('id_urutan_kelas', $request->nama_urutan_kelas)
        ->count();
        if ($cek>0) { /*jika lebih dari 0 maka akan kembali ke halaman kelas_siswa*/
            Alert::success('Data Sudah Ada');
            return redirect('kelas_siswa');
        }else{ /*jika tidak maka menampilkan sesuai yg diinputkan*/
            $kelas = new KelasSiswa;
            $kelas->tingkat = $request->tingkat;
            $kelas->id_jurusan = $request->nama_jurusan;
            $kelas->id_urutan_kelas = $request->nama_urutan_kelas;
            $kelas->id_user = Auth::user()->id_user;
            $kelas->save();
            Alert::success('Data Berhasil Ditambahkan');
            return redirect('kelas_siswa');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($tingkat, $jurusan, $urutan)
    {
        $tahun_ajaran = TahunAjaran::all();
        $kelas_siswa = KelasSiswa::all();
        $data_siswa = DB::table('data_siswa')
        ->whereNotIn('id_siswa', function($q){
            $q->select('id_siswa')->from('data_siswa');
        })->get();
        // ->rightJoin('data_siswa', 'data_kelas_siswa.id_siswa', '=', 'data_siswa.id_siswa')
        // ->get();
        $data_kelas_siswa = DataKelasSiswa::query()
        ->join('kelas_siswa', 'kelas_siswa.id_kelas_siswa', '=', 'data_kelas_siswa.id_kelas_siswa')
        ->join('jurusan','kelas_siswa.id_jurusan','=','jurusan.id_jurusan')
        ->join('urutan_kelas','kelas_siswa.id_urutan_kelas','=','urutan_kelas.id_urutan_kelas')
        ->join('data_siswa','data_siswa.id_siswa','=','data_kelas_siswa.id_siswa')
        ->where('kelas_siswa.tingkat', $tingkat)
        ->where('jurusan.nama_jurusan', $jurusan)
        ->where('urutan_kelas.nama_urutan_kelas', $urutan)
        ->get();
        return view('kelas_siswa/detail_data_siswa')
        ->with('data_siswa', $data_siswa)
        ->with('data_kelas_siswa', $data_kelas_siswa)
        ->with('tahun_ajaran', $tahun_ajaran);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $kelas = KelasSiswa::find($id);
        $kelas->tingkat = $request->tingkat;
        $kelas->id_jurusan = $request->nama_jurusan;
        $kelas->id_urutan_kelas = $request->nama_urutan_kelas;
        $kelas->id_user = Auth::user()->id_user;
        $kelas->save();
        Alert::success('Data Berhasil Diubah');
        return redirect('kelas_siswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
