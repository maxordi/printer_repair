@extends('layouts.my')

@section('content')
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row align-items-center">
                <div class="col-5">
                    <h4 class="page-title">Dashboard</h4>
                    <div class="d-flex align-items-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Заявка на ремонт(заправку)</li>
                            </ol>
                        </nav>
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

            <!-- Table -->
            <!-- ============================================================== -->
            <div class="row">
                <!-- column -->
                <div class="col-12">
                    <div class="card">
                        <a href="{{route('repair_requests.create')}}" class="btn btn-success">ADD</a>
                        <div class="table-responsive">
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
                                        <td>{{$repair_request->printerModel->model}}</td>
                                        <td>{{$repair_request->client_name}}</td>
                                        <td>{{$repair_request->phone}}</td>
                                        <td>{{$repair_request->address}}</td>
                                        <td>{{$repair_request->issue_description}}</td>
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
