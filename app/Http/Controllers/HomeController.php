<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jurusan;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/index');
    }

    public function admin()
    {
        return view('admin/index');
    }

    public function dashboard()
    {
        return view('admin/index');
    } 

    public function jadwal()
    {
        return view('jadwal/jadwal');
    }

    public function kelas_siswa()
    {
        $jurusan = Jurusan::all(); 
        return view('kelas_siswa/kelas_siswa')->with('jurusan',$jurusan);
    }

    public function data_guru()
    {
        return view('data_guru/data_guru');
    }

    // public function master_kelas()
    // {
        
    // }

    public function data_siswa()
    {
        return view('data_siswa/data_siswa');
    }

    public function data_sesi()
    {
        return view('data_sesi/data_sesi');
    }

    public function tahun_ajaran()
    {
        return view('tahun_ajaran/tahun_ajaran');
    }
}

