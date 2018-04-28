<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\TahunAjaran;
use Alert;

class TahunAjaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tahun_ajaran = TahunAjaran::all();
        return view('tahun_ajaran/tahun_ajaran')
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
        if ($request->status_tahun_ajaran=="Aktif"){
            \DB::table('tahun_ajaran')->update(array('status_tahun_ajaran' => "Tidak Aktif"));
        }
        if ($request->status_tahun_ajaran=="Tidak Aktif"){
            \DB::table('tahun_ajaran')->update(array('status_tahun_ajaran' => "Tidak Aktif"));
            return Redirect::to('tahun_ajaran');
        }
        $tahun_ajaran = new TahunAjaran;
        $tahun_ajaran->nama_semester = $request->nama_semester;
        $tahun_ajaran->masa_tahun_ajaran = $request->masa_tahun_ajaran;
        $tahun_ajaran->status_tahun_ajaran = $request->status_tahun_ajaran;
        $tahun_ajaran->save();
        Alert::success('Data Berhasil Ditambahkan');
        return Redirect::to('tahun_ajaran');
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
        if ($request->status_tahun_ajaran=="Aktif"){
            \DB::table('tahun_ajaran')->update(array('status_tahun_ajaran' => "Tidak Aktif"));
        }
        $tahun_ajaran = TahunAjaran::find($id);
        $tahun_ajaran->nama_semester = $request->nama_semester;
        $tahun_ajaran->masa_tahun_ajaran = $request->masa_tahun_ajaran;
        $tahun_ajaran->status_tahun_ajaran = $request->status_tahun_ajaran;
        $tahun_ajaran->save();
        Alert::success('Data Berhasil Diubah');
        return Redirect::to('tahun_ajaran');
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
