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
                        <form method="post" action="{{url('/dashboard/blog/post/update')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-header card_header">
                                <div class="row">
                                    <div class="col-md-9 ">
                                        <h4 class="d-flex align-items-center card_header_title">Edit Post Information <i class="fa-solid fa-square-plus card_header_icon"></i></h4>
                                    </div>
                                    <div class="col-md-3 d-flex justify-content-between">
                                        <a class="btn btn-sm btn-secondary card_header_btn" href="{{url('dashboard/blog/post/view/'.$edit->post_slug)}}"><i class="dripicons-user-group"></i>View Post</a>
                                        <a class="btn btn-sm btn-secondary card_header_btn" href="{{url('dashboard/blog/post')}}"><i class="dripicons-user-group"></i> All Post</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body card_body">
                               <div class="row">
                                <input type="text" name="id" value="{{$edit->id}}">
                                <input type="hidden" name="slug" value="{{$edit->post_slug}}">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-8">
                                        <div class="row g-3">
                                            <div class="col-md-3 text-end">
                                                <label for="" class="col-form-label col_form_label">Post Title : <span class="valid_sign">*</span></label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="text" id="" class="form-control form_control" name="post_title" value="{{$edit->post_title}}">
                                               
                                            </div>
                                        </div>

                                        <div class="row g-3">
                                            <div class="col-md-3 text-end">
                                                <label for="" class="col-form-label col_form_label">Post Details : </label>
                                            </div>
                                            <div class="col-md-7 mb-2">
                                               <textarea type="description" rows="4" id="" class="form-control form_control" name="post_detail" value="{{$edit->post_detail}}">{{$edit->post_detail}}</textarea>
                                               
                                            </div>
                                        </div>

                                        <div class="row g-3">
                                            <div class="col-md-3 text-end">
                                                <label for="" class="col-form-label col_form_label">Post Banner image : </label>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="file" id="" class="form-control form_control" name="post_pic1" value="{{$edit->post_pic1}}">
                                               
                                            </div>
                                            <div class="col-md-3">
                                                @if($edit->post_pic1!='')
                                                    <img src="{{asset('uploads/admin/post/'.$edit->post_pic1)}}" class="img-fluid" height="200px" width="200px" style="oobject-fit:cover;">
                                                 @else
                                                    <img src="{{asset('uploads/admin/post')}}/pic1.png" class="img-fluid" height="200px" width="200px" style="oobject-fit:cover;"> 
                                                 @endif  
                                            </div>
                                        </div>

                                        <div class="row g-3">
                                            <div class="col-md-3 text-end">
                                                <label for="" class="col-form-label col_form_label">Post Body Image 1 : </label>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="file" id="" class="form-control form_control" name="post_pic2" value="">
                                               
                                            </div>
                                        </div>

                                        <div class="row g-3">
                                            <div class="col-md-3 text-end">
                                                <label for="" class="col-form-label col_form_label">Post Body Image 2 : </label>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="file" id="" class="form-control form_control" name="post_pic3" value="">
                                               
                                            </div>
                                        </div>

                                        <div class="row g-3">
                                            <div class="col-md-3 text-end">
                                                <label for="" class="col-form-label col_form_label">Post Body Image 3 : </label>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="file" id="" class="form-control form_control" name="post_pic4" value="{{old('post_pic4')}}">
                                               
                                            </div>
                                        </div>

                                        <div class="row g-3">
                                            <div class="col-md-3 text-end">
                                                <label for="" class="col-form-label col_form_label">Tag : </label>
                                            </div>
                                            <div class="col-md-8">
                                               <!-- Multiple Select -->
                                                <select class="select2 form-control select2-multiple" data-toggle="select2" name="tags[]" multiple="multiple" data-placeholder="Select Tag">
                                                        @foreach($tag as $tag)
                                                                <option value="{{$tag->id}}"
                                                                    @foreach($edit->tags as $t) 
                                                                    @if($t->id == $tag->id) Selected @endif
                                                                    @endforeach
                                                                >{{$tag->tag_title}}
                                                                </option>
                                                        @endforeach
                                                </select>
                                               
                                            </div>
                                        </div>

                                        <div class="row g-3">
                                            <div class="col-md-3 text-end">
                                                <label for="" class="col-form-label col_form_label">Post Category : </label>
                                            </div>
                                            @php 
                                            $cat=App\Models\Category::where('cat_status','1')->orderBy('cat_id','ASC')->get();
                                            @endphp
                                            <div class="col-md-5">
                                               <select type="text" class="form-control form_control" name="post_cat" value="">
                                                <option name="" value="" style="display:none;">Select Category</option>
                                                @foreach($cat as $cat)
                                                <option class="col-form-label col_form_label" value="{{$cat->cat_id}}" @if($cat->cat_id == $edit->cat_id) Selected @endif >{{$cat->cat_title}}</option>
                                                @endforeach
                                               </select>
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