@extends('layouts.website')
@section('content')
         <div class="py-5 bg-light">
             <div class="container">
                 <div class="row">
                     <div class="col-md-6">
                         <span>Category</span>
                         <h3>{{$category->cat_title}}</h3>
                         <p>{{$category->cat_detail}}</p>
                     </div>
                 </div>
             </div>
         </div>
         <div class="site-section bg-white">
             <div class="container">
                 <div class="row">
                    @foreach($category->posts as $post)
                     <div class="col-lg-4 mb-4">
                         <div class="entry2">
                             <a href="{{url('post/view/'.$post->post_slug)}}"><img src="{{asset('uploads/admin/post/'.$post->post_pic1)}}" alt="Image"
                                     class="img-fluid rounded"></a>
                             <div class="excerpt">
                                 <span class="post-category text-white bg-secondary mb-3">{{$category->cat_title}}</span>
                                 <h2><a href="{{url('post/view/'.$post->post_slug)}}">{{$post->post_title}}</a></h2>
                                 <div class="post-meta align-items-center text-left clearfix">
                                     <figure class="author-figure mb-0 mr-3 float-left"><img src="{{ asset('uploads/admin') }}/user/User-1-1690211373.jpg"
                                             alt="Image" class="img-fluid"></figure>
                                     <span class="d-inline-block mt-1">By <a href="#">Carrol Atkinson</a></span>
                                     <span>&nbsp;-&nbsp; {{$post->created_at->format('D m, Y')}}</span>
                                 </div>
                                 <p>{{Str::words($post->detail,40)}}</p>
                                 <p><a href="{{url('post/view/'.$post->post_slug)}}">Read More</a></p>
                             </div>
                         </div>
                        </div>
                     @endforeach
                 </div>
                 <div class="row text-center pt-5 border-top">
                     <div class="col-md-12">
                         <div class="custom-pagination">
                            
                         </div>
                     </div>
                 </div>
             </div>
         </div>
@endsection
