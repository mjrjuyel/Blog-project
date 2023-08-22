@extends('layouts.admin')
@section('style')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
@endsection
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
                        <form method="post" action="{{url('/dashboard/blog/post/insert')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-header card_header">
                                <div class="row">
                                    <div class="col-md-8 ">
                                        <h4 class="d-flex align-items-center card_header_title">Add Blog Post  <i class="fa-solid fa-square-plus card_header_icon"></i></h4>
                                    </div>
                                    <div class="col-md-4 text-end">
                                        <a class="btn btn-sm btn-secondary card_header_btn" href="{{url('/dashboard/blog/post')}}"><i class="dripicons-user-group"></i> All Post</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body card_body">

                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-8">
                                        <div class="row g-3">
                                            <div class="col-md-3 text-end">
                                                <label for="" class="col-form-label col_form_label">Post Title : <span class="valid_sign">*</span></label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="text" id="" class="form-control form_control" name="post_title" value="{{old('post_title')}}">
                                               
                                            </div>
                                        </div>

                                        <div class="row g-3">
                                            <div class="col-md-3 text-end">
                                                <label for="" class="col-form-label col_form_label">Post Details : </label>
                                            </div>
                                            <div class="col-md-7 mb-2">
                                               <textarea type="description"  rows="15" id="description" class="form-control form_control" name="post_detail" value="{{old('post_detail')}}"></textarea>
                                               
                                            </div>
                                        </div>

                                        <div class="row g-3">
                                            <div class="col-md-3 text-end">
                                                <label for="" class="col-form-label col_form_label">Post Banner image : </label>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="file" id="" class="form-control form_control" name="post_pic1" value="{{old('post_pic1')}}">
                                               
                                            </div>
                                        </div>

                                        <div class="row g-3">
                                            <div class="col-md-3 text-end">
                                                <label for="" class="col-form-label col_form_label">Post Body Image 1 : </label>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="file" id="" class="form-control form_control" name="post_pic2" value="{{old('post_pic2')}}">
                                               
                                            </div>
                                        </div>

                                        <div class="row g-3">
                                            <div class="col-md-3 text-end">
                                                <label for="" class="col-form-label col_form_label">Post Body Image 2 : </label>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="file" id="" class="form-control form_control" name="post_pic3" value="{{old('post_pic3')}}">
                                               
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
                                                <label for="" class="col-form-label col_form_label">Tags : </label>
                                            </div>
                                            @php
                                            $tag=App\Models\Tag::where('tag_status','1')->orderBy('id','ASC')->get()
                                            @endphp
                                            <div class="col-md-4 ">
                                                @foreach($tag as $tag)
                                                <input class="form-check-input" type="checkbox" name="tags[]" value="{{$tag->id}}" id="tag{{$tag->id}}">
                                                <label class="form-check-label" for="tag{{$tag->id}}">
                                                    {{$tag->tag_title}}
                                                </label>
                                                @endforeach
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
                                               <select type="text" class="form-control form_control" name="post_cat" value="{{old('post_title')}}">
                                                <option name="" value="" style="display:none;">Select Category</option>
                                                @foreach($cat as $cat)
                                                <option class="col-form-label col_form_label" value="{{$cat->cat_id}}">{{$cat->cat_title}}</option>
                                                @endforeach
                                               </select>
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

@section('script')
<!-- <script src="https://cdn.tiny.cloud/1/YOUR_API_KEY/tinymce/5/tinymce.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<script>
    // tinymce.init({
    //         selector: '#description',
    //     });
    $(document).ready(function() {
            $('#description').summernote();
        });
</script>
@endsection