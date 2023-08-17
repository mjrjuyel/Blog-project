@extends('layouts.admin')
@section('content')
                </div>
            <h4 class="page-title">Dashboard</h4>
        </div>
    </div>
</div>
          @if(Session::has('success'))
            <script type="text/javascript">
                swal({title: "Success!", text: "{{Session::get('success')}}", icon: "success", button: "OK", timer:5000,});
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
                                <div class="col-md-8 ">
                                    <h4 class="d-flex align-items-center card_header_title">All Post<i class="fa-solid fa-square-plus card_header_icon"></i></h4>
                                </div>
                                <div class="col-md-4 text-end">
                                    <a class="btn btn-sm btn-secondary card_header_btn" href="{{url('dashboard/blog/post/add')}}"><i class="dripicons-user-group"></i> Add Post</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body card_body">
                            <div class="row">
                                <div class="col-md-10 offset-md-1">
                                <table class="table table-striped custom_table">
                                    <thead class="table-dark">
                                        <tr >
                                        <th scope="col">Post Title</th>
                                        <th scope="col">Post Description</th>
                                        <th scope="col">Post banner</th>
                                        <th scope="col">Post category</th>
                                        <th scope="col">Post Tag</th>
                                        <th scope="col">Post creator</th>
                                        <th scope="col">Manage</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        @foreach($post as $data)
                                        <tr>
                                        <td>{{$data->post_title}}</td>
                                        <td>{{Str::words($data->post_detail,4)}}</td>
                                        <td>
                                            @if($data->post_pic1!='')
                                                 <img src="{{asset('uploads/admin/post/'.$data->post_pic1)}}" class="img-fluid" height="200px" width="200px" style="oobject-fit:cover;">
                                            @else
                                                 <img src="{{asset('uploads/admin/post')}}/pic1.png" class="img-fluid" height="200px" width="200px" style="oobject-fit:cover;"> 
                                            @endif  
                                        </td>
                                        <td>{{optional($data->postcat)->cat_title}}</td>
                                           
                                            <td>
                                              @foreach($data->tags as $tag)
                                                <button type="button" class="btn btn-secondary">{{$tag->tag_title}}</button>
                                                @endforeach
                                            </td>
                                            
                                        <td>{{optional($data->postcreat)->name}}</td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                Manage
                                                </button>
                                                <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="{{url('dashboard/blog/post/view/'.$data->post_slug)}}">View</a></li>
                                                <li><a class="dropdown-item" href="{{url('dashboard/blog/post/edit/'.$data->post_slug)}}">Edit</a></li>
                                                <li>
                                                    <form method="post" action="{{url('/dashboard/blog/post/delete/'.$data->post_slug)}}" enctype="multipart/form-data">
                                                        @csrf
                                                        <button type="submit" class="dropdown-item">Delete</button>
                                                    </form>
                                                </li>
                                                <!-- <li><a class="dropdown-item"  href="#" id="softDelete" title="delete" data-bs-toggle="modal" data-bs-target="#softDeleteModal" data-id="">Delete</a></li> -->
                                                </ul>
                                            </div>
                                        </td>
                                        </tr>

                                        <!-- ===== Modals of Delete ===== -->
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
                                        </div>
                                        @endforeach
                                    </tbody>
                                    </table>
                                </div>
                                <div class="col-md-1"></div>
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

<!-- Modal Div Start -->
<!-- /.modal -->
@endsection