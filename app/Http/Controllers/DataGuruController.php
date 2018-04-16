<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\User;

class DataGuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_guru = User::all();
        return view('data_guru/data_guru')
        ->with('data_guru', $data_guru);
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
        $data_guru = new User;
        $data_guru->NIP = $request->NIP;
        $data_guru->password = $request->password;
        $data_guru->nama_user = $request->nama_user;
        $data_guru->alamat_user = $request->alamat_user;
        $data_guru->jk_user = $request->jk_user;
        $data_guru->level = "Guru";
        $data_guru->status_user = $request->status_user;
        $data_guru->save();
        return redirect('data_guru');
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
        $data_guru = User::find($id);
        $data_guru->NIP = $request->NIP;
        $data_guru->nama_user = $request->nama_user;
        $data_guru->alamat_user = $request->alamat_user;
        $data_guru->jk_user = $request->jk_user;
        $data_guru->level = "Guru";
        $data_guru->status_user = $request->status_user;
        $data_guru->save();
        return redirect('data_guru');
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
