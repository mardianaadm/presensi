<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\DataSiswa;
use App\TahunAjaran;
use Alert;

class DataSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tahun_ajaran = TahunAjaran::all();                    
        $data_siswa = DataSiswa::query()
            ->join('tahun_ajaran','data_siswa.id_tahun_ajaran','=','tahun_ajaran.id_tahun_ajaran')
                ->get();
        return view('data_siswa/data_siswa')
        ->with('data_siswa', $data_siswa)
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
        $siswa = new DataSiswa;
        $siswa->nama_siswa = $request->nama_siswa;
        $siswa->NISN = $request->NISN;
        $siswa->NIS = $request->NIS;
        $siswa->id_tahun_ajaran = $request->id_tahun_ajaran;
        $siswa->status_siswa = $request->status_siswa;
        $siswa->save();
        Alert::success('Data Berhasil Ditambahkan');
        return redirect('data_siswa');
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
        $siswa = DataSiswa::find($id);
        $siswa->nama_siswa = $request->nama_siswa;
        $siswa->NISN = $request->NISN;
        $siswa->NIS = $request->NIS;
        $siswa->status_siswa = $request->status_siswa;
        $siswa->save();
        Alert::success('Data Berhasil Diubah');
        return Redirect::to('data_siswa');
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
