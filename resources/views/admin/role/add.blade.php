@extends('layouts.admin')
@section('content')
</div>
            <h4 class="page-title">Dashboard - USER - ROLE</h4>
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
                    <form method="post" action="{{url('/dashboard/user/role/insert')}}" enctype="multipart/form-data">
                        @csrf
                    <div class="card-header card_header">
                       <div class="row">
                        <div class="col-md-8 ">
                            <h4 class="d-flex align-items-center card_header_title">Add Role More <i class="fa-solid fa-square-plus card_header_icon"></i></h4>
                        </div>
                        <div class="col-md-4 text-end">
                            <a class="btn btn-sm btn-secondary card_header_btn" href="{{url('dashboard/user/role')}}"><i class="dripicons-user-group"></i> All Role</a>
                        </div>
                        </div>
                    </div>

                    <div class="card-body">
                        @if(Session::get('Success'))
                        <div class="alert alert-success">{{Session::get('Success')}}</div>
                        @endif
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8">
                                <div class="row g-3">
                                    <div class="col-md-3 text-end">
                                        <label for="" class="col-form-label col_form_label">Role Name : <span class="valid_sign">*</span></label>
                                    </div>
                                    <div class="col-md-7">
                                        <input type="text" id="" class="form-control form_control" name="role" value="{{old('role')}}">
                                        @if($errors->has('role'))
                                        <span class="invalid_msg" role="alert">
                                            <strong>{{$errors->first('role')}}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>s
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                    </div>


                    <div class="card-footer card_footer text-center">
                        <button type="submit" class="btn btn-secondary Submit_button">Submit</button>
                    </div>
                    </form>
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col-->
        </div> <!-- end row -->
    </div> <!-- end col -->
</div>
@endsection