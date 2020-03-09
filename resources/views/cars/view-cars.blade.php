@extends('layouts.layout')

@section('content')
<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">

    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">My Saved Cars</h4>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover zero-configuration">
                                <thead>
                                    <tr>
                                        <th>SN</th>
                                        <th>Make</th>
                                        <th>Model</th>
                                        <th>Model Year</th>
                                        <th>Color</th>
                                        <th>Plate Number</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php($count = 0)
                                    @foreach ($cars as $car)
                                    <tr>
                                        <td>{{ ++$count }}</td>
                                        <td>{{ $car->make }}</td>
                                        <td>{{ $car->model }}</td>
                                        <td>{{ $car->model_year }}</td>
                                        <td style="background-color: {{ $car->color }};">{{ $car->color }}</td>
                                        <td>{{ $car->plate_number }}</td>
                                        <td>
                                            <a class="btn btn-success btn-rounded btn-sm" data-toggle="tooltip"
                                                data-placement="top" title="View" style="color:white;"
                                                href="{{ url('cars/view-car/'.$car->id) }}">
                                                <span class="fa fa-eye"></span>
                                            </a>
                                            <a class="btn btn-warning btn-rounded btn-sm" data-toggle="tooltip"
                                                data-placement="top" title="Edit" style="color:white;"
                                                href="{{ route('cars/edit-car', ['id'=>$car->id]) }}">
                                                <span class="fa fa-edit"></span>
                                            </a>
                                            <a class="btn btn-danger btn-rounded btn-sm" data-toggle="tooltip"
                                                data-placement="top" title="Delete" style="color:white;"
                                                href="{{ url('cars/delete-car/'.$car->id) }}">
                                                <span class="fa fa-trash"></span>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>SN</th>
                                        <th>Make</th>
                                        <th>Model</th>
                                        <th>Model Year</th>
                                        <th>Color</th>
                                        <th>Plate Number</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #/ container -->
</div>
<!--**********************************
            Content body end
        ***********************************-->
@endsection
