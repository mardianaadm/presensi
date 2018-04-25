<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\DataSiswa;
use Excel;

class MaatwebsiteDemoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function importExcel()
    {
        if(Input::hasFile('importExcel')){
            $file = Input::file('importExcel')->getRealPath();
            $data = Excel::load($file)->get();
            foreach ($data as $value) {
                DataSiswa::updateOrCreate(['nisn'=>$value->nisn], $value->except('nisn')->toArray());
            }

        }
    }

    public function downloadExcel()
    {
        Excel::create('TemplateDataSiswa', function($excel) {
            $excel->sheet('Sheet1', function($sheet){
                $sheet->row(1, array('NISN', 'NIS', 'Nama', 'Tahun Ajaran'));
                $sheet->row(2, array('1234567890', '1234', 'Abcd'));
                $sheet->row(3, array('6483254832', '7354', 'Efgh'));
                $sheet->row(4, array('7634753294', '6473', 'Ijkl'));
            });
       })->download('xlsx');
    }

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
        //
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
