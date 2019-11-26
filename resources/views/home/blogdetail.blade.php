@extends('home.layouts.master')
@section('title')

<title>Blog detail</title>
@endsection
@section('css')
<link rel="stylesheet" href="source/css/blogdetail.css">
@endsection
@section('content')
    <div class="breadcrumb-banner-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-text">
                        <h1 class="text-center">Blog detail</h1>
                        <div class="breadcrumb-bar">
                            <ul class="breadcrumb text-center">
                                <li><a href="index.html">Home</a></li>
                                <li>Blog detail</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blogdetail -->
    <div class="blog-area" style="padding-bottom: 100px;padding-top: 100px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 blog-post-item">
                    <div class="blog-wrapper blog-details">
                        <div class="blog-img img-full">
                        <img src="{{asset('storage/'.$blog->file)}}" alt="">
                        </div>
                        <div class="blog-content">
                            <ul class="blog-meta">
                                <li>{{$blog->created_at->format('Y-m-d')}}</li>
                                <li><a href="#"> {{$blog->admin_name}}</a></li>
                                <li><a href="#"> {{$blog->catagory_name}}</a></li>
                            </ul>
                            <h3>{{$blog->content}} </h3>
                            <p>{!! $blog->detail !!}</p>


                        </div>
                    </div>

                    <div class="common-tag-and-next-prev " style="margin-top: 60px;">
                        <div class="common-tag">
                            <h6>Tags: </h6>
                            <ul>
                                @foreach($blog_tags as $tag)
                                <li><a href="#">{{$tag}}</a></li>,
                                @endforeach
                            </ul>
                        </div>
                        <div class="blog-share">
                            <h6>Share:</h6>
                            <ul>
                                <li><a href="#">Facebook,</a></li>
                                <li><a href="#">Tweeter,</a></li>
                                <li><a href="#">Google+</a></li>
                            </ul>
                        </div>

                    </div>
                    <div class="comment-list " style="margin-top: 60px;">
                        <!-- <h4 class="small-title">Comments</h4>
                        <div class="comment">
                            <div class="blog-author-img">
                                <img src="source/images/author/author2.jpg" alt="">
                            </div>
                            <div class="comment-content">
                                <div class="comment-content-top">
                                    <h6>Alvaro Santos</h6>
                                    <span>08 Jun 2017</span>
                                </div>
                                <a href="#" class="reply">Reply</a>
                                <div class="comment-content-bottom">
                                    <p>But I must explain to you how all this mistaken idea of denouncing pleasure and
                                        ising pain borand I will give you a complete account of the system</p>
                                </div>
                            </div>
                        </div>

                        <div class="comment">
                            <div class="blog-author-img">
                                <img src="source/images/author/author4.jpg" alt="">
                            </div>
                            <div class="comment-content">
                                <div class="comment-content-top">
                                    <h6>Nicolus Christopher</h6>
                                    <span>08 Jun 2017</span>
                                </div>
                                <a href="#" class="reply">Reply</a>
                                <div class="comment-content-bottom">
                                    <p>But I must explain to you how all this mistaken idea of denouncing pleasure and
                                        ising pain borand I will give you a complete account of the system</p>
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <div class="comment-box " style="margin-top: 60px;">
                        <h4 class="small-title">Leave a Comment</h4>
                        <form action="#">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="single-input">
                                        <input name="commenter-name" placeholder="Name" id="commenter-name" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single-input">
                                        <input name="commenter-email" placeholder="Email" id="commenter-email"
                                            type="email">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single-input">
                                        <textarea name="commenter-message" placeholder="Message" id="commenter-message"
                                            cols="30" rows="5"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single-input">
                                        <button class="sent-btn" type="submit">SEND Now</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 blog-sidebar right-sidebar">
                    <div class="widget " style="margin-bottom: 60px">
                        <div class="widget-title">
                            <h4>Search</h4>
                        </div>
                        <div class="sidebar-form">
                            <form action="#">
                                <input type="text" placeholder="Search">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="widget " style="margin-bottom: 60px">
                        <div class="widget-title">
                            <h4>Recent Posts</h4>
                        </div>
                        <div class="sidebar-rc-post">
                            <ul>
                                <li>
                                    <div class="rc-post-thumb img-full">
                                        <a href="single-blog.html"><img src="source/images/blogs/blog1-1.jpg"
                                                alt=""></a>
                                    </div>
                                    <div class="rc-post-content">
                                        <div class="widget-date">january 18, 2018</div>
                                        <h4><a href="single-blog.html">Corporate Law Training for all Employe</a></h4>
                                    </div>
                                </li>
                                <li>
                                    <div class="rc-post-thumb img-full">
                                        <a href="single-blog.html"><img src="source/images/blogs/blog2-2.jpg"
                                                alt=""></a>
                                    </div>
                                    <div class="rc-post-content">
                                        <div class="widget-date">january 16, 2018</div>
                                        <h4><a href="single-blog.html">If I want to shift London, need to follow some
                                                Law</a></h4>
                                    </div>
                                </li>
                                <li>
                                    <div class="rc-post-thumb img-full">
                                        <a href="single-blog.html"><img src="source/images/blogs/blog3-3.jpg"
                                                alt=""></a>
                                    </div>
                                    <div class="rc-post-content">
                                        <div class="widget-date">january 14, 2018</div>
                                        <h4><a href="single-blog.html">Employemnt facilities, benefits &amp;
                                                opportunities</a></h4>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="widget mb-60">
                        <div class="widget-title">
                            <h4>Categories</h4>
                        </div>
                        <div class="widget-categories">
                            <ul>
                                @foreach($categories as $category)
                                    <li><a href="/blogs/catagory/{{$category->id}}">{{$category->name}}</a> <span>{{$category->count->count()}} Post</span></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <!-- <div class="widget " style="margin-bottom: 60px">
                        <div class="widget-banner img-full">
                            <a href="contact.html"><img src="img/banner/banner.jpg" alt=""></a>
                        </div>
                    </div> -->
                    <div class="widget mb-60">
                        <div class="widget-title">
                            <h4>Tags</h4>
                        </div>
                        <div class="widget-tag">
                            <ul class="sidebar-tag">
                                @foreach($tags as $tag)
                                    <li><a href="#">{{$tag->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="widget " style="margin-bottom: 60px">
                        <div class="widget-calendar">
                            <div id="my-calendar"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
</div>
    @endsection