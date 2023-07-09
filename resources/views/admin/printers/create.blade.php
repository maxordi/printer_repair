@extends('layouts.admin')

@section('content')
    <header class="main-header clearfix">

        <section class="header-wrapper navgiation-wrapper">

            <div class="navbar navbar-default">
                <div class="container clearfix">
                    <div class="navbar-collapse collapse pull-left">
                        <ul class="nav navbar-nav">
                            <li class="drop"><a href="/" title="Home Layout 01" >Главная</a></li>
                            <li><a href="/about_us" title="About Us">О нас</a></li>
                            <li><a href="/repair_requests/create" title="Services">Сервис</a></li>
                            <li><a href="/contact">Контакты</a></li>
                        </ul> <!-- end .nav .navbar-nav  -->
                    </div>
                    <div class="navbar-header pull-right">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="social-icons hidden-sm hidden-xs">
                            <a href="#">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a href="#" class="margin-right-0">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </div> <!-- end .social-icons  -->
                    </div>
                </div>
                <!-- end .container  -->
            </div> <!-- end .navbar .navbar-default  -->
            <div class="navbar navbar-default">
                <div class="container clearfix">
                    <div class="navbar-collapse collapse pull-left">
                        <ul class="nav navbar-nav">
                            <li class="drop"><a href="/admin/repair_requests" title="repair_request" >Заявки</a></li>
                            <li><a href="#" title="clients">Клиенты</a></li>
                            <li><a href="/admin/masters" title="masters" >Мастера</a></li>
                            <li><a href="/admin/printers" class="link-active">Принтера</a></li>
                            <li><a href="/admin/repairs">Ремонты</a></li>
                        </ul> <!-- end .nav .navbar-nav  -->
                    </div>
                </div>
                <!-- end .container  -->
            </div>
        </section>


    </header> <!-- end main-header  -->

    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container clearfix">
        <div class="row align-items-center">
            <div class="col-5">
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/admin/printers">Принтера</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Добавление нового принтера</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <section class="section-content-block section-price-plan section-secondary-bg">

        <div class="container">

            <div class="row section-heading-wrapper">
                <div class="col-md-12 col-sm-12 text-center">
                    <h2 class="section-heading">Принтера</h2>
                    <p class="section-subheading">
                        Здесь вы можете  добавить необходимый вам принтер из предложенных списков Брэнда и Модели
                    </p>
                </div> <!-- end .col-sm-10  -->
            </div> <!--  end .row  -->

            <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <!-- Row -->
            <div class="row">
                <div class="col-lg-12 col-xlg-12 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form class="form-horizontal form-material mx-2"
                                  method="post" action="{{route('printers.store')}}">
                                @csrf
                                <div class="form-group">
                                    <label class="col-md-12">Брэнд</label>
                                    <div class="col-md-12">
                                        <select name="brand_id" class="form-control form-control-line">
                                            @foreach($printer_brands as $printer_brand)
                                                <option value="{{$printer_brand->id}}">{{$printer_brand->brand}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Модель</label>
                                    <div class="col-md-12">
                                        <select name="model_id" class="form-control form-control-line">
                                            @foreach($printer_models as $printer_model)
                                                <option value="{{$printer_model->id}}">{{$printer_model->model}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button class="btn btn-success text-white">Сохранить</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Column -->
            </div>
            <!-- Row -->
            <!-- ============================================================== -->
            <!-- End PAge Content -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Right sidebar -->
            <!-- ============================================================== -->
            <!-- .right-sidebar -->
            <!-- ============================================================== -->
            <!-- End Right sidebar -->
            <!-- ============================================================== -->
        </div>


        </div> <!-- end .container  -->

    </section> <!-- end .price-plan-section  -->

    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
    </div>
@endsection

