<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\PresensiSiswa;
use App\DataSiswa;
use App\KelasSiswa;
use App\DataKelasSiswa;
use Response;
use Alert;


class PresensiSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $presensi_siswa = PresensiSiswa::all();
        return view('presensi_siswa/presensi_siswa');
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
        $presensi_siswa = new PresensiSiswa;
        $presensi_siswa->status_kehadiran = $request->status;
        $presensi_siswa->id_presensi = $request->id_presensi;
				
				$data_kelas_siswa = DataKelasSiswa::
				join('data_siswa', 'data_siswa.id_siswa', '=', 'data_kelas_siswa.id_siswa')
				->where('data_siswa.NISN', $request->NISN)
				->orWhere('data_siswa.NIS', $request->NISN)
				->get();
				
				foreach($data_kelas_siswa as $data) {
					$id_data_kelas_siswa = $data->id_data_kelas_siswa;
				}
				
				if ($id_data_kelas_siswa) {
					//bila mahasiswa terdapat dalam tabel data kelas siswa
					$presensi_siswa->id_data_kelas_siswa = $id_data_kelas_siswa;
					$presensi_siswa->save();
					
					Alert::success('Data Berhasil Ditambahkan');
				}else{
					//bila siswa tidak terdapat dalam tabel data kelas siswa
					Alert::success('Siswa belum terdaftar dalam kelas manapun!');
				}
				
        return Redirect::to('presensi/'.$request->id_presensi.'/'.$request->id_kelas_siswa);
    }
		
		public function search($nisn) {
			$data_siswa = DataSiswa::where('NISN', $nisn)->orWhere('NIS', $nisn)->get();
			
			return Response::json($data_siswa);
			
		}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, $id2)
    {
      $presensi_siswa = PresensiSiswa::
			join('data_kelas_siswa', 'presensi_siswa.id_data_kelas_siswa', '=', 'data_kelas_siswa.id_data_kelas_siswa')
			->where('data_kelas_siswa.id_kelas_siswa', $id2)
			->get();
			
			$kelas_siswa = KelasSiswa::
			join('jurusan','kelas_siswa.id_jurusan','=','jurusan.id_jurusan')
			->join('urutan_kelas','kelas_siswa.id_urutan_kelas','=','urutan_kelas.id_urutan_kelas')
			->where('id_kelas_siswa', $id2)->get();
      
			return view('presensi_siswa/presensi_siswa')
			->with('presensi_siswa', $presensi_siswa)
			->with('kelas_siswa', $kelas_siswa)
			->with('id_presensi', $id);
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
