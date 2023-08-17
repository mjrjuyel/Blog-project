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
                                    <h4 class="d-flex align-items-center card_header_title">All User<i class="fa-solid fa-square-plus card_header_icon"></i></h4>
                                </div>
                                <div class="col-md-4 text-end">
                                    <a class="btn btn-sm btn-secondary card_header_btn" href="{{url('dashboard/user/add')}}"><i class="dripicons-user-group"></i> Add User</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body card_body">
                            <div class="row">
                                <div class="col-md-10 offset-md-1">
                                    <table class="table table-striped custom_table">
                                        <thead class="table-dark">
                                            <tr >
                                            <th scope="col">User Id</th>
                                            <th scope="col">User Name</th>
                                            <th scope="col">User Email</th>
                                            <th scope="col">User Phone</th>
                                            <th scope="col">User Photo</th>
                                            <th scope="col">User Role</th>
                                            <th scope="col">Manage</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($user as $data)
                                            <tr>
                                            <th>{{$data->id}}</th>
                                            <td>{{$data->name}}</td>
                                            <td>{{$data->email}}</td>
                                            <td>{{$data->phone}}</td>
                                            <td>
                                                @if($data->photo != '')
                                                <img src="{{asset('uploads/admin/user/'.$data->photo)}}" alt="User" width="80px" height="100px" style="object-fit: cover;">
                                                @else
                                                <img src="{{asset('uploads/admin/user/avatar.png')}}" alt="User" width="80px" height="100px" style="object-fit: cover;">
                                                @endif
                                            </td>
                                            <td>{{$data->roleinfo->role_title}}</td>
                                            <td>
                                                <div class="btn-group" role="group">
                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                    Manage
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="{{url('dashboard/user/view/'.$data->slug)}}">View</a></li>
                                                    <li><a class="dropdown-item" href="{{url('dashboard/user/edit/'.$data->slug)}}">Edit</a></li>
                                                    <li><a class="dropdown-item"  href="#" id="softDelete" title="delete" data-bs-toggle="modal" data-bs-target="#softDeleteModal" data-id="{{$data->id}}">Delete</a></li>
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
                                <a href="#" onclick="window.print()" class="btn btn-secondary">Print</a>
                                <a href="{{url('dashboard/user/pdf')}}" class="btn btn-primary">PDF</a>
                                <a href="{{url('/dashboard/user/excel')}}" class="btn btn-secondary">Excel</a>
                            </div>
                        </div>

                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col-->
        </div> <!-- end row -->
    </div> <!-- end col -->
</div>

<!-- Modal Div Start -->
<div id="softDeleteModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <form method="post" action="{{url('/dashboard/user/softdel')}}">
                @csrf
        <div class="modal-dialog">
            <div class="modal-content">
                
                    <div class="modal-header modal-colored-header bg-warning">
                    <h4 class="modal-title" id="warning-header-modalLabel">User Delete</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                    </div>
                    <div class="modal-body modal_body">
                        Sure To Delete?
                        <input type="text"  name="modal_id" id="modal_id"/>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">No</button>
                        <button type="submit" class="btn btn-warning">Yes</button>
                    </div>
            
                
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </form>
</div><!-- /.modal -->
@endsection