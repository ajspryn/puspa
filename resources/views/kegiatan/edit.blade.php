@extends('layouts.main')

@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-6">
                        <h3>Tambah Kegiatan</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/"> <i data-feather="home"></i></a>
                            </li>
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item">Kegiatan</li>
                            <li class="breadcrumb-item active">Tambah Kegiatan</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="form theme-form"> 
                                <form action="/kegiatan/{{ $kegiatans->id }}" method="POST" enctype="multipart/form-data">
                                    @method('put')
                                    @csrf
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label>Nama Kegiatan</label>
                                                <input name="nama" class="form-control" type="text" value ="{{ $kegiatans->nama}}" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label class="col-sm-3 col-form-label">Upload Foto</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" type="file" name="foto">
                                                    <input type="hidden" id="EditUserFirstName" name="fotolama"
                                                    value="{{ $kegiatans->foto }}" class="form-control" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label>Deskripsi Kegiatan</label>
                                                <input name="deskripsi" class="form-control"type="text" value="{{ $kegiatans->deskripsi }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label>Tujuan Dan Manfaat</label>
                                                <input name="tujuan_dan_manfaat" class="form-control"type="text" value="{{ $kegiatans->tujuan_dan_manfaat }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label>Pihak Yang Terlibat</label>
                                                <input name="pihak_yang_terlibat" class="form-control"type="text" value="{{ $kegiatans->pihak_yang_terlibat }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label>Kebutuhan Sumberdaya</label>
                                                <input name="kebutuhan_sumberdaya" class="form-control"type="text" value="{{ $kegiatans->kebutuhan_sumberdaya }}">
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label>Kebutuhan Sumberdaya</label>
                                                <textarea name="kebutuhan_sumberdaya" class="form-control" id="exampleFormControlTextarea4" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div> --}}
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label>Sasaran Kegiatan</label>
                                                <input name="sasaran" class="form-control" type="text" value ="{{ $kegiatans->sasaran}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label>Status Kegiatan</label>
                                                <select class="form-select" name="status_tahapan">
                                                    @if ($status==1)
                                                    <option value="1">1. Rumusan ide</option>
                                                    @elseif($status==2)
                                                    <option value="2">2. Perencanaan</option>   
                                                    @elseif($status==3)
                                                    <option value="3">3. Persiapan</option> 
                                                    @elseif($status==4)
                                                    <option value="4">4. Pembangunan</option> 
                                                    @elseif($status==5)
                                                    <option value="5">5. Penerapan</option>
                                                    @else
                                                    <option value="6">6. Evaluasi</option>
                                                    @endif
                                                    <option></option>
                                                    <option value="1">1. Rumusan ide</option>
                                                    <option value="2">2. Perencanaan</option>
                                                    <option value="3">3. Persiapan</option>
                                                    <option value="4">4. Pembangunan</option>
                                                    <option value="5">5. Penerapan</option>
                                                    <option value="6">6. Evaluasi</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label>Persentase Progres</label>
                                                <input name="persentase_progres" class="form-control" type="number" value="{{ $kegiatans->persentase_progres }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label>Keterangan Status Kegiatan</label>
                                                <input name="keterangan_status_kegiatan" class="form-control"type="text" value="{{ $kegiatans->keterangan_status_kegiatan }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label>Analisis Resiko</label>
                                                <input name="analisis_resiko" class="form-control"type="text" value="{{ $kegiatans->analisis_resiko }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label>Strategi Menjaga Keberlangsungan</label>
                                                <input name="strategi_menjaga_keberlangsungan" class="form-control" type="text" value="{{ $kegiatans->strategi_menjaga_keberlangsungan }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label>Indikator Keberhasilan</label>
                                                <input name="indikator_keberhasilan" class="form-control" type="text" value="{{ $kegiatans->indikator_keberhasilan }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label class="col-sm-3 col-form-label">Upload Lampiran</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" type="file" name="lampiran">
                                                    <input type="hidden" id="EditUserFirstName" name="lampiranlama"
                                                    value="{{ $kegiatans->lampiran }}" class="form-control" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="text-end">
                                                <button type="submit" class="btn btn-success me-3">Simpan</button>
                                                {{-- <a class="btn btn-danger" href="#">Cancel</a> --}}
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                {{-- <div class="row">
                                    <div class="col">
                                        <div class="mb-3 mt-2">
                                            <form class="dropzone" id="singleFileUpload">
                                                <div class="dz-message needsclick"><i class="icon-cloud-up"></i>
                                                    <h6>Upload Lampiran Disini.</h6><span
                                                        class="note needsclick"></span>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->
    </div>
@endsection
