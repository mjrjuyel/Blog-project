@extends('layouts/website')
@section('content')
<div class="site-section bg-light">
    <div class="container">
        <div class="row align-items-stretch retro-layout-2">
            <div class="col-md-4">
                @foreach($firstPost as $post)
                    <a href="{{ url('post/view/'. $post->post_slug) }}"
                        class="h-entry mb-30 v-height gradient"
                        style="background-image: url('{{ asset('uploads/admin/post/'.$post->post_pic1) }}');">
                        <div class="text">
                            <h2>{{ $post->post_title }}</h2>
                            <span
                                class="date">{{ $post->created_at->format('D,m,Y') }}</span>
                        </div>
                    </a>
                @endforeach
            </div>
            <div class="col-md-4">
                @foreach($middlePost as $post)
                    <a href="{{ url('post/view/'. $post->post_slug) }}"
                        class="h-entry img-5 h-100 gradient"
                        style="background-image: url('{{ asset('uploads/admin/post/'.$post->post_pic1) }}');">
                        <div class="text">
                            <div class="post-categories mb-3">
                                <span class="post-category bg-danger">Travel</span>
                                <span class="post-category bg-primary">Food</span>
                            </div>
                            <h2>{{ $post->post_title }}</h2>
                            <span
                                class="date">{{ $post->created_at->format('D m, Y') }}</span>
                        </div>
                    </a>
                @endforeach
            </div>
            <div class="col-md-4">
                @foreach($lastPost as $post)
                    <a href="{{ url('post/view/'. $post->post_slug) }}"
                        class="h-entry mb-30 v-height gradient"
                        style="background-image: url('{{ asset('uploads/admin/post/'. $post->post_pic1) }}');">
                        <div class="text">
                            <h2>{{ $post->post_title }}</h2>
                            <span class="date">{{ $post->created_at->format('D m, y') }}
                            </span>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</div>
<div class="site-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12">
                <h2>Recent Posts</h2>
            </div>
        </div>
        <div class="row">
            @foreach($repost as $data)
                <div class="col-lg-4 mb-4">
                    <div class="entry2">
                        <a href="{{ url('post/view/'.$data->post_slug) }}"><img
                                src="{{ asset('uploads/admin/post/'.$data->post_pic1) }}"
                                alt="Image" height="300px" class="img-fluid rounded"></a>
                        <div class="excerpt">
                            <span
                                class="post-category text-white bg-secondary mb-3">{{ optional($data->Postcat)->cat_title }}</span>
                            <h2><a
                                    href="{{ url('post/view/'.$data->post_slug) }}">{{ $data->post_title }}</a>
                            </h2>
                            <div class="post-meta align-items-center text-left clearfix">
                                <figure class="author-figure mb-0 mr-3 float-left"><img
                                        src="{{ asset('uploads/admin') }}/user/User-1-1690211373.jpg"
                                        alt="Image" class="img-fluid"></figure>
                                <span class="d-inline-block mt-1">By <a
                                        href="#">{{ $data->postcreat->name }}</a></span>
                                <span>&nbsp;-&nbsp;
                                    {{ $data->created_at->format('d-M-y') }}</span>
                            </div>
                            <p>{!!Str::words($data->post_detail,25)!!}</p>
                            <p><a href="{{ url('post/view/'.$data->post_slug) }}">Read
                                    More</a></p>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="">
                {{ $repost->links() }}
            </div>
        </div>

    </div>
</div>
<div class="site-section bg-light">
    <div class="container">
        <div class="row align-items-stretch retro-layout">
            @foreach($firstFooterPost as $post)
                <div class="col-md-5 order-md-2">
                    <a href="{{ url('post/view/'. $post->post_slug) }}"
                        class="hentry img-1 h-100 gradient"
                        style="background-image: url('{{ asset('uploads/admin/post/'.$post->post_pic1) }}');">
                        <span class="post-category text-white bg-danger">Travel</span>
                        <div class="text">
                            <h2>{{ $post->post_title }}</h2>
                            <span>{{ $post->created_at->format('D m, Y') }}</span>
                        </div>
                    </a>
                </div>
            @endforeach


            <div class="col-md-7">
                @foreach($lastFooterPost as $post)
                    <a href="{{ url('post/view/'. $post->post_slug) }}"
                        class="hentry img-2 v-height mb30 gradient"
                        style="background-image: url('{{ asset('uploads/admin/post/'.$post->post_pic1) }}');">
                        <span class="post-category text-white bg-success">Nature</span>
                        <div class="text text-sm">
                            <h2>{{ $post->post_title }}</h2>
                            <span>{{ $post->created_at->format('D m, Y') }}</span>
                        </div>
                    </a>
                @endforeach
                <div class="two-col d-block d-md-flex">
                    @foreach($middleFooterPost as $post)
                        <a href="{{ url('post/view/'. $post->post_slug) }}"
                            class="hentry v-height ml-auto img-2 gradient"
                            style="background-image: url('{{ asset('uploads/admin/post/'.$post->post_pic1) }}');">
                            <span class="post-category text-white bg-primary">Sports</span>
                            <div class="text text-sm">
                                <h2>{{ $post->post_title }}</h2>
                                <span>{{ $post->created_at->format('D m, Y') }}</span>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<div class="site-section bg-lightx">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-md-5">
                <div class="subscribe-1 ">
                    <h2>Subscribe to our newsletter</h2>
                    <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit nesciunt error illum a
                        explicabo, ipsam nostrum.</p>
                    <form action="{{ url('/subscribe/insert') }}" method="post" class="d-flex">
                        @csrf
                        <input type="email" class="form-control" name="subscribe" placeholder="">
                        @if($errors->has('subscribe'))
                            <span class="invalid_msg" role="alert">
                                <strong>{{ $errors->first('subscribe') }}</strong>
                            </span>
                        @endif
                        <button type="submit" class="btn btn-primary">Subscribe</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
