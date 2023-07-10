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
        <div class="row section-heading-wrapper">
            <div class="col-md-12 col-sm-12 text-center">
                <h2 class="section-heading">Заявки</h2>
                <p class="section-subheading">
                    Здесь вы можете просматривать, создавать и редактировать информацию о завяках, а так же удолять их
                </p>
            </div> <!-- end .col-sm-10  -->
        </div>
            <!-- Table -->
            <!-- ============================================================== -->
            <div class="row">
                <!-- column -->
                <div class="col-12">
                    <div class="card">

                        <div class="table-responsive">
                            <a href="{{route('repair_requests.create')}}" class="btn btn-warning text-white">Создать заявку</a>
                            <table class="table v-middle">
                                <thead>
                                <tr class="bg-light">
                                    <th class="border-top-0">Принтер</th>
                                    <th class="border-top-0">Модель принтера</th>
                                    <th class="border-top-0">Ф.И.О.Клиента</th>
                                    <th class="border-top-0">Телефон</th>
                                    <th class="border-top-0">Адрес</th>
                                    <th class="border-top-0">Описание проблемы</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($repair_requests as $repair_request)
                                    <tr>
                                        <td>{{$repair_request->printerBrand->brand}}</td>
                                        <td>{{$repair_request->printerModel->name}}</td>
                                        <td>{{$repair_request->client_name}}</td>
                                        <td>{{$repair_request->phone}}</td>
                                        <td>{{$repair_request->address}}</td>
                                        <td>{{$repair_request->issue_description}}</td>
                                        <td><a href="{{ route('repair_requests.edit', ['repair_request' => $repair_request]) }}"class="btn btn-warning text-white">Редактировать</a></td>
                                        <td>
                                            <form action="{{route('repair_requests.destroy', ['repair_request'=>$repair_request->id])}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger">Удалить</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {!!$repair_requests->links('vendor.pagination.simple-bootstrap-5')!!}
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Table -->
            <!-- ============================================================== -->
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
