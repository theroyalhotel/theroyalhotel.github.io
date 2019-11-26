<div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> <span>
                             </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            @guest
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                            @else
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"> {{ $user_provider->name }}</strong>
                             </span>
                             @endguest
                             <span class="text-muted text-xs block"> {{$user_provider->permission_name }} <b class="caret"></b></span> </span> </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="/admin/profile">Profile</a></li>
                            <li class="divider"></li>

                                <li> <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();">
                                     {{ __('Logout') }}
                                 </a>
                                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form></li>
                            </ul>
                        </div>
                        <div class="logo-element">
                            IN+
                        </div>
                    </li>
                    @if( Auth::user()->is_admin=="1")
                    <li>
                        <a href="/admin/admins"><i class="fa fa-address-book-o"></i> <span class="nav-label">List admin</span><span class="fa arrow"></span></a>

                    </li>
                    @endif
                    @if( Auth::user()->id_permission=="2")
                    <li  class="{{ request()->is('admin/blogs*') ? 'active' : '' }}">
                        <a href="#"><i class="fa fa-fa-tasks"></i> <span class="nav-label">Blogs</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="/admin/blogs/create">Add Blog</a></li>
                            <li><a href="/admin/blogs">List Blogs</a></li>
                        @if( Auth::user()->is_admin=="1")
                            <li><a href="/admin/blogs/awaiting">Awaiting approval</a></li>
                        @endif
                        </ul>
                    </li>
                    @else
                    <li  class="{{ request()->is('admin/catagories*') ? 'active' : '' }}">
                        <a href="#"><i class="fa fa-tasks"></i> <span class="nav-label">Catagories</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="/admin/catagories/create">Add Catagory</a></li>
                            <li><a href="/admin">List Catagories</a></li>
                        </ul>
                    </li>
                    @if( Auth::user()->is_admin=="1")
                    <li class="{{ request()->is('admin/hotels*') ? 'active' : '' }}">
                        <a href="#"><i class="fa fa-university"></i> <span class="nav-label">Hotels</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="/admin/hotels/create">Add Hotel</a></li>
                            <li><a href="/admin/hotels">List Hotels</a></li>
                        </ul>
                    </li>
                    @endif
                    <li class="{{ request()->is('admin/orders*') ? 'active' : '' }}">
                        <a href="#"><i class="fa fa-bitcoin"></i> <span class="nav-label">Ordered</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="/admin/orders">List Orders</a></li>
                        </ul>
                    </li>
                    <li class="{{ request()->is('admin/rooms*') ? 'active' : '' }}">
                        <a href="#"><i class="fa fa-hospital-o"></i> <span class="nav-label">Rooms</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            @if(Auth::user()->is_admin=="1")
                            <li><a href="/admin/rooms/create">Add Room</a></li>
                            @endif
                            <li><a href="/admin/rooms">List Rooms</a></li>
                        </ul>
                    </li>
                    <li  class="{{ request()->is('admin/blogs*') ? 'active' : '' }}">
                        <a href="#"><i class="fa fa-newspaper-o"></i> <span class="nav-label">Blogs</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="/admin/blogs/create">Add Blog</a></li>
                            <li><a href="/admin/blogs">List Blogs</a></li>
                        @if( Auth::user()->is_admin=="1")
                            <li><a href="/admin/blogs/awaiting">Awaiting approval</a></li>
                        @endif

                        </ul>
                    </li>
                    <li class="{{ request()->is('admin/tags*') ? 'active' : '' }}">
                        <a href="#"><i class="fa fa-tags"></i> <span class="nav-label">Tags</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="/admin/tags/create">Add Tag</a></li>
                            <li><a href="/admin/tags">List Tags</a></li>
                        </ul>
                    </li>
                    @endif

                    <li class="{{ request()->is('admin/feedback*') ? 'active' : '' }}">
                        <a href="#"><i class="fa fa-pied-piper"></i> <span class="nav-label">Feeback</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="/admin/feedback-list">List Feedback</a></li>
                            
                        </ul>
                    </li>
                    <li class="{{ request()->is('admin/email*') ? 'active' : '' }}">
                        <a href="#"><i class="fa fa-envelope"></i> <span class="nav-label">Mailbox
                            </span><span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level collapse" style="height: 0px;">
                            <li class="{{ request()->is('admin/email') ? 'active' : '' }}"><a href="/admin/email">Inbox</a></li>
                            @if(Auth::user()->is_admin=="1")
                                @foreach(\App\Hotel::get() as $hotel) <li><a href="/admin/email/{{$hotel->id}}">{{$hotel->name}}</a></li> @endforeach
                            @endif
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            <form role="search" class="navbar-form-custom" action="search_results.html">
                <div class="form-group">
                    <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                </div>
            </form>
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                            <a class="font-bold" style="font-family:open sans,Helvetica Neue, Helvetica, Arial, sans-serif;"
                            href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                         <i class="fa fa-sign-out"> </i>{{ __('Logout') }}
                        </a>
                    </i>
                </li>

            </ul>

        </nav>
        </div>
