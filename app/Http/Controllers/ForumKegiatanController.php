<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\ForumKegiatan;

class ForumKegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('kegiatan.index',[
            'kegiatans'=>ForumKegiatan::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kegiatan.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $validate=$request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'tujuan_dan_manfaat' => 'required',
            'pihak_yang_terlibat' => 'required',
            'kebutuhan_sumberdaya' => 'required',
            'sasaran' => 'required',
            'status_tahapan' => 'required',
            'persentase_progres' => 'required',
            'analisis_resiko' => 'required',
            'strategi_menjaga_keberlangsungan' => 'required',
            'indikator_keberhasilan' => 'required',
        ]);

        $validate['slug']= Str::limit($request->deskripsi, 150);

        // $input = $request->all();

        ForumKegiatan::create($validate);
        return redirect('/kegiatan');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('kegiatan.lihat',[
            'kegiatan'=>ForumKegiatan::select()->where('id',$id)->get()->first()
        ]);
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
        ForumKegiatan::where('id',$id)->delete();
        return redirect('/kegiatan');
    }
}
