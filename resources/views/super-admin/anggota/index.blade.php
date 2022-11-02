@extends('super-admin.layouts.main')

@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-6">
                        <h3>Dashboard</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a>
                            </li>
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-xl-4 box-col-6">
                    <div class="card custom-card p-0">
                        <div class="card-header"><img class="img-fluid" src="{{ url('/') }}/assets/images/user-card/1.jpg"
                                alt=""></div>
                        <div class="card-profile"><img class="rounded-circle" src="{{ url('/') }}/assets/images/kpppa.png" alt="">
                        </div>
                        <div class="text-center profile-details">
                            <h5>Dinas pppa Kabupaten Bogor</h5>
                            <h6>Kabupaten Bogor</h6>
                            <a class="btn btn-primary btn-sm mb-2 mt-0" href="/anggotadetail">Lihat</a>
                        </div>
                        <div class="card-footer row">
                            <div class="col-4 col-sm-6">
                                <h6>Kode Forum</h6>
                                <h5 class="counter">0001</h5>
                            </div>
                            <div class="col-4 col-sm-6">
                                <h6>Jumlah Kegiatan</h6>
                                <h5><span class="counter">49</span></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4 box-col-6">
                    <div class="card custom-card p-0">
                        <div class="card-header"><img class="img-fluid" src="{{ url('/') }}/assets/images/user-card/1.jpg"
                                alt=""></div>
                        <div class="card-profile"><img class="rounded-circle" src="{{ url('/') }}/assets/images/kpppa.png" alt="">
                        </div>
                        <div class="text-center profile-details">
                            <h5>Dinas pppa Kota Bogor</h5>
                            <h6>Kota Bogor</h6>
                            <a class="btn btn-primary btn-sm mb-2 mt-0" href="/anggotadetail">Lihat</a>
                        </div>
                        <div class="card-footer row">
                            <div class="col-4 col-sm-6">
                                <h6>Kode Forum</h6>
                                <h5 class="counter">0002</h5>
                            </div>
                            <div class="col-4 col-sm-6">
                                <h6>Jumlah Kegiatan</h6>
                                <h5><span class="counter">5</span></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->
    </div>
@endsection
