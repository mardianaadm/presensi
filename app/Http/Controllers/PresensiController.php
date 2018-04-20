<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\KelasSiswa;
use Auth;
use App\DataSesi;
use App\Presensi;

class PresensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_sesi = DataSesi::all();
        $kelas_siswa = KelasSiswa::
        join('jurusan','kelas_siswa.id_jurusan','=','jurusan.id_jurusan')
            ->join('urutan_kelas','kelas_siswa.id_urutan_kelas','=','urutan_kelas.id_urutan_kelas')
            ->where('kelas_siswa.id_user', Auth::user()->id_user)
            ->get();
        $presensi = Presensi::all();
        return view('presensi/presensi')
        ->with('presensi', $presensi)
        ->with('kelas_siswa', $kelas_siswa)
        ->with('data_sesi', $data_sesi);
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
        $presensi = new Presensi;
        $presensi->tanggal = date('Y-m-d');
        $presensi->jam = date('H:i:s');
        $presensi->id_kelas = $request->id_kelas;
        $presensi->id_sesi = $request->id_sesi;
        $presensi->id_user = Auth::user()->id_user;
        $presensi->save();
        return redirect('presensi_siswa');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
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
