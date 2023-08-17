@extends('layouts/admin')
@section('content')
</div>
            <h4 class="page-title">Dashboard</h4>
        </div>
    </div>
</div>
            @if(Session::has('Success'))
                <script type="text/javascript">
                    swal({title: "Success!", text: "{{Session::get('Success')}}", icon: "success", button: "OK", timer:5000,});
                </script>
            @endif
            @if(Session::has('error'))
                <script type="text/javascript">
                    swal({title: "Opps!",text: "{{Session::get('error')}}", icon: "error", button: "OK", timer:5000,});
                </script>
            @endif
<!-- end page title -->
<div class="row">
    <div class="col-xl-12 col-lg-12">
        <div class="row">
            <div class="col-md-12">
                <div class="card widget-flat">
                    <div class="card-body">

                        <div class="card-header card_header">
                            <div class="row">
                                <div class="col-md-9 ">
                                    <h4 class="d-flex align-items-center card_header_title">Blog Category Info<i class="uil-nerd card_header_icon"></i></h4>
                                </div>
                                <div class="col-md-3 d-flex justify-content-between">
                                    <a class="btn btn-sm btn-secondary card_header_btn" href="{{url('dashboard/blog/category/edit/'.$view->cat_slug)}}"><i class="uil-bright"></i>Edit</a>
                                    <a class="btn btn-sm btn-secondary card_header_btn" href="{{url('dashboard/blog/category')}}"><i class="dripicons-user-group"></i> All Category</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body card_body">
                            <div class="row">
                                <div class="col-md-8 offset-md-2">
                                    <table class="table table-striped custom_table">
                                        <tbody>
                                            <tr>
                                                <td>Category Title</td>
                                                <td>:</td>
                                                <td>{{$view->cat_title}}</td>
                                            </tr>
                                            <tr>
                                                <td>Category Detail</td>
                                                <td>:</td>
                                                <td>{{$view->cat_detail}}</td>
                                            </tr>
                                            <tr>
                                                <td>Category Creator</td>
                                                <td>:</td>
                                                <td>{{$view->creatorinfo->name}}</td>
                                            </tr>
                                            <tr>
                                                <td>Created At</td>
                                                <td>:</td>
                                                <td>{{$view->created_at->format('h:m:s A | d-m-y')}}</td>
                                            </tr>
                                            <tr>
                                                <td>Updated At</td>
                                                <td>:</td>
                                                @if($view->updated_at != '')
                                                <td>
                                                {{$view->updated_at->format('h:m:s A | d-m-y')}}
                                                </td>
                                                @else
                                                <td> Not Yet</td>
                                                @endif
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