@extends('layouts.admin')
@section('content')
</div>
            <h4 class="page-title">Dashboard</h4>
        </div>
    </div>
</div>
<!-- end page title -->
<div class="row">
    <div class="col-xl-12 col-lg-12">
        <div class="row">
            <div class="col-md-12">
                <div class="card widget-flat">
                    <div class="card-body">

                    <div class="card-header card_header">
                       <div class="row">
                            <div class="col-md-8 ">
                                <h4 class="d-flex align-items-center card_header_title">All Subscriber<i class="fa-solid fa-square-plus card_header_icon"></i></h4>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-10">
                                <table class="table table-striped custom_table">
                                    <thead class="table-dark">
                                        <tr >
                                            <th>sub Id</th>
                                            <th>Email Address</th>
                                            <th>Manage</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($all as $data)
                                        <tr>
                                            <td>{{$data->id}}</td>
                                            <td>{{$data->sub_email}}</td>
                                            <td>
                                                <div class="btn-group" role="group">
                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                    Manage
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="#">View</a></li>
                                                        <li><a class="dropdown-item" href="#">Edit</a></li>
                                                        <li><a class="dropdown-item" href="#">Delete</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-1"></div>
                        </div>
                  </div>
                    <div class="card-footer card_footer">
                        <div class="btn-group" role="group" aria-label="">
                            <button type="button" class="btn btn-secondary">Print</button>
                            <button type="button" class="btn btn-primary">PDF</button>
                            <button type="button" class="btn btn-secondary">Excel</button>
                        </div>
                    </div>

                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col-->
        </div> <!-- end row -->
    </div> <!-- end col -->
</div>
@endsection