@extends('layouts.website')
@section('content')
<div class="site-cover site-cover-sm same-height overlay single-page"
    style="background-image: url('{{ asset('uploads/admin/post/'.$view->post_pic1) }}');">
    <div class="container">
        <div class="row same-height justify-content-center">
            <div class="col-md-12 col-lg-10">
                <div class="post-entry text-center">
                    <span
                        class="post-category text-white bg-success mb-3">{{ optional($view->Postcat)->cat_title }}</span>
                    <h1 class="mb-4"><a href="#">{{ $view->post_title }}</a></h1>
                    <div class="post-meta align-items-center text-center">
                        <figure class="author-figure mb-0 mr-3 d-inline-block"><img
                                src="{{ asset('uploads/admin') }}/user/User-1-1690211373.jpg"
                                alt="Image" class="img-fluid"></figure>
                        <span class="d-inline-block mt-1">{{ $view->postcreat->name }}</span>
                        <span>&nbsp;-&nbsp; {{ $view->created_at->format('D, M-Y') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="site-section py-lg">
    <div class="container">
        <div class="row blog-entries element-animate">
            <div class="col-md-12 col-lg-8 main-content">
                <div class="post-content-body">
                    <p>{{ $view->post_detail }}
                        <div class="row mb-5 mt-5">
                            <div class="col-md-12 mb-4">
                                <img src="{{ asset('contents/website') }}/assets/images/img_1.jpg"
                                    alt="Image placeholder" class="img-fluid rounded">
                            </div>
                            <div class="col-md-6 mb-4">
                                <img src="{{ asset('contents/website') }}/assets/images/img_2.jpg"
                                    alt="Image placeholder" class="img-fluid rounded">
                            </div>
                            <div class="col-md-6 mb-4">
                                <img src="{{ asset('contents/website') }}/assets/images/img_3.jpg"
                                    alt="Image placeholder" class="img-fluid rounded">
                            </div>
                        </div>
                        Quibusdam autem, quas molestias recusandae aperiam molestiae modi qui ipsam vel. Placeat tenetur
                        veritatis tempore quos impedit dicta, error autem, quae sint inventore ipsa quidem. Quo
                        voluptate
                        quisquam reiciendis, minus, animi minima eum officia doloremque repellat eos, odio doloribus
                        cum.</p>
                </div>
                <div class="pt-5">
                    <p>Categories: <a href="#">{{ optional($view->Postcat)->cat_title }} </a> Tags:
                        @foreach($view->tags as $tag)
                            <a href="#">#{{ $tag->tag_title }}</a>,
                        @endforeach</p>
                </div>
                <div class="pt-5">
                    <h3 class="mb-5">6 Comments</h3>
                    <ul class="comment-list">
                        <li class="comment">
                            <div class="vcard">
                                <img src="{{ asset('contents/website') }}/assets/images/person_1.jpg"
                                    alt="Image placeholder">
                            </div>
                            <div class="comment-body">
                                <h3>Jean Doe</h3>
                                <div class="meta">January 9, 2018 at 2:21pm</div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum
                                    necessitatibus,
                                    ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam
                                    voluptas earum
                                    impedit necessitatibus, nihil?</p>
                                <p><a href="#" class="reply rounded">Reply</a></p>
                            </div>
                        </li>
                        <li class="comment">
                            <div class="vcard">
                                <img src="{{ asset('contents/website') }}/assets/images/person_1.jpg"
                                    alt="Image placeholder">
                            </div>
                            <div class="comment-body">
                                <h3>Jean Doe</h3>
                                <div class="meta">January 9, 2018 at 2:21pm</div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum
                                    necessitatibus,
                                    ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam
                                    voluptas earum
                                    impedit necessitatibus, nihil?</p>
                                <p><a href="#" class="reply rounded">Reply</a></p>
                            </div>
                            <ul class="children">
                                <li class="comment">
                                    <div class="vcard">
                                        <img src="{{ asset('contents/website') }}/assets/images/person_1.jpg"
                                            alt="Image placeholder">
                                    </div>
                                    <div class="comment-body">
                                        <h3>Jean Doe</h3>
                                        <div class="meta">January 9, 2018 at 2:21pm</div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem
                                            laborum
                                            necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim
                                            sapiente iste iure!
                                            Quam voluptas earum impedit necessitatibus, nihil?</p>
                                        <p><a href="#" class="reply rounded">Reply</a></p>
                                    </div>
                                    <ul class="children">
                                        <li class="comment">
                                            <div class="vcard">
                                                <img src="{{ asset('contents/website') }}/assets/images/person_1.jpg"
                                                    alt="Image placeholder">
                                            </div>
                                            <div class="comment-body">
                                                <h3>Jean Doe</h3>
                                                <div class="meta">January 9, 2018 at 2:21pm</div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur
                                                    quidem laborum
                                                    necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe
                                                    enim sapiente iste
                                                    iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                                                <p><a href="#" class="reply rounded">Reply</a></p>
                                            </div>
                                            <ul class="children">
                                                <li class="comment">
                                                    <div class="vcard">
                                                        <img src="{{ asset('contents/website') }}/assets/images/person_1.jpg"
                                                            alt="Image placeholder">
                                                    </div>
                                                    <div class="comment-body">
                                                        <h3>Jean Doe</h3>
                                                        <div class="meta">January 9, 2018 at 2:21pm</div>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                            Pariatur quidem laborum
                                                            necessitatibus, ipsam impedit vitae autem, eum officia,
                                                            fugiat saepe enim sapiente
                                                            iste iure! Quam voluptas earum impedit necessitatibus,
                                                            nihil?</p>
                                                        <p><a href="#" class="reply rounded">Reply</a></p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="comment">
                            <div class="vcard">
                                <img src="{{ asset('contents/website') }}/assets/images/person_1.jpg"
                                    alt="Image placeholder">
                            </div>
                            <div class="comment-body">
                                <h3>Jean Doe</h3>
                                <div class="meta">January 9, 2018 at 2:21pm</div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum
                                    necessitatibus,
                                    ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam
                                    voluptas earum
                                    impedit necessitatibus, nihil?</p>
                                <p><a href="#" class="reply rounded">Reply</a></p>
                            </div>
                        </li>
                    </ul>

                    <div class="comment-form-wrap pt-5">
                        <h3 class="mb-5">Leave a comment</h3>
                        <form action="#" class="p-5 bg-light">
                            <div class="form-group">
                                <label for="name">Name *</label>
                                <input type="text" class="form-control" id="name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email *</label>
                                <input type="email" class="form-control" id="email">
                            </div>
                            <div class="form-group">
                                <label for="website">Website</label>
                                <input type="url" class="form-control" id="website">
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Post Comment" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-lg-4 sidebar">
                <div class="sidebar-box search-form-wrap">
                    <form action="#" class="search-form">
                        <div class="form-group">
                            <span class="icon fa fa-search"></span>
                            <input type="text" class="form-control" id="s" placeholder="Type a keyword and hit enter">
                        </div>
                    </form>
                </div>

                <div class="sidebar-box">
                    <div class="bio text-center">
                        <img src="{{ asset('uploads/admin') }}/user/User-1-1690211373.jpg"
                            alt="Image Placeholder" class="img-fluid mb-5">
                        <div class="bio-body">
                            <h2>{{ $view->postcreat->name }}</h2>
                            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem
                                facilis sunt
                                repellendus excepturi beatae porro debitis voluptate nulla quo veniam fuga sit molestias
                                minus.</p>
                            <p><a href="#" class="btn btn-primary btn-sm rounded px-4 py-2">Read my bio</a></p>
                            <p class="social">
                                <a href="#" class="p-2"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#" class="p-2"><i class="fa-brands fa-linkedin"></i></a>
                                <a href="#" class="p-2"><i class="fa-brands fa-instagram"></i></a>
                                <a href="#" class="p-2"><i class="fa-brands fa-youtube"></i></a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="sidebar-box">
                    <h3 class="heading">Popular Posts</h3>
                    <div class="post-entry-sidebar">
                        <ul>
                            @foreach($popupost as $post)
                                <li>
                                    <a href="{{ url('post/view/'.$post->post_slug) }}">
                                        <img src="{{ asset('uploads/admin/post/'.$post->post_pic1) }}"
                                            alt="Image placeholder" class="mr-4">
                                        <div class="text">
                                            <h4>{{ $post->post_title }}</h4>
                                            <div class="post-meta">
                                                <span
                                                    class="mr-2">{{ $post->created_at->format('D m, Y') }}
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="sidebar-box">
                    <h3 class="heading">Categories</h3>
                    <ul class="categories">
                        @foreach($category as $cat)
                            <li><a href="{{ url('post/category/'.$cat->cat_slug) }}">{{ $cat->cat_title }}
                                    <span> ({{ optional($cat->posts)->count() }})</span></a></li>
                        @endforeach
                    </ul>
                </div>

                <div class="sidebar-box">
                    <h3 class="heading">Tags</h3>
                    <ul class="tags">
                        @foreach($tags as $t)
                            <li><a href="#">{{ $t->tag_title }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>
<div class="site-section bg-light">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12">
                <h2>More Related Posts</h2>
            </div>
        </div>
        <div class="row align-items-stretch retro-layout">
            <div class="col-md-5 order-md-2">
                @foreach($toprelpost as $post)
                    <a href="single.html" class="hentry img-1 h-100 gradient"
                        style="background-image: url('{{ asset('uploads/admin/post/'.$post->post_pic1) }}');">
                        <span class="post-category text-white bg-danger">optional($post->Postcat)->cat_title</span>
                        <div class="text">
                            <h2>{{ $post->post_title }}</h2>
                            <span>{{ $post->created_at->format('D m, Y') }}</span>
                        </div>
                    </a>
                @endforeach
            </div>

            <div class="col-md-7">
                @foreach($lastrelpost as $post)
                    <a href="single.html" class="hentry img-2 v-height mb30 gradient"
                        style="background-image: url('{{ asset('uploads/admin/post/'.$post->post_pic1) }}');">
                        <span
                            class="post-category text-white bg-success">{{ optional($post->Postcat)->cat_title }}</span>
                        <div class="text text-sm">
                            <h2>{{ $post->post_title }}</h2>
                            <span>{{ $post->created_at->format('D m, Y') }}</span>
                        </div>
                    </a>
                @endforeach
                <div class="two-col d-block d-md-flex">
                    @foreach($middlerelpost as $post)
                        <a href="single.html" class="hentry v-height img-2 ml-auto gradient"
                            style="background-image: url('{{ asset('uploads/admin/post/'.$post->post_pic1) }}');">
                            <span
                                class="post-category text-white bg-primary">{{ optional($post->Postcat)->cat_title }}
                            </span>
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
<div id="subscribe" class="site-section bg-lightx">
    <div class="container">
        <div class="row justify-content-center text-center">
            
            <div class="col-md-5">
                <div class="subscribe-1 ">
                    <h2>Subscribe to our newsletter</h2>
                    <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit nesciunt error illum a
                        explicabo, ipsam nostrum.</p>
                    <form action="#" class="d-flex">
                        <input type="text" class="form-control" placeholder="Enter your email address">
                        <input type="submit" class="btn btn-primary" value="Subscribe">
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
