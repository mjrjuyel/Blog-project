@extends('layouts/admin')
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
                                <div class="col-md-10 ">
                                    <h4 class="d-flex align-items-center card_header_title">View User Info<i class="uil-nerd card_header_icon"></i></h4>
                                </div>
                                <div class="col-md-2 d-flex justify-content-between">
                                    <a class="btn btn-sm btn-secondary card_header_btn" href="{{url('dashboard/user/edit/'.$view->slug)}}"><i class="uil-bright"></i>Edit</a>
                                    <a class="btn btn-sm btn-secondary card_header_btn" href="{{url('dashboard/user')}}"><i class="dripicons-user-group"></i> All User</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body card_body">
                            <div class="row">
                                <div class="col-md-8 offset-md-2">
                                    <table class="table table-striped custom_table">
                                        <tbody>
                                            <tr>
                                                <td>Name</td>
                                                <td>:</td>
                                                <td>{{$view->name}}</td>
                                            </tr>
                                            <tr>
                                                <td>Email</td>
                                                <td>:</td>
                                                <td>{{$view->email}}</td>
                                            </tr>
                                            <tr>
                                                <td>Phone</td>
                                                <td>:</td>
                                                <td>{{$view->phone}}</td>
                                            </tr>
                                            <tr>
                                                <td>Address</td>
                                                <td>:</td>
                                                <td>{{$view->address}}</td>
                                            </tr>
                                            <tr>
                                                <td>Photo</td>
                                                <td>:</td>
                                                <td>
                                                @if($view->photo != '')
                                                <img src="{{asset('uploads/admin/user/'.$view->photo)}}" style="object-fit: cover;" width="80px" alt="">
                                                @else
                                                <img src="{{asset('uploads/admin/user/avatar.png')}}" style="object-fit: cover;" width="80px" alt="">
                                                @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Role</td>
                                                <td>:</td>
                                                <td>{{$view->roleinfo->role_title}}</td>
                                            </tr>
                                            <tr>
                                                <td>Created At</td>
                                                <td>:</td>
                                                <td>{{$view->created_at->format('h:m:s A | d-m-y')}}</td>
                                            </tr>
                                            <tr>
                                                <td>Updated At</td>
                                                <td>:</td>
                                                <td>---</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-md-2"></div>
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