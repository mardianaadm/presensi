<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\DataSesi;
use Alert;

class DataSesiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_sesi = DataSesi::all();
        return view('data_sesi/data_sesi')->with('data_sesi', $data_sesi);
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
        $data_sesi = new DataSesi;
        $data_sesi->nama_sesi = $request->nama_sesi;
        $data_sesi->jam = $request->jam;
        $data_sesi->save();
        Alert::success('Data Berhasil Ditambahkan');
        return Redirect::to('data_sesi');
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
        $data_sesi = DataSesi::find($id);
        $data_sesi->nama_sesi = $request->nama_sesi;
        $data_sesi->jam = $request->jam;
        $data_sesi->save();
        Alert::success('Data Berhasil Diubah');
        return Redirect::to('data_sesi');
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
