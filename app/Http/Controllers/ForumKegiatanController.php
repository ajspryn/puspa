<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\ForumKegiatan;
use Illuminate\Support\Facades\Storage;

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
            'kegiatans'=>ForumKegiatan::select()->skip(0)->take(4)->orderby('created_at','desc')->get(),
            'skegiatan'=>ForumKegiatan::all(),
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
            'keterangan_status_kegiatan' => 'nullable',
            'sasaran' => 'required',
            'status_tahapan' => 'required',
            'persentase_progres' => 'required',
            'analisis_resiko' => 'required',
            'strategi_menjaga_keberlangsungan' => 'required',
            'indikator_keberhasilan' => 'required',
            'foto' => 'nullable',
            'lampiran' => 'nullable',
        ]);

        $validate['slug']= Str::limit($request->deskripsi, 150);
        
        $validate = $request->all();

        if($request->file('foto')){
            $validate['foto'] = $request->file('foto')->store('foto-kegiatan');
        }
        
        if($request->file('lampiran')){
            $validate['lampiran'] = $request->file('lampiran')->store('lampiran-kegiatan');
        }
        
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
    {   $kegiatan=ForumKegiatan::select()->where('id',$id)->get()->first();
        return view('kegiatan.edit',[
            'kegiatans'=>ForumKegiatan::select()->where('id',$id)->get()->first(),
            'status'=>$kegiatan->status_tahapan,
        ]);
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
        $validate=$request->validate([
        'nama' => 'required',
        'deskripsi' => 'required',
        'tujuan_dan_manfaat' => 'required',
        'pihak_yang_terlibat' => 'required',
        'kebutuhan_sumberdaya' => 'required',
        'sasaran' => 'required',
        'keterangan_status_kegiatan'=> 'nullable',
        'status_tahapan' => 'required',
        'persentase_progres' => 'required',
        'analisis_resiko' => 'required',
        'strategi_menjaga_keberlangsungan' => 'required',
        'indikator_keberhasilan' => 'required',
    ]);

    $validate['slug']= Str::limit($request->deskripsi, 150);

    ForumKegiatan::where('id',$id)->update($validate);

    if ($request->file('foto')) {
        if ($request->fotolama) {
            Storage::delete($request->fotolama);
        }
        $foto = $request->file('foto')->store('foto-kegiatan');

        ForumKegiatan::where('id',$id)->update([
            'foto'=> $foto,
        ]);
    }
    else{

    }
    ForumKegiatan::where('id',$id)->update($validate);

    if ($request->file('lampiran')) {
        if ($request->lampiranlama) {
            Storage::delete($request->lampiranlama);
        }
        $lampiran = $request->file('lampiran')->store('lampiran-kegiatan');

        ForumKegiatan::where('id',$id)->update([
            'lampiran'=> $lampiran,
        ]);
    }
    else{

    }
    
    return redirect('/kegiatan');
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
