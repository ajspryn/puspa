@extends('layouts.main')

@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-6">
                        <h3>Detail Kegiatan</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/"> <i data-feather="home"></i></a>
                            </li>
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item">Kegiatan</li>
                            <li class="breadcrumb-item active">lihat</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="blog-single">
                        <div class="blog-box blog-details">
                            <div class="row">

                                <div class="col-xl-6 box-col-6 col-lg-12 col-md-6">
                                    <div class="card o-hidden">
                                        <div class="card-body">
                                            <div class="ecommerce-widgets media">
                                                <div class="media-body">
                                                    <p class="f-w-500 font-roboto">Tahapan Kegiatan</p>
                                                    @if ($kegiatan->status_tahapan == 1)
                                                        <h4 class="f-w-500 mb-0 f-20">1.<span class="counter">Rumusan
                                                                ide</span></h4>
                                                    @elseif ($kegiatan->status_tahapan == 2)
                                                        <h4 class="f-w-500 mb-0 f-20">2.<span
                                                                class="counter">Perencanaan</span></h4>
                                                    @elseif ($kegiatan->status_tahapan == 3)
                                                        <h4 class="f-w-500 mb-0 f-20">3.<span
                                                                class="counter">Persiapan</span></h4>
                                                    @elseif ($kegiatan->status_tahapan == 4)
                                                        <h4 class="f-w-500 mb-0 f-20">4.<span
                                                                class="counter">Pembangunan</span></h4>
                                                    @elseif ($kegiatan->status_tahapan == 5)
                                                        <h4 class="f-w-500 mb-0 f-20">5.<span
                                                                class="counter">Penerapan</span></h4>
                                                    @elseif ($kegiatan->status_tahapan == 6)
                                                        <h4 class="f-w-500 mb-0 f-20">6.<span
                                                                class="counter">Evaluasi</span></h4>
                                                    @endif
                                                </div>
                                                <div class="ecommerce-box light-bg-primary"><i aria-hidden="true">
                                                        {{ $kegiatan->persentase_progres }} %</i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 box-col-6 col-lg-12 col-md-6">
                                    <div class="card o-hidden">
                                        <div class="card-body">
                                            <div class="media">
                                                <div class="media-body">
                                                    @php
                                                        $query = app\Models\ForumKegiatan::Select()
                                                            ->where('id', $kegiatan->id)
                                                            ->get()
                                                            ->first();
                                                        if ($query->status_tahapan == 1) {
                                                            $score = 15;
                                                        } elseif ($query->status_tahapan == 2) {
                                                            $score = 30;
                                                        } elseif ($query->status_tahapan == 3) {
                                                            $score = 45;
                                                        } elseif ($query->status_tahapan == 4) {
                                                            $score = 70;
                                                        } elseif ($query->status_tahapan == 5) {
                                                            $score = 85;
                                                        } elseif ($query->status_tahapan == 6) {
                                                            $score = 100;
                                                        }
                                                        
                                                        $progres = ($score / 100) * $kegiatan->persentase_progres;
                                                    @endphp
                                                    <p class="f-w-500 font-roboto">Total Progres</p>
                                                    <div class="progress-box">
                                                        <h4 class="f-w-500 mb-0 f-20">{{ $progres }}<span
                                                                class="counter">%</span></h4>
                                                        <div
                                                            class="progress sm-progress-bar progress-animate app-right d-flex justify-content-end">
                                                            <div class="progress-gradient-primary" role="progressbar"
                                                                style="width: 35%" aria-valuenow="{{ $progres }}"
                                                                aria-valuemin="0" aria-valuemax="100"><span
                                                                    class="font-primary">{{ $progres }} %</span><span
                                                                    class="animate-circle"></span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- <img class="img-fluid w-100" src="../assets/images/blog/blog-single.jpg" alt="blog-main"> --}}
                            <div class="blog-details">
                                <h4>
                                    {{ $kegiatan->nama }}
                                </h4>
                                @if ($kegiatan->foto)
                                    <img
                                        class="img-fluid rounded mb-75"src="{{ asset('storage/' . $kegiatan->foto) }}"alt="avatar img">
                                @endif
                                <ul class="blog-social">
                                    <li>{{ $kegiatan->created_at->isoformat('D MMMM Y') }}</li>
                                    <li><i class="icofont icofont-user"></i>Adji <span>Supriyono </span></li>
                                    {{-- <li><i class="icofont icofont-thumbs-up"></i>02<span>Hits</span></li> --}}
                                    <li><i class="icofont icofont-ui-chat"></i>2 Komentar</li>
                                </ul>
                                <div class="single-blog-content-top">
                                    <p>{{ $kegiatan->deskripsi }}</p>
                                </div>
                                <br>
                                <div class="row browse">
                                    <div class="col-xl-4 xl-100 col-md-12">
                                        <div class="browse-articles">
                                            <h6><span><i data-feather=""></i></span>Tujuan Dan Manfaat</h6>
                                            <ul>
                                                <li><a href="#"><span><i
                                                                data-feather=""></i></span><span>{{ $kegiatan->tujuan_dan_manfaat }}</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 xl-100 col-md-12">
                                        <div class="browse-articles">
                                            <h6><span><i data-feather=""></i></span>Pihak Yang Terlibat</h6>
                                            <ul>
                                                <li><a href="#"><span><i
                                                                data-feather=""></i></span><span>{{ $kegiatan->pihak_yang_terlibat }}</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 xl-100 col-md-12">
                                        <div class="browse-articles">
                                            <h6><span><i data-feather=""></i></span>Kebutuhan Sumber Daya</h6>
                                            <ul>
                                                <li><a href="#"><span><i
                                                                data-feather=""></i></span><span>{{ $kegiatan->kebutuhan_sumberdaya }}</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 xl-100 col-md-12">
                                        <div class="browse-articles">
                                            <h6><span><i data-feather=""></i></span>Sasaran</h6>
                                            <ul>
                                                <li><a href="#"><span><i
                                                                data-feather=""></i></span><span>{{ $kegiatan->sasaran }}</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 xl-100 col-md-12">
                                        <div class="browse-articles">
                                            <h6><span><i data-feather=""></i></span>Analisis Resiko</h6>
                                            <ul>
                                                <li><a href="#"><span><i
                                                                data-feather=""></i></span><span>{{ $kegiatan->analisis_resiko }}</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 xl-100 col-md-12">
                                        <div class="browse-articles">
                                            <h6><span><i data-feather=""></i></span>Strategi Menjaga Keberlangsungan</h6>
                                            <ul>
                                                <li><a href="#"><span><i
                                                                data-feather=""></i></span><span>{{ $kegiatan->strategi_menjaga_keberlangsungan }}</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 xl-100 col-md-12">
                                        <div class="browse-articles">
                                            <h6><span><i data-feather=""></i></span>Indikator Keberhasilan</h6>
                                            <ul>
                                                <li><a href="#"><span><i
                                                                data-feather=""></i></span><span>{{ $kegiatan->indikator_keberhasilan }}</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if ($kegiatan->lampiran)
                        <div class="row invoice-spacing">
                            <div class="col-xl-4 p-0">
                            </div>
                            <div class="col-xl-5 p-0 mt-xl-0 mt-2">
                                <button class="btn btn-primary w-75 mb-55" data-bs-toggle="modal"
                                    data-bs-target="#lampiran">
                                    Lampiran
                                </button>
                            </div>
                        @endif
                        <div class="modal fade" id="lampiran" tabindex="-1" aria-labelledby="addNewCardTitle"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-xl margin-auto">
                                <div class="modal-content">
                                    <div class="modal-header bg-transparent">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body px-sm-12 mx-50 pb-5">
                                        <h3 class="text-center">Lampiran Kegiatan </h3>
                                        <hr class="invoice-spacing" />
                                        <div class="card-body">
                                            <div class="col-md-12 d-flex order-md-2 order-1">
                                                <iframe src="{{ asset('storage/' . $kegiatan->lampiran) }}"
                                                    class="d-block w-100" height='500' weight='800'></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <section class="comment-box">
                            <h4>Komentar</h4>
                            <hr>
                            <ul>
                                <li>
                                    <div class="media align-self-center"><img class="align-self-center"
                                            src="../assets/images/blog/comment.jpg" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <h6 class="mt-0">M Iqbal<span>( Pembina )</span></h6>
                                                </div>
                                                <div class="col-md-8">
                                                    <ul class="comment-social float-start float-md">
                                                        <li><span>{{ $kegiatan->created_at->diffForHumans() }}</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <p>Kegiatan Yang Bagus, Silahkan di Lanjutkan..</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <ul>
                                        <li>
                                            <div class="media"><img class="align-self-center"
                                                    src="../assets/images/blog/comment.jpg"
                                                    alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <h6 class="mt-0">Adji Supriyono<span>( Anggota )</span></h6>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <ul class="comment-social float-start float-md">
                                                                <li><span>{{ $kegiatan->created_at->diffForHumans() }}</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <p>Baik Bapak Mohon Arahan dan Bimbingan Nya</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <form>
                                    <div class="mb-3 d-flex">
                                        <input name="kebutuhan_sumberdaya" class="form-control"
                                            id="exampleFormControlTextarea4" rows="3">
                                    </div>
                                    <div class="mb-3 d-flex bottom-right-">
                                        <button class="btn btn-secondary">Kirim</button>
                                    </div>
                                </form>
                            </ul>
                        </section>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->
    </div>
@endsection
