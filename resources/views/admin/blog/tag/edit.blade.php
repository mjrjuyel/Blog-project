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
                        <form method="post" action="{{url('/dashboard/blog/tag/update')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-header card_header">
                                <div class="row">
                                    <div class="col-md-9 ">
                                        <h4 class="d-flex align-items-center card_header_title">Edit Post Tag <i class="fa-solid fa-square-plus card_header_icon"></i></h4>
                                    </div>
                                    <div class="col-md-3 d-flex justify-content-between">
                                        <a class="btn btn-sm btn-secondary card_header_btn" href="{{url('dashboard/blog/tag/view/'.$edit->tag_slug)}}"><i class="dripicons-user-group"></i>View Tag</a>
                                        <a class="btn btn-sm btn-secondary card_header_btn" href="{{url('dashboard/blog/tag')}}"><i class="dripicons-user-group"></i> All Tag</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body card_body">
                                <input type="text" name="id" value="{{$edit->tag_id}}">
                                <input type="text" name="slug" value="{{$edit->tag_slug}}">
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-8">
                                        <div class="row g-3">
                                            <div class="col-md-3 text-end">
                                                <label for="" class="col-form-label col_form_label">Tag Title : <span class="valid_sign">*</span></label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="text" id="" class="form-control form_control" name="tag_title" value="{{$edit->tag_title}}">   
                                            </div>
                                        </div>

                                        <div class="row g-3">
                                            <div class="col-md-3 text-end">
                                                <label for="" class="col-form-label col_form_label">Tag Detail : <span class="valid_sign">*</span></label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="text" id="" class="form-control form_control" name="tag_detail" value="{{$edit->tag_description}}">   
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-2"></div>
                                </div>
                            </div>
                        
                            <div class="card-footer card_footer text-center">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col-->
        </div> <!-- end row -->
    </div> <!-- end col -->
</div>
@endsection