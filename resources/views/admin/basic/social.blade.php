@extends('layouts.admin')
@section('content')
</div>
<h4 class="page-title">Dashboard - social</h4>
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
                        <form method="post" action="{{ url('/dashboard/social/update') }}">
                            @csrf
                            <div class="card-header card_header">
                                <div class="row">
                                    <div class="col-md-8 ">
                                        <h4 class="d-flex align-items-center card_header_title">social Media Links <i
                                                class="fa-solid fa-square-plus card_header_icon"></i></h4>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                @if(Session::get('Success'))
                                    <div class="alert alert-success">{{ Session::get('Success'), }}
                                    </div>
                                @endif
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-5">

                                        <div class="row g-3">
                                            <div class="col-md-8">
                                                <label class=""
                                                    for="inlineFormInputGroup">Facebook</label>
                                                <div class="input-group mb-2">
                                                    <div class="input-group-text"><i class="fa-brands fa-facebook-f"></i></div>
                                                    <input type="text" class="form-control" id="inlineFormInputGroup" name="facebook"
                                                      value="{{$socialLinks->sm_facebok}}" >
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row g-3">
                                            <div class="col-md-8">
                                                <label class=""
                                                    for="inlineFormInputGroup">Instagram</label>
                                                <div class="input-group mb-2">
                                                    <div class="input-group-text"><i class="fa-brands fa-instagram"></i></div>
                                                    <input type="text" class="form-control" id="inlineFormInputGroup" name="insta"
                                                      value="{{$socialLinks->sm_insta}}"  placeholder="Instagram">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row g-3">
                                            <div class="col-md-8">
                                                <label class=""
                                                    for="inlineFormInputGroup">YouTube</label>
                                                <div class="input-group mb-2">
                                                    <div class="input-group-text"><i class="fa-brands fa-youtube"></i></div>
                                                    <input type="text" class="form-control" id="inlineFormInputGroup" name="youtube"
                                                      value="{{$socialLinks->Sm_youtube}}"  placeholder="Youtube">
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-5">

                                        <div class="row g-3">
                                            <div class="col-md-8">
                                                <label class=""
                                                    for="inlineFormInputGroup">LinkedIn</label>
                                                <div class="input-group mb-2">
                                                    <div class="input-group-text"><i class="fa-brands fa-linkedin"></i></div>
                                                    <input type="text" class="form-control" id="inlineFormInputGroup" name="Linkedin"
                                                      value="{{$socialLinks->sm_linkedIn}}"  placeholder="LinkedIn">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row g-3">
                                            <div class="col-md-8">
                                                <label class=""
                                                    for="inlineFormInputGroup">Twitter</label>
                                                <div class="input-group mb-2">
                                                    <div class="input-group-text"><i class="fa-brands fa-twitter"></i></div>
                                                    <input type="text" class="form-control" id="inlineFormInputGroup" name="twitter"
                                                      value="{{$socialLinks->sm_twitter}}"  placeholder="Twitter">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row g-3">
                                            <div class="col-md-8">
                                                <label class=""
                                                    for="inlineFormInputGroup">Dribble</label>
                                                <div class="input-group mb-2">
                                                    <div class="input-group-text"><i class="fa-brands fa-facebook-f"></i></div>
                                                    <input type="text" class="form-control" id="inlineFormInputGroup"
                                                      value="{{$socialLinks->sm_}}"  placeholder="Facebook"  >
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-1"></div>
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
