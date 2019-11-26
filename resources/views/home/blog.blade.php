@extends('home.layouts.master')
@section('title')

<title> Blog</title>
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
                        <h1 class="text-center">Blog</h1>
                        <div class="breadcrumb-bar">
                            <ul class="breadcrumb text-center">
                                <li><a href="index.html">Home</a></li>
                                <li>Blog</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Blog-->
    <div class="blog-area" style="padding-top: 95px;padding-bottom: 100px;">
        <div class="container">
            <div class="row">
                
                <div class="col-12">
                    <div class="section-title title-2 text-center" style="margin-bottom: 50px;" data-aos="fade-up">
                        <h3>Our Blog</h3>
                        <p>ahihi.</p>
                    </div>
                </div>
            </div>
            
            <div class="row">
            <div class="col-lg-8">
            
                
                @foreach($blogs as $blog)
                    <div class="col-lg-12 col-md-12">
                        <div class="single-blog" style="margin-bottom: 50px;">
                            <div class="blg-img">
                                <a href="/blogdetail"><img src="{{asset('storage/'.$blog->file)}}" alt=""></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-text">
                                    <h5><a href="/blogdetail">{{$blog->name}}</a></h5>
                                    <div class="blog-post-info">
                                        <span><a href="#">By {{$blog->admin_name}}</a></span>
                                        <span>{{$blog->create_at}}</span>
                                    </div>
                                    <p>{{$blog->content}}</p>
                                    <a href="/blogdetail/{{$blog->id}}" class="read-more"><i class="zmdi zmdi-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach 
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
                                <li><a href="#">Criminal Law</a> <span>(20)</span></li>
                                <li><a href="#">Family Law</a> <span>(18)</span></li>
                                <li><a href="#">Civil LLitigation</a> <span>(40)</span></li>
                                <li><a href="#">Insurance Law</a> <span>(30)</span></li>
                                <li><a href="#">Divorce Law</a> <span>(66)</span></li>
                                <li><a href="#">Employment Law</a> <span>(99)</span></li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="widget mb-60">
                        <div class="widget-title">
                            <h4>Tags</h4>
                        </div>
                        <div class="widget-tag">
                            <ul class="sidebar-tag">
                                <li><a href="#">Criminal Law</a></li>
                                <li><a href="#">Support</a></li>
                                <li><a href="#">Family Law</a></li>
                                <li><a href="#">Investment Law</a></li>
                                <li><a href="#">Divorce Law</a></li>
                                <li><a href="#">Law</a></li>
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
            <div class="row">
                <div class="col-12">
                    <div class="product-pagination"  >
                        <!-- <ul>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                        </ul> -->
                        @if($blogs)
                                    <ul class="pagination " data-aos="fade-up">
                                          {{ $blogs->links('vendor.pagination.bootstrap-4') }}
                                    </ul>
                            @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection