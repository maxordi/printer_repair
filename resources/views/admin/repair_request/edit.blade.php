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
                                <li class="drop"><a href="/admin/repair_requests" title="repair_request" class="link-active">Заявки</a></li>
                                <li><a href="#" title="clients">Клиенты</a></li>
                                <li><a href="/admin/masters" title="masters" >Мастера</a></li>
                                <li><a href="/admin/printers">Принтера</a></li>
                                <li><a href="/admin/repairs">Ремонты</a></li>
                            </ul>
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
                                <li class="breadcrumb-item"><a href="/admin/repair_requests">Заявки на ремонт</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Редактирование заявок</li>
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
            <div class="container-fluid">
                <div class="row section-heading-wrapper">
                    <div class="col-md-12 col-sm-12 text-center">
                        <h2 class="section-heading">Заявки на ремонт</h2>
                        <p class="section-subheading">
                            Здесь вы можете редактировать данные о зоявке на ремонт
                        </p>
                    </div> <!-- end .col-sm-10  -->
                </div>
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <!-- Row -->
            <div class="row">
                <div class="col-lg-12 col-xlg-12 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form class="form-horizontal form-material mx-2"
                                  method="post" action="{{route('repair_requests.update', ['repair_request' => $repair_request])}}">
                                @method('PUT')
                                @csrf
                                <div class="form-group">
                                    <label class="col-md-12">Брэнд принтера</label>
                                    <div class="col-md-12">
                                        <select name="brand" id="brand" class="form-control">
                                            <option value="">Выберите брэнд</option>
                                            @foreach ($brands as $brand)
                                                <option value="{{ $brand->id }}" @if($brand->id == $repair_request->brand_id) selected @endif>{{ $brand->brand }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Модель принтера</label>
                                    <div class="col-md-12">
                                        <select name="model" id="model" class="form-control">
                                            <option value="">Выберите модель</option>
                                            @foreach ($models as $model)
                                                <option value="{{ $model->id }}" @if($model->id == $repair_request->model_id) selected @endif>{{ $model->model }}</option>

                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Фамилия Имя Отчество</label>
                                    <div class="col-md-12">
                                        <input type="text" name="client_name"
                                               class="form-control form-control-line" value="{{$repair_request->client_name}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Контактный телефон</label>
                                    <div class="col-md-12">
                                        <input type="text" name="phone"
                                               class="form-control form-control-line" value="{{$repair_request->phone}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Адрес</label>
                                    <div class="col-md-12">
                                        <input type="text" name="address"
                                               class="form-control form-control-line" value="{{$repair_request->address}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Примечание</label>
                                    <div class="col-md-12">
                                        <textarea type="text" name="issue_description"
                                                  class="form-control form-control-line @error('issue_description') is-invalid @enderror">{{$repair_request->issue_description}}
                                        </textarea>
                                    </div>
                                    @error('issue_description')
                                    @foreach($errors->get('issue_description') as $error)
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

