<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\DataSiswa;
use App\TahunAjaran;
use App\KelasSiswa;
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
        $kelas_siswa = KelasSiswa::
        join('jurusan','kelas_siswa.id_jurusan','=','jurusan.id_jurusan')
            ->join('urutan_kelas','kelas_siswa.id_urutan_kelas','=','urutan_kelas.id_urutan_kelas')
            ->get();
        return view('data_siswa/data_siswa')
        ->with('data_siswa', $data_siswa)
        ->with('kelas_siswa', $kelas_siswa)
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
        $data_siswa = new DataSiswa;
        $data_siswa->nama_siswa = $request->nama_siswa;
        $data_siswa->NISN = $request->NISN;
        $data_siswa->NIS = $request->NIS;
        $data_siswa->id_tahun_ajaran = $request->id_tahun_ajaran;
        $data_siswa->status_siswa = $request->status_siswa;
        $data_siswa->save();
        Alert::success('Data Berhasil Ditambahkan');
        return redirect('data_siswa');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $kelas_siswa = KelasSiswa::
        join('jurusan','kelas_siswa.id_jurusan','=','jurusan.id_jurusan')
            ->join('urutan_kelas','kelas_siswa.id_urutan_kelas','=','urutan_kelas.id_urutan_kelas')
            ->get();
        return view('data_siswa/non-aktif')
        ->with('kelas_siswa', $kelas_siswa);
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
    public function update(Request $request)
    {
        $data_siswa = DataSiswa::find($id);
        $data_siswa->nama_siswa = $request->nama_siswa;
        $data_siswa->NISN = $request->NISN;
        $data_siswa->NIS = $request->NIS;
        $data_siswa->status_siswa = $request->status_siswa;
        $data_siswa->save();
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

    public function nonAktif(Request $request)
    {
        $data_siswa = DataSiswa::where('id_tahun_ajaran', $request->masa_tahun_ajaran);
        $data_siswa->status_siswa = "Tidak Aktif";
        $data_siswa->save();
        Alert::success('Data Berhasil Diubah');
        return Redirect::to('data_siswa');
    }
}
