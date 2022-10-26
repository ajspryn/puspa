@extends('layouts.main')

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
            <div class="row second-chart-list third-news-update">
                <div class="col-xl-5 col-lg-12 xl-50 morning-sec box-col-12">
                    <div class="card profile-greeting">
                        <div class="card-body pb-0">
                            <div class="media">
                                <div class="media-body">
                                    <div class="greeting-user">
                                        <h4 class="f-w-600 font-primary">Hallo Adji Supriyono</h4>
                                        <p>Ayo Mulai Buat Hal Yang Luarbiasa</p>
                                        <!-- <div class="whatsnew-btn"><a class="btn btn-primary">Whats New </a></div> -->
                                    </div>
                                </div>
                                <div class="badge-groups">
                                    <div class="badge f-10"><i class="me-1" data-feather="clock"></i><span
                                            id="txt"></span></div>
                                </div>
                            </div>
                            <div class="cartoon"><img class="img-fluid" src="assets/images/dashboard/cartoon.png"
                                    alt=""></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-12 xl-50 calendar-sec box-col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="header-top">
                                <h5 class="m-0">Kegiatan Terbaru</h5>
                                <div class="card-header-right-icon">
                                    <div class="dropdown">
                                        <button class="btn dropdown-toggle" id="dropdownMenuButton" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">Today</button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton"><a
                                                class="dropdown-item" href="#">Today</a><a class="dropdown-item"
                                                href="#">Tomorrow</a><a class="dropdown-item"
                                                href="#">Yesterday</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="news-update media"><img class="img-fluid me-3 b-r-10"
                                    src="../assets/images/dashboard/update/1.jpg" alt="">
                                <div class="media-body">
                                    <h6>Lorem Ipsum is simply dummy</h6><span>Lorem Ipsum is simply
                                        dummy...</span><span class="time-detail d-block"><i data-feather="clock"></i>10
                                        Minutes Ago</span>
                                </div>
                            </div>
                            <div class="news-update media"><img class="img-fluid me-3 b-r-10"
                                    src="../assets/images/dashboard/update/2.jpg" alt="">
                                <div class="media-body">
                                    <h6>Lorem Ipsum is simply dummy</h6><span> Lorem Ipsum is simply text of the
                                        printing... </span><span class="time-detail d-block"><i data-feather="clock"></i>1
                                        Hour Ago</span>
                                </div>
                            </div>
                            <div class="news-update media"><img class="img-fluid me-3 b-r-10"
                                    src="../assets/images/dashboard/update/3.jpg" alt="">
                                <div class="media-body">
                                    <h6>Lorem Ipsum is simply dummy</h6><span>Lorem Ipsum is simply
                                        dummy...</span><span class="time-detail d-block"><i data-feather="clock"></i>8
                                        Hours Ago</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="bottom-btn"><a href="#">See all</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-4 col-lg-6">
                    <div class="card o-hidden static-top-widget-card">
                        <div class="card-body">
                            <div class="media static-top-widget">
                                <div class="media-body">
                                    <h6 class="font-roboto">Jumlah Mitra</h6>
                                    <h4 class="mb-0 counter">6659</h4>
                                </div>
                            </div>
                            <div class="progress-widget">
                                <div class="progress sm-progress-bar progress-animate">
                                    <div class="progress-gradient-secondary" role="progressbar" style="width: 75%"
                                        aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"><span
                                            class="animate-circle"></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-4 col-lg-6">
                    <div class="card o-hidden static-top-widget-card">
                        <div class="card-body">
                            <div class="media static-top-widget">
                                <div class="media-body">
                                    <h6 class="font-roboto">Jumlah Forum</h6>
                                    <h4 class="mb-0 counter">9856</h4>
                                </div>
                            </div>
                            <div class="progress-widget">
                                <div class="progress sm-progress-bar progress-animate">
                                    <div class="progress-gradient-success" role="progressbar" style="width: 60%"
                                        aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"><span
                                            class="animate-circle"></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-4 col-lg-6">
                    <div class="card o-hidden">
                        <div class="card-body">
                            <div class="media static-top-widget">
                                <div class="media-body">
                                    <h6 class="font-roboto">Jumlah Kegiatan</h6>
                                    <h4 class="mb-0 counter">893</h4>
                                </div>
                            </div>
                            <div class="progress-widget">
                                <div class="progress sm-progress-bar progress-animate">
                                    <div class="progress-gradient-primary" role="progressbar" style="width: 48%"
                                        aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"><span
                                            class="animate-circle"></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->
    </div>
@endsection
