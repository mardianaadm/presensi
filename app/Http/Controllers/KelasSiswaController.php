<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Jurusan;
use App\UrutanKelas;
use App\KelasSiswa;
use Auth;

class KelasSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jurusan = Jurusan::all();
        $urutan_kelas = UrutanKelas::all();
        $KelasSiswa = KelasSiswa::
            join('jurusan','kelas_siswa.id_jurusan','=','jurusan.id_jurusan')
            ->join('urutan_kelas','kelas_siswa.id_urutan_kelas','=','urutan_kelas.id_urutan_kelas')
            ->get();
        return view('kelas_siswa/kelas_siswa')
        ->with('KelasSiswa', $KelasSiswa)
        ->with('jurusan', $jurusan)
        ->with('urutan_kelas', $urutan_kelas);
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
        /*cek nama dan urutan ada di DB*/
        $cek = KelasSiswa::where('tingkat', $request->tingkat)
        ->where('id_jurusan', $request->nama_jurusan)
        ->where('id_urutan_kelas', $request->nama_urutan_kelas)
        ->count();
        if ($cek>0) { /*jika lebih dari 0 maka akan kembali ke halaman kelas_siswa*/
            return redirect('kelas_siswa');
        }else{ /*jika tidak maka menampilkan sesuai yg diinputkan*/
            $kelas = new KelasSiswa;
            $kelas->tingkat = $request->tingkat;
            $kelas->id_jurusan = $request->nama_jurusan;
            $kelas->id_urutan_kelas = $request->nama_urutan_kelas;
            $kelas->id_user = Auth::user()->id_user;
            $kelas->save();
            return redirect('kelas_siswa');
        }
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
        $kelas = KelasSiswa::find($id);
        $kelas->tingkat = $request->tingkat;
        $kelas->id_jurusan = $request->nama_jurusan;
        $kelas->id_urutan_kelas = $request->nama_urutan_kelas;
        $kelas->id_user = Auth::user()->id_user;
        $kelas->save();
        return redirect('kelas_siswa');
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
