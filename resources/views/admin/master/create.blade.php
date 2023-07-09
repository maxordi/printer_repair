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


    </header>
    <div class="page-wrapper">

        <div class="container clearfix">
            <div class="row align-items-center">
                <div class="col-5">
                    <div class="d-flex align-items-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/admin/masters">Мастера</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Добавление мастера</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <section class="section-content-block section-price-plan section-secondary-bg">

            <div class="container">
                 <div class="container-fluid">
                     <div class="container-fluid">
                         <div class="row section-heading-wrapper">
                             <div class="col-md-12 col-sm-12 text-center">
                                 <h2 class="section-heading">Мастера</h2>
                                 <p class="section-subheading">
                                     Здесь вы можете добавлять нового сотрудника
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
                                  method="post" action="{{route('masters.store')}}">
                                @csrf
                                <div class="form-group">
                                    <label class="col-md-12">Фамилия Имя Отчество</label>
                                    <div class="col-md-12">
                                        <input type="text" name="full_name"
                                               class="form-control form-control-line">
                                    </div>
                                </div>
                                @error('full_name')
                                @foreach($errors->get('full_name') as $error)
                                    <div class="alert alert-danger" role="alert">
                                        {{$error}}
                                    </div>
                                @endforeach
                                @enderror

                                <div class="form-group">
                                    <label class="col-md-12">Контактные данные (мобильный телефон)</label>
                                    <div class="col-md-12">
                                        <input type="text" name="contact_details"
                                               class="form-control form-control-line">
                                    </div>
                                </div>
                                @error('contact_details')
                                @foreach($errors->get('contact_details') as $error)
                                    <div class="alert alert-danger" role="alert">
                                        {{$error}}
                                    </div>
                                @endforeach
                                @enderror

                                <div class="form-group">
                                    <label class="col-md-12">Специальность</label>
                                    <div class="col-md-12">
                                        <input type="text" name="specialty"
                                               class="form-control form-control-line">
                                    </div>
                                </div>
                                @error('specialty')
                                @foreach($errors->get('specialty') as $error)
                                    <div class="alert alert-danger" role="alert">
                                        {{$error}}
                                    </div>
                                @endforeach
                                @enderror

                                <div class="form-group">
                                    <label class="col-md-12">Стаж работы (лет)</label>
                                    <div class="col-md-12">
                                        <input type="text" name="experience"
                                               class="form-control form-control-line">
                                    </div>
                                </div>
                                @error('experience')
                                @foreach($errors->get('experience') as $error)
                                    <div class="alert alert-danger" role="alert">
                                        {{$error}}
                                    </div>
                                @endforeach
                                @enderror

                                <div class="form-group">
                                    <label class="col-md-12">Примечание</label>
                                    <div class="col-md-12">
                                        <textarea type="text" name="note"
                                                  class="form-control form-control-line @error('note') is-invalid @enderror">
                                        </textarea>
                                    </div>
                                    @error('note')
                                    @foreach($errors->get('note') as $error)
                                        <div class="alert alert-danger" role="alert">
                                            {{$error}}
                                        </div>
                                    @endforeach
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button class="btn btn-warning text-white">Сохранить</button>
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
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer text-center">
            All Rights Reserved by Xtreme Admin. Designed and Developed by <a
                href="https://www.wrappixel.com">WrapPixel</a>.
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
@endsection

