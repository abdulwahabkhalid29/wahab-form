@extends('web.layout.scaffold')
@section('content')
<main>
    <!-- page-title-area start -->
    <div class="page-title-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="page-title text-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('index') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="#">Library</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page"> About us</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page-title-area end -->

    <section class="post-details-area pt-60 pb-30">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8">
                     <!-- post-details -->
                    <div class="post-details">
                        <h2 class="details-title mb-15">{{ $blog->title }}</h2>

                        <!-- meta -->
                        <div class="postbox__text-meta pb-30">
                            <ul>
                                <li>
                                    <i class="far fa-user-circle"></i>
                                    <span>{{ $blog->author->name }}</span>
                                </li>
                                <li>
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>{{ date('d M Y' , strtotime( $blog->created_at ))}}</span>
                                </li>
                                <li>
                                    <i class="fa fa-globe"></i>
                                    {{$blog->category->name}}
                                </li>
                                <li>
                                    <i class="far fa-comment"></i>
                                    <span>(00)</span>
                                </li>
                                <li>
                                    <i class="fa fa-eye"></i>
                                    <span>{{$blog->views}}</span>
                                </li>
                            </ul>
                        </div>

                         <!-- share-post-link -->
                        <div class="share-post-link mb-30">
                            <a class="facebook" href="#">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="twitter" href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a class="instagram" href="#">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a class="dribbble" href="#">
                                <i class="fab fa-dribbble"></i>
                            </a>
                            <a class="pinterest" href="#">
                                <i class="fab fa-pinterest-p"></i>
                            </a>
                            <a class="google-plus" href="#">
                                <i class="fab fa-google-plus-g"></i>
                            </a>
                            <a class="pinterest" href="#">
                                <i class="fab fa-pinterest-p"></i>
                            </a>
                        </div>

                         <!-- post-thumb -->
                        <div class="post-thumb mb-25">
                            <img src="{{asset('upload/blog/'.$blog->image)}}" alt="d" width="100%" height="100%">
                        </div>

                        <!-- post-content -->
                        <div class="post-content">
                            {!! $blog->long_description !!}
                        </div>

                        <!-- content__tags -->
                        <div class="content__tags mt-30">
                            <span>Post Tags:</span>
                            <span class="content__tags-list">
                                <a href="#0">orci</a>
                                <a href="#0">lectus</a>
                                <a href="#0">varius</a>
                                <a href="#0">turpis</a>
                            </span>
                        </div>

                         <!-- author-meta -->
                        <div class="author-meta  mt-60">
                            <div class="media flex-column flex-md-row">
                                <div style="height:30%; width:30%;" class="media-left">
                                <a href="{{route('web.pages.authorWise',$blog->author_id)}}">
                                    <img src="{{asset('upload/thumbnail/'.$blog->author-> thumbnail)}}" alt="" class="">
                                </a>
                                </div>
                                <div class="media-body">
                                    <span class="media-heading">
                                        <a href="{{route('web.pages.authorWise',$blog->author_id)}}">{{ $blog->author->name }}</a>
                                    </span>
                                    <p>{{ $blog->author->about }}</p>
                                    <div class="social">
                                        <a href="{{ $blog->author->facebook }}" target="_blank">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                        <a href="{{ $blog->author->twitter }}" target="_blank">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                        <a href="{{ $blog->author->google }}" target="_blank">
                                            <i class="fab fa-google-plus-g"></i>
                                        </a>
                                        <a href="{{ $blog->author->linkedin }}" target="_blank">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                         <!-- also-like -->
                        <div class="also-like mt-30">
                            <div class="section-title mb-30">
                                <h2>You may also like</h2>
                            </div>
                            <div class="row">
                                @foreach ($alsoLike as $item)
                                    <div class="col-lg-4 col-md-4">
                                        <div class="postbox mb-30">
                                            <div class="postbox__thumb">
                                                <a href="{{ route('web.pages.details' , $item->id) }}">
                                                    <img class="img-100" src="{{asset('upload/blog/'.$item->image)}}" alt="hero image">
                                                </a>
                                            </div>
                                            <div class="postbox__text pt-10">
                                                <div class="postbox__text-meta pb-10">
                                                    <ul>
                                                        <li>
                                                            <i class="fas fa-calendar-alt"></i>
                                                            <span>{{ date('d M Y' , strtotime( $item->created_at ))}}</span>
                                                        </li>
                                                        <li>
                                                            <i class="far fa-comment"></i>
                                                            <span>(03)</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <h4 class="pr-0">
                                                    <a href="#">{{$item->title}}</a>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach


                            </div>
                        </div>

                         <!-- post-comments -->
                         <div class="post-comments mt-30">
                            <div class="section-title mb-30">
                                <h2>Recent Comments</h2>
                            </div>
                            <div class="latest-comments">
                                <ul>
                                    @forelse ($comments as $comment)
                                        <li>
                                            <div class="comments-box">
                                                <div class="comments-avatar">
                                                    @if(!empty($comment->reader->thumbnail))
                                                        <img src="{{asset('upload/profile/'.$comment->reader->thumbnail)}}" alt="">
                                                    @else
                                                        <img src="{{asset('assets/img/placeholder.png')}}" alt="">
                                                    @endif

                                                    </div>
                                                    <div class="comments-text">
                                                        <div class="avatar-name">
                                                            <h5>{{$comment->reader->name}}</h5>
                                                            <span>{{date('j F, Y',strtotime($comment->created_at))}}</span>
                                                        </div>
                                                        <p>{{$comment->comment}}</p>
                                                    </div>
                                                </div>

                                            </li>
                                    @empty
                                           <i> No comment found</i>
                                    @endforelse

                                </ul>
                            </div>
                        </div>

                         <!-- post-comments-form -->
                        <div class="post-comments-form mt-40 mb-40">
                            <div class="section-title mb-30">
                                <h2>Recent Comments</h2>
                            </div>
                            <form action="{{route('web.comment.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-xl-12">
                                        <input type="hidden" name="blog_id" value="{{$blog->id}}">
                                        <input type="hidden" name="author_id" value="{{$blog->author_id}}">
                                        <textarea name="comment" id="comments" cols="30" rows="10" placeholder="Your Comments" required></textarea>
                                        <button class="btn brand-btn" type="submit">Send message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="widget mb-40">
                        <a href="#"><img src="{{asset('assets/img/add/add-sidebar.jpg')}}" alt=""></a>
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
                                <a href="#">
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
                                    <a href="#">Paul Manafort’s Accountant Testifies She Helped Alter Financial Documents</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget widget-border mb-40">
                        <h3 class="widget-title">Popular Tags</h3>
                        <div class="tagcloud">
                            <a href="#">Fashion</a>
                            <a href="#">Politic</a>
                            <a href="#">Modern</a>
                            <a href="#">Tips</a>
                            <a href="#">Nav</a>
                            <a href="#">Jason</a>
                            <a href="#">Roster</a>
                            <a href="#">Boat</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
@endsection
