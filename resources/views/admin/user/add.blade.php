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
                        <form method="post" action="{{url('/dashboard/user/insert')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-header card_header">
                                <div class="row">
                                    <div class="col-md-8 ">
                                        <h4 class="d-flex align-items-center card_header_title">Add User <i class="fa-solid fa-square-plus card_header_icon"></i></h4>
                                    </div>
                                    <div class="col-md-4 text-end">
                                        <a class="btn btn-sm btn-secondary card_header_btn" href="{{url('dashboard/user')}}"><i class="dripicons-user-group"></i> All User</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body card_body">
                                @if(Session::has('Success'))
                                <div class="">{{Session::get('Success')}}</div>
                                @endif
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-8">
                                        <div class="row g-3">
                                            <div class="col-md-3 text-end">
                                                <label for="" class="col-form-label col_form_label">Name : <span class="valid_sign">*</span></label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="text" id="" class="form-control form_control" name="username" value="{{old('username')}}">
                                                @if($errors->has('username'))
                                                <span class="invalid_msg" role="alert">
                                                    <strong>{{$errors->first('username')}}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="row g-3">
                                            <div class="col-md-3 text-end">
                                                <label for="" class="col-form-label col_form_label">Email : <span class="valid_sign">*</span></label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="text" id="" class="form-control form_control" name="useremail" value="{{old('useremail')}}">
                                                @if($errors->has('useremail'))
                                                <span class="invalid_msg" role="alert">
                                                    <strong>{{$errors->first('useremail')}}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="row g-3">
                                            <div class="col-md-3 text-end">
                                                <label for="" class="col-form-label col_form_label">Phone : <span class="valid_sign">*</span></label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="text" id="" class="form-control form_control" name="userphone" value="{{old('userphone')}}">
                                               
                                            </div>
                                        </div>

                                        <div class="row g-3">
                                            <div class="col-md-3 text-end">
                                                <label for="" class="col-form-label col_form_label">Address : <span class="valid_sign">*</span></label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="text" id="" class="form-control form_control" name="useraddress" value="{{old('user_address')}}">
                                               
                                            </div>
                                        </div>

                                        <div class="row g-3">
                                            <div class="col-md-3 text-end">
                                                <label for="" class="col-form-label col_form_label">Role : <span class="valid_sign">*</span></label>
                                            </div>
                                            <div class="col-md-7">
                                                @php
                                                $role=App\Models\UserRole::where('role_status','1')->orderBy('rol_id','ASC')->get();
                                                @endphp
                                                <select type="text" id="" class="form-control form_control" name="userrole" value="{{old('user_add')}}">
                                                    <option value="">Select Role</option>
                                                    @foreach($role as $role)
                                                    <option value="{{$role->rol_id}}">{{$role->role_title}}</option>
                                                    @endforeach
                                                </select>
                                                
                                            </div>
                                        </div>

                                        <div class="row g-3">
                                            <div class="col-md-3 text-end">
                                                <label for="" class="col-form-label col_form_label">Image : <span class="valid_sign">*</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="file" id="" class="form-control form_control" name="pic" >
                                            </div>
                                        </div>

                                        <div class="row g-3">
                                            <div class="col-md-3 text-end">
                                                <label for="" class="col-form-label col_form_label">Password : <span class="valid_sign">*</span></label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="password" id="" class="form-control form_control" name="password">
                                                @if($errors->has('pass'))
                                                <span class="invalid_msg" role="alert">
                                                    <strong>{{$errors->first('pass')}}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="row g-3">
                                            <div class="col-md-3 text-end">
                                                <label for="" class="col-form-label col_form_label">Confirm PassWord: <span class="valid_sign">*</span></label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="password" id="password_confirmation" class="form-control form_control" name="password_confirmation" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2"></div>
                                </div>
                            </div>
                        
                            <div class="card-footer card_footer text-center">
                                <button type="submit" class="btn btn-primary">Register</button>
                            </div>
                        </form>
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col-->
        </div> <!-- end row -->
    </div> <!-- end col -->
</div>
@endsection