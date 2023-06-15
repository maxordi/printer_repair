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
                                <li class="breadcrumb-item active" aria-current="page">Library</li>
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
                        <a href="{{route('printers.create')}}" class="btn btn-success">ADD</a>
                        <div class="table-responsive">
                            <table class="table v-middle">
                                <thead>
                                <tr class="bg-light">
                                    <th class="border-top-0">Id</th>
                                    <th class="border-top-0">Brand</th>
                                    <th class="border-top-0">Model</th>
                                    <th class="border-top-0">Serial_number</th>
                                    <th class="border-top-0">Created_at</th>
                                    <th class="border-top-0">Updated_at</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($printers as $printer)
                                <tr>
                                    <td>{{$printer->id}}</td>
                                    <td>{{$printer->brand}}</td>
                                    <td>{{$printer->model}}</td>
                                    <td>{{$printer->serial_number}}</td>
                                    <td>{{$printer->created_at}}</td>
                                    <td>{{$printer->updated_at}}</td>
                                    <td>
                                        <a href="{{route('printers.edit', ['printer'=>$printer->id])}}" class="label label-danger">Angular</a>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {!!$printers->links('vendor.pagination.simple-bootstrap-5')!!}
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
