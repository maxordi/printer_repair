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
                            <li><a href="/admin/masters" title="masters" class="link-active">Мастера</a></li>
                            <li><a href="/admin/printers">Принтера</a></li>
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

        <section class="section-content-block section-price-plan section-secondary-bg">

            <div class="container">

                <div class="row section-heading-wrapper">
                    <div class="col-md-12 col-sm-12 text-center">
                        <h2 class="section-heading">Мастера</h2>
                        <p class="section-subheading">
                            Здесь вы можете просматривать и редактировать информацию о мастерах, а так же добовлять новых мастеров или удолять их
                        </p>
                    </div> <!-- end .col-sm-10  -->
                </div> <!--  end .row  -->

                <div class="container-fluid">

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
                                            <th class="border-top-0">Фамилия Имя Отчество</th>
                                            <th class="border-top-0">Контактные данные</th>
                                            <th class="border-top-0">Специальность</th>
                                            <th class="border-top-0">Стаж работы (лет)</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($masters as $master)
                                            <tr>
                                                <td>{{$master->full_name}}</td>
                                                <td>{{$master->contact_details}}</td>
                                                <td>{{$master->specialty}}</td>
                                                <td>{{$master->experience}}</td>
                                                <td><a href="{{ route('masters.edit', ['master'=> $master->id]) }}" class="btn btn-warning text-white">Редактировать</a></td>
                                                <td>
                                                    <form action="{{route('masters.destroy', ['master'=>$master->id])}}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger">Удалить</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    {!!$masters->links('vendor.pagination.simple-bootstrap-5')!!}
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <a href="{{route('masters.create')}}" class="btn btn-warning text-white">Добавить мастера</a>
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
