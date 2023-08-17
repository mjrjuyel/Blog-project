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
                        <form method="post" action="{{url('/dashboard/blog/category/insert')}}">
                            @csrf
                            <div class="card-header card_header">
                                <div class="row">
                                    <div class="col-md-8 ">
                                        <h4 class="d-flex align-items-center card_header_title">Add Post Category <i class="fa-solid fa-square-plus card_header_icon"></i></h4>
                                    </div>
                                    <div class="col-md-4 text-end">
                                        <a class="btn btn-sm btn-secondary card_header_btn" href="{{url('/dashboard/blog/category')}}"><i class="dripicons-user-group"></i> All Category</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body card_body">

                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-8">
                                        <div class="row g-3">
                                            <div class="col-md-3 text-end">
                                                <label for="" class="col-form-label col_form_label">Category Title : <span class="valid_sign">*</span></label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="text" id="" class="form-control form_control" name="cat_title" value="">
                                               @if($errors->has('cat_title'))
                                               <span class="invalid_msg" role="alert">
                                                <strong>{{$errors->first('cat_title')}}</strong>
                                               </span>
                                               @endif
                                            </div>
                                        </div>

                                        <div class="row g-3">
                                            <div class="col-md-3 text-end">
                                                <label for="" class="col-form-label col_form_label">Category Details : </label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="text" id="" class="form-control form_control" name="cat_detail" value="">
                                               
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