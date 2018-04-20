<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\UrutanKelas;
use Alert;

class UrutanKelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $urutan_kelas = new UrutanKelas;
        $urutan_kelas->nama_urutan_kelas = $request->nama_urutan_kelas;
        $urutan_kelas->status_urutan_kelas = $request->status_urutan_kelas;
        $urutan_kelas->save();
        Alert::success('Data Berhasil Ditambahkan');
        return Redirect::to('master_kelas');
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
        $urutan_kelas = UrutanKelas::find($id);
        $urutan_kelas->nama_urutan_kelas = $request->nama_urutan_kelas;
        $urutan_kelas->status_urutan_kelas = $request->status_urutan_kelas;
        $urutan_kelas->save();
        Alert::success('Data Berhasil Diubah');
        return Redirect::to('master_kelas');
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
