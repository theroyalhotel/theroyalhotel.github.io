<?php
$book = Session::get('book');
?>
<header>
    <div class="header-sticky">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-6">
                    <div class="header-logo">
                        <a href="/"><img src="source/images/logo.png" style="width: 190px;"></a>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="header-menu-area">
                        <nav style="display: block;">
                            <ul class="main-menu">
                                <li class="{{ (\Request::route()->getName() == 'home') ? 'active-li' : '' }}"><a
                                        href="/">HOME</a></li>
                                <li
                                    class="sub-menu {{ (\Request::route()->getName() == 'hotellist') ? 'active-li' : '' }}">
                                    <a href="/hotellist">Hotel</a>
                                    <!-- <ul>
                                  <li><a href="/roomgrid">Room Grid</a></li>
                                    <li><a href="/hotellist">Hotel List</a></li>
                                </ul> -->
                                </li>
                                <li class="{{ (\Request::route()->getName() == 'blog') ? 'active-li' : '' }}"><a
                                        href="/blog">BLOG</a></li>
                                <li class="{{ (\Request::route()->getName() == 'team') ? 'active-li' : '' }}"><a
                                        href="/team">TEAM</a></li>
                                <li class="{{ (\Request::route()->getName() == 'contact') ? 'active-li' : '' }}"><a
                                        href="/contact">CONTACT</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    @if(isset($book))
                    <div class="book-now-btn text-right">
                        <a class="" href="/booktotal">BOOK NOW</a>
                    </div>
                    @endif
                    
                </div>
                <div class="menu-toggle">
                        <i class="fas fa-bars"></i>
                    </div>
                    <div class="close" style="margin-top: -90px;margin-left: 690px;">
                        <i class="fas fa-times"></i>
                    </div>
            </div>
        </div>
    </div>
</header>