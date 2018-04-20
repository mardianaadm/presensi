<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Jurusan;
use App\UrutanKelas;
use Alert;

class MasterKelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *p
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jurusan = Jurusan::all();
        $urutan_kelas = UrutanKelas::all();
        return view('master_kelas/master_kelas')
        ->with('jurusan',$jurusan)
        ->with('urutan_kelas',$urutan_kelas);
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
        $jurusan = new Jurusan;
        $jurusan->nama_jurusan = $request->nama_jurusan;
        $jurusan->status_jurusan = $request->status_jurusan;
        $jurusan->save();
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
        $jurusan = Jurusan::find($id);
        $jurusan->nama_jurusan = $request->nama_jurusan;
        $jurusan->status_jurusan = $request->status_jurusan;
        $jurusan->save();
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
