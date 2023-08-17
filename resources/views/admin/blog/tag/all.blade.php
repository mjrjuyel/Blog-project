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
                                    <h4 class="d-flex align-items-center card_header_title">All Blog tag<i class="fa-solid fa-square-plus card_header_icon"></i></h4>
                                </div>
                                <div class="col-md-4 text-end">
                                    <a class="btn btn-sm btn-secondary card_header_btn" href="{{url('dashboard/blog/tag/add')}}"><i class="dripicons-user-group"></i> Add Blog Tag</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body card_body">
                            <div class="row">
                                <div class="col-md-10 offset-md-1">
                                <table class="table table-striped custom_table">
                                    <thead class="table-dark">
                                        <tr >
                                        <th scope="col">Tag Title</th>
                                        <th scope="col">Tag Description</th>
                                        <th scope="col">Tag Post</th>
                                        <th scope="col">Manage</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($alltag as $data)
                                        <tr>
                                        <td>{{$data->tag_title}}</td>
                                        <td>{{Str::words($data->tag_description,5)}}</td>
                                        <td></td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                Manage
                                                </button>
                                                <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="{{url('dashboard/blog/tag/view/'.$data->tag_slug)}}">View</a></li>
                                                <li><a class="dropdown-item" href="{{url('dashboard/blog/tag/edit/'.$data->tag_slug)}}">Edit</a></li>
                                                <li>
                                                    <form method="post" action="{{url('dashboard/blog/tag/delete/'.$data->tag_id)}}">
                                                        
                                                        @csrf
                                                        <button type="submit" class="dropdown-item">Delete<button>
                                                    </form>
                                                </li>
                                                <!-- <li><a class="dropdown-item" href="{{url('dashboard/blog/tag/delete',['tag_id'=>$data->tag_id])}}">Delete</a></li> -->
                                                
                                                <!-- <li><a class="dropdown-item"  href="#" id="softDelete" title="delete" data-bs-toggle="modal" data-bs-target="#softDeleteModal" data-id="{{$data->tag_id}}">Delete</a></li> -->
                                                </ul>
                                            </div>
                                        </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    </table>
                                    <div class="paginate">
                                        {{$alltag->links()}}
                                    </div>
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
<div id="softDeleteModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
  
        <div class="modal-dialog">
        <form method="post" action="{{url('/dashboard/blog/tag/softdel')}}">
                @csrf
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
            </form>
        </div><!-- /.modal-dialog -->
    
</div><!-- /.modal -->
@endsection