@extends('layouts.my')

@section('content')
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row align-items-center">
                <div class="col-5">
                    <h4 class="page-title">Profile Page</h4>
                    <div class="d-flex align-items-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Ремонты</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="col-7">
                    <div class="text-end upgrade-btn">
                        <a href="https://www.wrappixel.com/templates/xtremeadmin/" class="btn btn-danger text-white"
                           target="_blank">Upgrade to Pro</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
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
                                <div class="form-group">
                                    <label class="col-md-12">Описание проблемы</label>
                                    <div class="col-md-12">
                                        <textarea type="text" name="description"
                                               class="form-control form-control-line @error('description') is-invalid @enderror">
                                        </textarea>
                                    </div>
                                    @error('description')
                                        @foreach($errors->get('description') as $error)
                                            @dump($error)
                                        @endforeach
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Статус ремонта</label>
                                    <div class="col-md-12">
                                        <input type="text" name="status"
                                               class="form-control form-control-line">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Стоимость ремонта</label>
                                    <div class="col-md-12">
                                        <input type="text" name="price"
                                               class="form-control form-control-line">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Дата ремонта</label>
                                    <div class="col-md-12">
                                        <input type="date" name="competion_date"
                                               class="form-control form-control-line">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button class="btn btn-success text-white">Save</button>
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

