<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\DataSiswa;
use App\DataKelasSiswa;
use App\KelasSiswa;
use Alert;

class DataKelasSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_siswa = DataSiswa::all();
        $data_kelas_siswa = DataKelasSiswa::all();
        $kelas_siswa = KelasSiswa::all();
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
        $data_siswa = new DataSiswa;
        $data_siswa->nama_siswa = $request->nama_siswa;
        $data_siswa->NISN = $request->NISN;
        $data_siswa->NIS = $request->NIS;
        $data_siswa->id_tahun_ajaran = $request->tahun_ajaran;
        $data_siswa->status_siswa = $request->status_siswa;
        $data_siswa->save();

        $data_kelas_siswa = new DataKelasSiswa;
        $data_kelas_siswa->id_siswa = $data_siswa->id_siswa;
        $data_kelas_siswa->id_kelas_siswa = 1;
        $data_kelas_siswa->save();
        Alert::success('Data Berhasil Ditambahkan');
        return redirect('kelas_siswa')
        ->with('data_siswa', $data_siswa)
        ->with('data_kelas_siswa', $data_kelas_siswa)
        ->with('kelas_siswa', $kelas_siswa);
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
