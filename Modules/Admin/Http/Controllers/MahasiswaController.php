<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Admin\Entities\Rfid;
use Modules\Admin\Entities\Kelas;
use Illuminate\Routing\Controller;
use Modules\Admin\Entities\Mahasiswa;
use Illuminate\Contracts\Support\Renderable;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('admin::mahasiswa.index',[
            'mahasiswas' => Mahasiswa::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('admin::mahasiswa.tambah', [
            'kartus' => Rfid::select()->where('mahasiswa_id', null)->get(),
            'kelass' => Kelas::all(),

        ]);
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        // return $request;
        $validateData = $request->validate([
            'nama' => 'required',
            'npm' => 'required',
            'kelas_id' => 'required',
            'no_ktp' => 'nullable',
            'alamat' => 'nullable',
            'kabkota' => 'nullable',
            'kecamatan' => 'nullable',
            'desa' => 'nullable',
            'rt' => 'nullable',
            'rw' => 'nullable',
            'kode_pos' => 'nullable',
            'no_telp' => 'nullable',
            'tempat_lahir' => 'nullable',
            'tgl_lahir' => 'nullable',
            'ibu_kandung' => 'nullable',
            'nama_ot' => 'nullable',
            'hubungan_ot' => 'nullable',
            'no_telp_ot' => 'nullable',
            'asal_sekolah' => 'nullable',
        ]);

        $input = $validateData;
        Mahasiswa::create($input);
        return redirect('/admin/mahasiswa')->with('success', 'Data Mahasiswa berhasil ditambahkan');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('admin::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('admin::mahasiswa.edit', [
            'kelass' => Kelas::all(),
            'mahasiswas' => Mahasiswa::all(),
            'daftar' => Rfid::select()->where('id', $id)->get()->first(),
            'mahasiswa' => Mahasiswa::select()->where('id', $id)->get()->first(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'nama' => 'required',
            'npm' => 'required',
            'kelas_id' => 'required',
            'no_ktp' => 'nullable',
            'alamat' => 'nullable',
            'kabkota' => 'nullable',
            'kecamatan' => 'nullable',
            'desa' => 'nullable',
            'rt' => 'nullable',
            'rw' => 'nullable',
            'kode_pos' => 'nullable',
            'no_telp' => 'nullable',
            'tempat_lahir' => 'nullable',
            'tgl_lahir' => 'nullable',
            'ibu_kandung' => 'nullable',
            'nama_ot' => 'nullable',
            'hubungan_ot' => 'nullable',
            'no_telp_ot' => 'nullable',
            'asal_sekolah' => 'nullable',
        ];

        $input = $request->validate($rules);

        Mahasiswa::where('id', $id)
            ->update($input);
        return redirect('/admin/mahasiswa')->with('success', 'Data Mahasiswa Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        Mahasiswa::destroy('id', $id);
        return redirect('/admin/mahasiswa')->with('success', 'Data berhasil di Hapus');
    }
}
