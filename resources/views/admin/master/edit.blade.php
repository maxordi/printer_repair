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
                            <li class="drop"><a href="/" title="repair_request" >Заявки</a></li>
                            <li><a href="/clients" title="clients">Клиенты</a></li>
                            <li><a href="/admin/masters" title="masters" class="link-active">Мастера</a></li>
                            <li><a href="/printers">Принтера</a></li>
                            <li><a href="/repairs">Ремонты</a></li>
                        </ul> <!-- end .nav .navbar-nav  -->
                    </div>
                </div>
                <!-- end .container  -->
            </div>

        </section>


    </header>
    <div class="page-wrapper">

        <div class="container clearfix">
            <div class="row align-items-center">
                <div class="col-5">
                    <div class="d-flex align-items-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/admin/masters">Мастера</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Редактирование мастера</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <section class="section-content-block section-price-plan section-secondary-bg">

            <div class="container">
        <!-- ============================================================== -->
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
                                  method="post" action="{{route('masters.update', ['master' => $master])}}">
                                @method('PUT')
                                @csrf
                                <div class="form-group">
                                    <label class="col-md-12">Фамилия Имя Отчество</label>
                                    <div class="col-md-12">
                                        <input type="text" name="full_name"
                                               class="form-control form-control-line" value="{{$master->full_name}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Контактные данные</label>
                                    <div class="col-md-12">
                                        <input type="text" name="contact_details"
                                               class="form-control form-control-line" value="{{$master->contact_details}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Специальность</label>
                                    <div class="col-md-12">
                                        <input type="text" name="specialty"
                                               class="form-control form-control-line" value="{{$master->specialty}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Стаж работы</label>
                                    <div class="col-md-12">
                                        <input type="text" name="experience"
                                               class="form-control form-control-line" value="{{$master->experience}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Примечание</label>
                                    <div class="col-md-12">
                                        <textarea type="text" name="note"
                                                  class="form-control form-control-line @error('note') is-invalid @enderror">{{$master->note}}
                                        </textarea>
                                    </div>
                                    @error('note')
                                    @foreach($errors->get('note') as $error)
                                        @dump($error)
                                    @endforeach
                                    @enderror
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
        </section>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->

    </div>
@endsection



