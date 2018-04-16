<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\User;
use App\TahunAjaran;
use App\DataSesi;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_guru = User::all();
        $tahun_ajaran = TahunAjaran::all();
        return view('jadwal/jadwal')
        ->with('data_guru', $data_guru)
        ->with('tahun_ajaran', $tahun_ajaran);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detail_jadwal =  \DB::select("SELECT data_sesi.id_sesi as sesi, nama_user, tingkat, nama_jurusan, nama_urutan_kelas, hari, jam, nama_semester, masa_tahun_ajaran FROM users
            JOIN kelas_siswa ON users.id_user = kelas_siswa.id_user
            JOIN jurusan ON kelas_siswa.id_jurusan = jurusan.id_jurusan
            JOIN urutan_kelas ON kelas_siswa.id_urutan_kelas = urutan_kelas.id_urutan_kelas
            JOIN jadwal_mengajar_kelas on kelas_siswa.id_kelas_siswa = jadwal_mengajar_kelas.id_kelas_siswa
            JOIN jadwal_mengajar ON jadwal_mengajar_kelas.id_jadwal_mengajar = jadwal_mengajar.id_jadwal_mengajar
            JOIN data_sesi ON jadwal_mengajar.id_sesi = data_sesi.id_sesi
            JOIN tahun_ajaran ON jadwal_mengajar.id_tahun_ajaran = tahun_ajaran.id_tahun_ajaran
            WHERE users.id_user = $id AND tahun_ajaran.status_tahun_ajaran = 'Aktif'");
        $data_sesi = DataSesi::all();
        return view ('jadwal/detail_jadwal')
        ->with('detail_jadwal', $detail_jadwal)
        ->with('data_sesi', $data_sesi);
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
