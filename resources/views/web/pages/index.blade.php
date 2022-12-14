@extends('web.layout.scaffold')
@push('styles')
    <style>
    .pagination {
        display: block !important;
        margin: 0 !important;
        overflow: hidden !important;
        border-radius: 0 !important;
        padding-bottom: 3px !important;
    }
    .page-item{
        display: inline-block;
    margin-right: 2px;
    margin-bottom: 10px;
    }
    </style>
@endpush
@section('content')
<main>
    <!-- hero-area start -->
    <div class="page-banner-area mt-60">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{route('home')}}">Blog</a>
                    <div class="text-right">
                    @auth
                        Hello,<a href="{{route('web.profile.edit')}}">{{auth()->user()->name}}</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="javascript:;" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">LOGOUT</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    @endauth

                    @guest
                        <a href="{{route('login')}}">LOGIN</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="{{route('register')}}">REGISTER</a>&nbsp;&nbsp;
                    @endguest
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="page-title-bar text-center pt-60 pb-60" style="background-image: url({{asset('assets/img/bg/page-itle.jpg')}})">
                        <h1>Blogs</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- hero-area end -->

    <!-- news area -->
    <section class="news-area pt-60 pb-60">
        <!-- trendy news -->
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-12">
                    <div class="postbox mb-40">
                        @foreach($blogs as $blog)
                        <div class="postbox__thumb mb-25">
                            <a href="{{ route('web.pages.details' , $blog->id) }}">
                                <img src="{{asset('upload/blog/'.$blog->image)}}" alt="d" height="100%" width="100%">
                            </a>
                        </div>
                        <div class="postbox__text">
                            <div class="postbox__text-meta pb-20">
                                <ul>
                                    <li>
                                        <span class="post-cat">
                                            <a href="#" tabindex="0">{{( $blog->category->name )}}</a>
                                        </span>
                                    </li>
                                    <li>
                                        <i class="fas fa-calendar-alt"></i>
                                        <span>{{ date('d M Y' , strtotime( $blog->created_at ))}}</span>
                                    </li>
                                    <li>
                                        <i class="far fa-comment"></i>
                                        <span>(00)</span>
                                    </li>
                                </ul>
                            </div>
                            <h4 class="title-30 font-600 pr-0">
                                <a href="">{{ $blog->title }}</a>
                            </h4>
                            <div class="desc-text mb-20">
                                 {{ $blog->short_description }}
                            </div>
                            <div class="mb-5">
                                <a href="{{ route('web.pages.details' , $blog->id) }}" class="read-more">read more</a>
                            </div>
                        </div>
                    @endforeach



                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12">
                    <div class="widget mb-40">
                        <a href="{{url('details')}}">
                            <img src="{{asset('assets/img/add/add-sidebar.jpg')}}" alt="">
                        </a>
                    </div>
                    <div class="widget widget-border mb-40">
                        <h3 class="widget-title">Popular posts</h3>
                        @forelse ($popularPosts as $item)
                            <div class="post__small mb-30">
                                <div class="post__small-thumb f-left">
                                    <a href="{{ route('web.pages.details' , $item->id) }}">
                                        <img src="{{asset('upload/blog/'.$item->image)}}" alt="hero image" style="height:100px; width:100px;">
                                    </a>
                                </div>
                                <div class="post__small-text fix pl-10">
                                    <span class="sm-cat">
                                        <a href="#">{{$item->category->name}}</a>
                                    </span>
                                    <h4 class="title-13 pr-0">
                                        <a href="#">{{$item->title}}</a>
                                    </h4>
                                    <div class="post__small-text-meta">
                                        <ul>
                                            <li>
                                                <i class="fas fa-calendar-alt"></i>
                                                <span>{{ date('d M Y' , strtotime( $item->created_at ))}}</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @empty

                        @endforelse
                    </div>
                    <div class="widget widget-border mb-40">
                        <h3 class="widget-title">Categories</h3>
                        <ul>
                            @foreach($categories as $category)
                                <li><a href="{{route('web.pages.categoryWise',$category->id)}}">{{$category->name}} <span>{{$category->categoryCount($category->id)}}</span></a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="widget widget-border mb-40">
                        <h3 class="widget-title">Subscribe our Newsletter!</h3>
                        <p>Subscribe to our email newsletter to receive useful articles and special offers.</p>
                        <form class="widget-subscribe" action="#">
                            <input type="email" placeholder="Enter your email :">
                            <button class="btn">subscribe</button>
                        </form>
                    </div>
                    <div class="widget widget-border mb-40">
                        <h3 class="widget-title">Most visited</h3>
                        <div class="postbox">
                            <div class="postbox__thumb">
                                <a href="{{url('details')}}">
                                    <img src="{{asset('assets/img/details/sidebar-post.jpg')}}" alt="hero image">
                                </a>
                            </div>
                            <div class="postbox__text pt-15">
                                <div class="postbox__text-meta pb-10">
                                    <ul>
                                        <li>
                                            <i class="fas fa-calendar-alt"></i>
                                            <span>01 Sep 2018</span>
                                        </li>
                                        <li>
                                            <i class="far fa-comment"></i>
                                            <span>(03)</span>
                                        </li>
                                    </ul>
                                </div>
                                <h4 class="title-16 pr-0">
                                    <a href="{{url('details')}}">Paul Manafort???s Accountant Testifies She Helped Alter Financial Documents</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget widget-border mb-40">
                        <h3 class="widget-title">Popular Tags</h3>
                        <div class="tagcloud">
                            <a href="{{url('details')}}">Fashion</a>
                            <a href="{{url('details')}}">Politic</a>
                            <a href="{{url('details')}}">Modern</a>
                            <a href="{{url('details')}}">Tips</a>
                            <a href="{{url('details')}}">Nav</a>
                            <a href="{{url('details')}}">Jason</a>
                            <a href="{{url('details')}}">Roster</a>
                            <a href="{{url('details')}}">Boat</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-10">
                <div class="col-md-12">
                {{$blogs->links()}}
                </div>
            </div>
        </div>
        <!-- trendy news end -->
    </section>
    <!-- news area end -->

</main>
@endsection
