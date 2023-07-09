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
                            <ul class="nav navbar-nav">
                                <li class="drop"><a href="/admin/repair_requests" title="repair_request" >Заявки</a></li>
                                <li><a href="#" title="clients">Клиенты</a></li>
                                <li><a href="/admin/masters" title="masters" >Мастера</a></li>
                                <li><a href="/admin/printers" >Принтера</a></li>
                                <li><a href="/admin/repairs" class="link-active">Ремонты</a></li>
                            </ul>
                        </ul> <!-- end .nav .navbar-nav  -->
                    </div>
                </div>
                <!-- end .container  -->
            </div>

        </section>


    </header>
    <div class="page-wrapper">

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
                                  method="post" action="{{route('repairs.store')}}">
                                @csrf
                                <div class="form-group">
                                    <label class="col-md-12">Брэнд принтера</label>
                                    <div class="form-group">
                                        <label class="col-md-12">Принтер</label>
                                        <div class="col-md-12">
                                            <select name="printer" id="printer" class="form-control">
                                                <option value="">Выберите принтер</option>
                                                @foreach ($printers as $printer)
                                                    <option value="{{ $printer->id }}">{{ $printer->printerBrand->brand }} - {{ $printer->printerModel->model }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    @error('printer')
                                    @foreach($errors->get('printer') as $error)
                                        <div class="alert alert-danger" role="alert">
                                            {{$error}}
                                        </div>
                                    @endforeach
                                    @enderror

                                     <div class="form-group">
                                    <label class="col-md-12">Клиент</label>
                                    <div class="col-md-12">
                                        <select name="client" id="client" class="form-control">
                                            <option value="">Выбирете клиента</option>
                                            @foreach ($clients as $client)
                                                <option value="{{ $client->id}}">{{ $client->client_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                    @error('client')
                                    @foreach($errors->get('client') as $error)
                                        <div class="alert alert-danger" role="alert">
                                            {{$error}}
                                        </div>
                                    @endforeach
                                    @enderror

                                    <div class="form-group">
                                    <label class="col-md-12">Мастер</label>
                                    <div class="col-md-12">
                                        <select name="master" id="master" class="form-control">
                                            <option value="">Назначте мастера</option>
                                            @foreach ($masters as $master)
                                                <option value="{{ $master->id}}">{{ $master->full_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                    @error('master')
                                    @foreach($errors->get('master') as $error)
                                        <div class="alert alert-danger" role="alert">
                                            {{$error}}
                                        </div>
                                    @endforeach
                                    @enderror
                                    <div class="form-group">
                                <label class="col-md-12">Описание проблемы</label>
                                    <div class="col-md-12">
                                        <textarea type="text" name="description"
                                                  class="form-control form-control-line @error('description') is-invalid @enderror">
                                        </textarea>
                                    </div>
                                </div>
                                    @error('description')
                                    @foreach($errors->get('description') as $error)
                                        <div class="alert alert-danger" role="alert">
                                            {{$error}}
                                        </div>
                                    @endforeach
                                    @enderror
                                    <div class="form-group">
                                    <label class="col-md-12">Статус ремонта</label>
                                    <div class="col-md-12">
                                        <input type="text" name="status"
                                               class="form-control form-control-line">
                                    </div>
                                </div>
                                    @error('status')
                                    @foreach($errors->get('status') as $error)
                                        <div class="alert alert-danger" role="alert">
                                            {{$error}}
                                        </div>
                                    @endforeach
                                    @enderror

                                    <div class="form-group">
                                        <label class="col-md-12">Стоимость ремонта</label>
                                        <div class="col-md-12">
                                            <input type="text" name="price"
                                               class="form-control form-control-line">
                                        </div>
                                    </div>
                                    @error('price')
                                    @foreach($errors->get('price') as $error)
                                        <div class="alert alert-danger" role="alert">
                                            {{$error}}
                                        </div>
                                    @endforeach
                                    @enderror

                                     <div class="form-group">
                                        <label class="col-md-12">Дата ремонта</label>
                                        <div class="col-md-12">
                                            <input type="date" name="competion_date"
                                               class="form-control form-control-line">
                                        </div>
                                    </div>
                                    @error('competion_date')
                                    @foreach($errors->get('competion_date') as $error)
                                        <div class="alert alert-danger" role="alert">
                                            {{$error}}
                                        </div>
                                    @endforeach
                                    @enderror

                                    <div class="form-group">
                                        <div class="col-sm-12">
                                         <button class="btn btn-success text-white">Save</button>
                                        </div>
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

