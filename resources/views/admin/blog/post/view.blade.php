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
                                <div class="col-md-9 ">
                                    <h4 class="d-flex align-items-center card_header_title">Blog Post Info<i class="uil-nerd card_header_icon"></i></h4>
                                </div>
                                <div class="col-md-3 d-flex justify-content-between">
                                    <a class="btn btn-sm btn-secondary card_header_btn" href="{{url('dashboard/blog/post/edit/'.$view->post_slug)}}"><i class="uil-bright"></i>Edit</a>
                                    <a class="btn btn-sm btn-secondary card_header_btn" href="{{url('dashboard/blog/post')}}"><i class="dripicons-user-group"></i> All Post</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body card_body">
                            <div class="row">
                                <div class="col-md-8 offset-md-2">
                                    <table class="table table-striped custom_table">
                                        <tbody>
                                            <tr>
                                                <td> Post Title</td>
                                                <td>:</td>
                                                <td>{{$view->post_title}}</td>
                                            </tr>
                                            <tr>
                                                <td> Post Detail</td>
                                                <td>:</td>
                                                <td>{{$view->post_detail}}</td>
                                            </tr>
                                            <tr>
                                                <td> Post banner</td>
                                                <td>:</td>
                                                
                                                <td>
                                                @if($view->post_pic1!='')
                                                    <img src="{{asset('uploads/admin/post/'.$view->post_pic1)}}" class="img-fluid" height="200px" width="200px" style="oobject-fit:cover;">
                                                 @else
                                                 <img src="{{asset('uploads/admin/post')}}/pic1.png" class="img-fluid" height="200px" width="200px" style="oobject-fit:cover;"> 
                                                 @endif  
                                                </td>
                                            </tr>
                                            <tr>
                                                <td> Post banner</td>
                                                <td>:</td>
                                                
                                                <td>
                                                @if($view->post_pic1!='')
                                                    <img src="{{asset('uploads/admin/post/'.$view->post_pic2)}}" class="img-fluid" height="200px" width="200px" style="oobject-fit:cover;">
                                                 @else
                                                 <img src="{{asset('uploads/admin/post')}}/pic2.png" class="img-fluid" height="200px" width="200px" style="oobject-fit:cover;"> 
                                                 @endif  
                                                </td>
                                            </tr>
                                            <tr>
                                                <td> Post banner</td>
                                                <td>:</td>
                                                
                                                <td>
                                                @if($view->post_pic1!='')
                                                    <img src="{{asset('uploads/admin/post/'.$view->post_pic3)}}" class="img-fluid" height="200px" width="200px" style="oobject-fit:cover;">
                                                 @else
                                                 <img src="{{asset('uploads/admin/post')}}/pic3.jpg" class="img-fluid" height="200px" width="200px" style="oobject-fit:cover;"> 
                                                 @endif  
                                                </td>
                                            </tr>
                                            <tr>
                                                <td> Post banner</td>
                                                <td>:</td>
                                                
                                                <td>
                                                @if($view->post_pic1!='')
                                                    <img src="{{asset('uploads/admin/post/'.$view->post_pic4)}}" class="img-fluid" height="200px" width="200px" style="oobject-fit:cover;">
                                                 @else
                                                 <img src="{{asset('uploads/admin/post')}}/pic4.jpg" class="img-fluid" height="200px" width="200px" style="oobject-fit:cover;"> 
                                                 @endif  
                                                </td>
                                            </tr>
                                            <tr>
                                                <td> Post Category</td>
                                                <td>:</td>
                                                <td>{{$view->postcat->cat_title}}</td>
                                            </tr>
                                            <tr>
                                                <td> Post Creator</td>
                                                <td>:</td>
                                                <td>{{$view->postcreat->name}}</td>
                                            </tr>
                                            <tr>
                                                <td> Post Editor</td>
                                                <td>:</td>
                                                <td>
                                                @if($view->post_editor!='')
                                                {{$view->postedit->name}}
                                                @else
                                                ----
                                                @endif    
                                                <td>
                                            </tr>
                                            <tr>
                                                <td>Published At</td>
                                                <td>:</td>
                                                <td>{{$view->published_at}}</td>
                                            </tr>
                                            <tr>
                                                <td>Created At</td>
                                                <td>:</td>
                                                <td>{{$view->created_at->format('h:m:s A | d-m-y')}}</td>
                                            </tr>
                                            <tr>
                                                <td>Updated At</td>
                                                <td>:</td>
                                                <td>
                                                    @if($view->updated_at!='')
                                                {{$view->updated_at->format('h:m:s A | d-m-y')}}
                                                @else
                                                ----
                                                @endif </td>
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