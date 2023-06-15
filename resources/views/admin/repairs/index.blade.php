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
                                <li class="breadcrumb-item active" aria-current="page">Ремонты</li>
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
                        <a href="{{route('repairs.create')}}" class="btn btn-success">ADD</a>
                        <div class="table-responsive">
                            <table class="table v-middle">
                                <thead>
                                <tr class="bg-light">
                                    <th class="border-top-0">Id</th>
                                    <th class="border-top-0">Принтер</th>
                                    <th class="border-top-0">Клиент</th>
                                    <th class="border-top-0">Мастер</th>
                                    <th class="border-top-0">Дата проведения ремонта </th>
                                    <th class="border-top-0">Описание</th>
                                    <th class="border-top-0">Статус</th>
                                    <th class="border-top-0">Стоимость работ</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($repairs as $repair)
                                <tr>
                                    <td>{{$repair->id}}</td>
                                    <td>{{$repair->printer->brand}}</td>
                                    <td>{{$repair->user->name}}</td>
                                    <td>{{$repair->master->name}}</td>
                                    <td>{{$repair->repair_date}}</td>
                                    <td>{{$repair->description}}</td>
                                    <td>{{$repair->repair_status}}</td>
                                    <td>{{$repair->cost}}</td>
                                    <td>
                                        <form action="{{route('repairs.destroy', ['repair'=>$repair->id])}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {!!$repairs->links('vendor.pagination.simple-bootstrap-5')!!}
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
