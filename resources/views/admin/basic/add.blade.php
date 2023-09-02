@extends('layouts.admin')
@section('content')
</div>
<h4 class="page-title">Dashboard - Basic</h4>
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
                        <form method="post" action="{{ url('/dashboard/basic/update') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="card-header card_header">
                                <div class="row">
                                    <div class="col-md-8 ">
                                        <h4 class="d-flex align-items-center card_header_title">Basic Info <i
                                                class="fa-solid fa-square-plus card_header_icon"></i></h4>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                @if(Session::get('Success'))
                                    <div class="alert alert-success">{{ Session::get('Success') }}
                                    </div>
                                @endif
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-8">

                                        <div class="row g-3">
                                            <div class="col-md-3 text-end">
                                                <label for="" class="col-form-label col_form_label">Basic logo : <span
                                                        class="valid_sign">*</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="file" id="" class="form-control form_control" name="mlogo"
                                                    value="">

                                            </div>
                                            <div class="col-md-4">

                                                <img src="{{ asset('uploads/admin') }}/basic/logo.png"
                                                    width="120px">

                                            </div>
                                        </div>

                                        <div class="row g-3">
                                            <div class="col-md-3 text-end">
                                                <label for="" class="col-form-label col_form_label">Basic logo Title :
                                                    <span class="valid_sign">*</span></label>
                                            </div>
                                            <div class="col-md-5">
                                                <input type="text" id="" class="form-control form_control"
                                                    name="logotitle" value="{{$basic->basic_logo_title}}">

                                                @if($errors->has('logotitle'))
                                                    <span class="invalid_msg" role="alert">
                                                        <strong>{{ $errors->first('logotitle') }}</strong>
                                                    </span>
                                                @endif

                                            </div>
                                        </div>

                                        <div class="row g-3">
                                            <div class="col-md-3 text-end">
                                                <label for="" class="col-form-label col_form_label">About us : <span
                                                        class="valid_sign">*</span></label>
                                            </div>
                                            <div class="col-md-7">
                                                <textarea type="text" style="resize:none;" rows="5"
                                                    class="form-control form_control" name="about" value="{{$basic->basic_about}}"></textarea>

                                            </div>
                                        </div>

                                        <div class="row g-3 mt-2">
                                            <div class="col-md-3 text-end">
                                                <label for="" class="col-form-label col_form_label">Copy Right : <span
                                                        class="valid_sign">*</span></label>
                                            </div>
                                            <div class="col-md-7">
                                                <textarea type="text" style="resize:none;" rows="5"
                                                    class="form-control form_control" name="copyright" value="">{{$basic->basic_copyright}}</textarea>
                                                @if($errors->has('copyright'))
                                                    <span class="invalid_msg" role="alert">
                                                        <strong>{{ $errors->first('copyright') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
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
