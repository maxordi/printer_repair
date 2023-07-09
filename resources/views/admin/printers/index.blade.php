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
                                <li><a href="/admin/printers" class="link-active">Принтера</a></li>
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

        <section class="section-content-block section-price-plan section-secondary-bg">

            <div class="container">
                <!-- ============================================================== -->
        <div class="container-fluid">
            <div class="row section-heading-wrapper">
                <div class="col-md-12 col-sm-12 text-center">
                    <h2 class="section-heading">Принтера</h2>
                    <p class="section-subheading">
                        Здесь вы можете  просматривать, добовлять либо удолять ненужные вам принтера
                    </p>
                </div> <!-- end .col-sm-10  -->
            </div> <!--  end .row  -->
            <!-- Table -->
            <!-- ============================================================== -->
            <div class="row">
                <!-- column -->
                <div class="col-12">
                    <div class="card">
                        <div class="table-responsive">
                            <table class="table v-middle">
                                <thead>
                                <tr class="bg-light">
                                    <th class="border-top-0">Брэнд</th>
                                    <th class="border-top-0">Модель</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($printers as $printer)
                                <tr>
                                    <td>{{$printer->printerBrand->brand}}</td>
                                    <td>{{$printer->printerModel->model}}</td>
                                    <td>
                                        <form action="{{route('printers.destroy', ['printer'=>$printer->id])}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger">Удалить</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {!!$printers->links('vendor.pagination.simple-bootstrap-5')!!}
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <a href="{{route('printers.create')}}" class="btn btn-warning text-white">Добавить принтер</a>
                                </div>
                            </div>
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
