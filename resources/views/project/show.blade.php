@extends('layouts.app')

@section('content')
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-6 col-8 align-self-center">
                    <h3 class="text-themecolor m-b-0 m-t-0">{{ $project->title }}</h3>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/project">Проекты</a></li>
                        <li class="breadcrumb-item active">{{ $project->title }}</li>
                    </ol>
                </div>
                <div class="col-md-6 col-4 align-self-center">
                    <button class="right-side-toggle waves-effect waves-light btn-info btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                    <button class="btn pull-right hidden-sm-down btn-success"><i class="mdi mdi-plus-circle"></i> Create</button>
                    <div class="dropdown pull-right m-r-10 hidden-sm-down">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            January 2017
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">February 2017</a>
                            <a class="dropdown-item" href="#">March 2017</a>
                            <a class="dropdown-item" href="#">April 2017</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="row">
                <!-- Column -->
                <div class="col-md-6 col-lg-3 col-xlg-3">
                    <div class="card card-inverse card-info">
                        <div class="box bg-info text-center">
                            <h1 class="font-light text-white">4 850 000</h1>
                            <h6 class="text-white">Сумма</h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-3 col-xlg-3">
                    <div class="card card-inverse card-success">
                        <div class="box text-center">
                            <h1 class="font-light text-white">3 100 000</h1>
                            <h6 class="text-white">Себестоимость</h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-3 col-xlg-3">
                    <div class="card card-primary card-inverse">
                        <div class="box text-center">
                            <h1 class="font-light text-white">48</h1>
                            <h6 class="text-white">Срок по договору</h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-3 col-xlg-3">
                    <div class="card card-inverse card-warning">
                        <div class="box text-center">
                            <h1 class="font-light text-white">59</h1>
                            <h6 class="text-white">Реальный срок</h6>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-block">
                            <h4 class="card-title">Со стороны клиента работает</h4>
                            <h6 class="card-subtitle">what members preformance / weekly status</h6>
                            <div class="table-responsive m-t-40">
                                <table class="table table-hover v-middle">
                                    <thead>
                                    <tr>
                                        <th style="width: 60px;"> Ava </th>
                                        <th> Name </th>
                                        <th> Earnings </th>
                                        <th> Posts </th>
                                        <th> Reviews </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <img class="img-circle" src="/monster_admin/assets/images/users/1.jpg" alt="user" width="50"> </td>
                                        <td>
                                            <a href="javascript:;">Govinda</a>
                                        </td>
                                        <td> $325 </td>
                                        <td> 45 </td>
                                        <td>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star-half-full text-warning"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img class="img-circle" src="/monster_admin/assets/images/users/2.jpg"  alt="user" width="50"> </td>
                                        <td>
                                            <a href="javascript:;">Genelia</a>
                                        </td>
                                        <td> $225 </td>
                                        <td> 35 </td>
                                        <td>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star-half-full text-warning"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img class="img-circle" src="/monster_admin/assets/images/users/3.jpg"  alt="user" width="50"> </td>
                                        <td>
                                            <a href="javascript:;">Hrithik</a>
                                        </td>
                                        <td> $185 </td>
                                        <td> 28 </td>
                                        <td>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star-half-full text-warning"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img class="img-circle" src="/monster_admin/assets/images/users/4.jpg"  alt="user" width="50"> </td>
                                        <td>
                                            <a href="javascript:;">Salman</a>
                                        </td>
                                        <td> $125 </td>
                                        <td> 25 </td>
                                        <td>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star-half-full text-warning"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img class="img-circle" src="/monster_admin/assets/images/users/2.jpg"  alt="user" width="50"> </td>
                                        <td>
                                            <a href="javascript:;">Genelia</a>
                                        </td>
                                        <td> $225 </td>
                                        <td> 35 </td>
                                        <td>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star-half-full text-warning"></i>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <div class="text-center">
                                    <button class="btn btn-success">Check more</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-block">
                            <button class="btn pull-right hidden-sm-down btn-success"><i class="mdi mdi-plus-circle"></i> Create</button>
                            <h4 class="card-title">Доступы</h4>
                            <h6 class="card-subtitle">24 new support ticket request generate</h6>
                        </div>
                        <div class="comment-widgets">
                            <!-- Comment Row -->
                            <div class="d-flex flex-row comment-row">
                                <div class="p-2">
                                    <div class="access_icon bg-light-success"><i class="ti-server"></i></div>
                                </div>
                                <div class="comment-text w-100">
                                    <h5><a href="http://46.254.19.137/phpmyadmin/sql.php?server=1&db=aiba&table=users&pos=0" target="_blank">ВПС Сервер <i class="ti-link"></i></a></h5>
                                    <p class="m-b-5">root</p>
                                    <p class="m-b-5">#$HBHJB46456uuuU</p>
                                    <div class="comment-footer">
                                        <span class="text-muted pull-right">April 14, 2016</span>
                                        <span class="label label-light-success">Правильно</span>
                                        <span class="action-icons">
                                            <a href="javascript:void(0)"><i class="ti-pencil-alt"></i></a>
                                            <a href="javascript:void(0)"><i class="ti-check"></i></a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- Comment Row -->
                            <div class="d-flex flex-row comment-row">
                                <div class="p-2">
                                    <div class="access_icon bg-light-info"><i class="ti-layout-grid2"></i></div>
                                </div>
                                <div class="comment-text w-100">
                                    <h5><a href="http://46.254.19.137/phpmyadmin/sql.php?server=1&db=aiba&table=users&pos=0" target="_blank">Админка  <i class="ti-link"></i></a></h5>
                                    <p class="m-b-5">admin@admin.com</p>
                                    <p class="m-b-5">admin12345</p>
                                    <div class="comment-footer">
                                        <span class="text-muted pull-right">April 14, 2016</span>
                                        <span class="label label-light-danger">Неправильно</span>
                                        <span class="action-icons">
                                            <a href="javascript:void(0)"><i class="ti-pencil-alt"></i></a>
                                            <a href="javascript:void(0)"><i class="ti-check"></i></a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Row -->
            <div class="row">
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-block">
                            <h4 class="card-title">Документы</h4>
                            <h6 class="card-subtitle">check out your daily schedule</h6>
                            <div class="steamline m-t-40">
                                <div class="sl-item">
                                    <div class="sl-left bg-success"> <i class="ti-files"></i></div>
                                    <div class="sl-right">
                                        <div class="font-medium">Договор <span class="sl-date"> 5mb</span></div>
                                        <div class="desc">you can write anything </div>
                                    </div>
                                </div>
                                <div class="sl-item">
                                    <div class="sl-left bg-danger"><i class="ti-files"></i></div>
                                    <div class="sl-right">
                                        <div class="font-medium">АКТ не прикреплен</div>
                                        <div class="desc">Lorem Ipsum is simply </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-block">
                            <select class="custom-select pull-right">
                                <option selected="">March</option>
                                <option value="1">February</option>
                                <option value="2">May</option>
                                <option value="3">April</option>
                            </select>
                            <h4 class="card-title">Статусы</h4>
                            <h6 class="card-subtitle">Check the monthly sales </h6>
                        </div>
                        <div class="card-block bg-light">
                            <div class="row">
                                <div class="col-6">
                                    <h2 class="m-b-0">March 2017</h2>
                                    <h4 class="font-light m-t-0">Report for this month</h4></div>
                                <div class="col-6 align-self-center display-6 text-info text-right">$3,690</div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th>NAME</th>
                                    <th>STATUS</th>
                                    <th>DATE</th>
                                    <th>PRICE</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td class="txt-oflo">Elite admin</td>
                                    <td><span class="label label-success label-rouded">SALE</span> </td>
                                    <td class="txt-oflo">April 18, 2017</td>
                                    <td><span class="text-success">$24</span></td>
                                </tr>
                                <tr>
                                    <td class="text-center">2</td>
                                    <td class="txt-oflo">Real Homes WP Theme</td>
                                    <td><span class="label label-info label-rouded">EXTENDED</span></td>
                                    <td class="txt-oflo">April 19, 2017</td>
                                    <td><span class="text-info">$1250</span></td>
                                </tr>
                                <tr>
                                    <td class="text-center">3</td>
                                    <td class="txt-oflo">Ample Admin</td>
                                    <td><span class="label label-info label-rouded">EXTENDED</span></td>
                                    <td class="txt-oflo">April 19, 2017</td>
                                    <td><span class="text-info">$1250</span></td>
                                </tr>
                                <tr>
                                    <td class="text-center">4</td>
                                    <td class="txt-oflo">Medical Pro WP Theme</td>
                                    <td><span class="label label-danger label-rouded">TAX</span></td>
                                    <td class="txt-oflo">April 20, 2017</td>
                                    <td><span class="text-danger">-$24</span></td>
                                </tr>
                                <tr>
                                    <td class="text-center">5</td>
                                    <td class="txt-oflo">Hosting press html</td>
                                    <td><span class="label label-warning label-rouded">SALE</span></td>
                                    <td class="txt-oflo">April 21, 2017</td>
                                    <td><span class="text-success">$24</span></td>
                                </tr>
                                <tr>
                                    <td class="text-center">6</td>
                                    <td class="txt-oflo">Digital Agency PSD</td>
                                    <td><span class="label label-success label-rouded">SALE</span> </td>
                                    <td class="txt-oflo">April 23, 2017</td>
                                    <td><span class="text-danger">-$14</span></td>
                                </tr>
                                <tr>
                                    <td class="text-center">7</td>
                                    <td class="txt-oflo">Helping Hands WP Theme</td>
                                    <td><span class="label label-warning label-rouded">member</span></td>
                                    <td class="txt-oflo">April 22, 2017</td>
                                    <td><span class="text-success">$64</span></td>
                                </tr>
                                <tr>
                                    <td class="text-center">8</td>
                                    <td class="txt-oflo">Ample Admin</td>
                                    <td><span class="label label-info label-rouded">EXTENDED</span></td>
                                    <td class="txt-oflo">April 19, 2017</td>
                                    <td><span class="text-info">$1250</span></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Column -->
            </div>
            <!-- Row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="card earning-widget">
                        <div class="card-block">
                            <div class="card-title">
                                <select class="custom-select pull-right">
                                    <option selected="">March</option>
                                    <option value="1">February</option>
                                    <option value="2">May</option>
                                    <option value="3">April</option>
                                </select>
                                <h4 class="card-title m-b-0">Исходника</h4>
                                <h2 class="m-t-0">$586</h2>
                            </div>
                        </div>
                        <div class="card-block b-t">
                            <table class="table v-middle no-border">
                                <tbody>
                                <tr>
                                    <td style="width:40px"><img src="/monster_admin/assets/images/users/1.jpg" width="50" class="img-circle" alt="logo"></td>
                                    <td>Andrew Simon</td>
                                    <td class="text-right"><span class="label label-light-info">$2300</span></td>
                                </tr>
                                <tr>
                                    <td><img src="/monster_admin/assets/images/users/2.jpg" width="50" class="img-circle" alt="logo"></td>
                                    <td>Daniel Kristeen</td>
                                    <td class="text-right"><span class="label label-light-success">$3300</span></td>
                                </tr>
                                <tr>
                                    <td><img src="/monster_admin/assets/images/users/3.jpg" width="50" class="img-circle" alt="logo"></td>
                                    <td>Dany John</td>
                                    <td class="text-right"><span class="label label-light-primary">$4300</span></td>
                                </tr>
                                <tr>
                                    <td><img src="/monster_admin/assets/images/users/4.jpg" width="50" class="img-circle" alt="logo"></td>
                                    <td>Chris gyle</td>
                                    <td class="text-right"><span class="label label-light-warning">$5300</span></td>
                                </tr>
                                <tr>
                                    <td><img src="/monster_admin/assets/images/users/5.jpg" width="50" class="img-circle" alt="logo"></td>
                                    <td>Opera mini</td>
                                    <td class="text-right"><span class="label label-light-danger">$4567</span></td>
                                </tr>
                                <tr>
                                    <td><img src="/monster_admin/assets/images/users/6.jpg" width="50" class="img-circle" alt="logo"></td>
                                    <td>Microsoft edge</td>
                                    <td class="text-right"><span class="label label-light-megna">$7889</span></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-block">
                            <h4 class="card-title">Приложение</h4>
                            <ul class="feeds">
                                <li>
                                    <div class="bg-light-info"><i class="fa fa-bell-o"></i></div> You have 4 pending tasks. <span class="text-muted">Just Now</span></li>
                                <li>
                                    <div class="bg-light-success"><i class="ti-server"></i></div> Server #1 overloaded.<span class="text-muted">2 Hours ago</span></li>
                                <li>
                                    <div class="bg-light-warning"><i class="ti-shopping-cart"></i></div> New order received.<span class="text-muted">31 May</span></li>
                                <li>
                                    <div class="bg-light-danger"><i class="ti-user"></i></div> New user registered.<span class="text-muted">30 May</span></li>
                                <li>
                                    <div class="bg-light-inverse"><i class="fa fa-bell-o"></i></div> New Version just arrived. <span class="text-muted">27 May</span></li>
                                <li>
                                    <div class="bg-light-info"><i class="fa fa-bell-o"></i></div> You have 4 pending tasks. <span class="text-muted">Just Now</span></li>
                                <li>
                                    <div class="bg-light-danger"><i class="ti-user"></i></div> New user registered.<span class="text-muted">30 May</span></li>
                                <li>
                                    <div class="bg-light-inverse"><i class="fa fa-bell-o"></i></div> New Version just arrived. <span class="text-muted">27 May</span></li>
                                <li>
                                    <div class="bg-light-primary"><i class="ti-settings"></i></div> You have 4 pending tasks. <span class="text-muted">27 May</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End PAge Content -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        @include('layouts.footer')
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
@endsection

@section('body-class')
    fix-header card-no-border fix-sidebar
@endsection

@push('scripts')
    @if (session('status'))
        <script>
            $.toast({
                heading: 'Результат действии',
                text: '{{ session('status') }}',
                position: 'top-left',
                loaderBg:'#ffffff',
                icon: 'warning',
                hideAfter: 30000,
                stack: 6
            });
        </script>
    @endif
@endpush

