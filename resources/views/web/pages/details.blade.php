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
                                <a href="{{ route('index')}}">Home</a>

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
                                    <i class="far fa-comment"></i>
                                    <span>(0)</span>
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
                        <div class="post-thumb mb-25 ">
                            <img src="{{asset('upload/blog/'.$blog->image)}}" alt="BJBFJNHGFVBEHRVBGSEDRVSJG" width="100%">
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
                                <div class="media-left">
                                    <a href="#"><img src="{{asset('assets/img/user/user-03.jpg')}}" alt=""> </a>
                                </div>
                                <div class="media-body">
                                    <span class="media-heading">
                                        <a href="#">Richard</a>
                                    </span>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiu smod tempor ut laboredolore magna aliqua. Ut enim ad
                                        minim doing veniam, quis nostrud exerci tation ullamco laboris nisi. </p>
                                    <div class="social">
                                        <a href="../../../index.htm" target="_blank">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                        <a href="../../../index-1.htm" target="_blank">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                        <a href="../../../ServiceLogin.html" target="_blank">
                                            <i class="fab fa-google-plus-g"></i>
                                        </a>
                                        <a href="../../../index-2.htm" target="_blank">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                         <!-- s-content__pagenav -->
                        <div class="s-content__pagenav mt-60">
                            <div class="s-content__nav">
                               <div class="row">
                                   <div class="col-md-6">
                                        <div class="s-content__prev mb-30">
                                            <a href="#0" rel="prev">
                                                <span>Previous Post</span>
                                                 Farmers plead for bullets to put down emaciated stock
                                            </a>
                                        </div>
                                   </div>
                                   <div class="col-md-6">
                                        <div class="s-content__next mb-30 text-left text-md-right">
                                            <a href="#0" rel="next">
                                                <span>Next Post</span>
                                                 Nahan downplays Liberal lership tensions after white ant
                                            </a>
                                        </div>
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
                                <div class="col-lg-4 col-md-4">
                                    <div class="postbox mb-30">
                                        <div class="postbox__thumb">
                                            <a href="#">
                                                <img class="img-100" src="{{asset('assets/img/trendy/sm1.jpg')}}" alt="hero image">
                                            </a>
                                        </div>
                                        <div class="postbox__text pt-10">
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
                                            <h4 class="pr-0">
                                                <a href="#">Paul Manafort’s Accountant Testifies She Helped Alter Financial</a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="postbox mb-30">
                                        <div class="postbox__thumb">
                                            <a href="#">
                                                <img class="img-100" src="{{asset('assets/img/trendy/sm2.jpg')}}" alt="hero image">
                                            </a>
                                        </div>
                                        <div class="postbox__text pt-10">
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
                                            <h4 class="pr-0">
                                                <a href="#">Paul Manafort’s Accountant Testifies She Helped Alter Financial</a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="postbox mb-30">
                                        <div class="postbox__thumb">
                                            <a href="#">
                                                <img class="img-100" src="{{asset('assets/img/trendy/sm3.jpg')}}" alt="hero image">
                                            </a>
                                        </div>
                                        <div class="postbox__text pt-10">
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
                                            <h4 class="pr-0">
                                                <a href="#">Paul Manafort’s Accountant Testifies She Helped Alter Financial</a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                         <!-- post-comments -->
                        <div class="post-comments mt-30">
                            <div class="section-title mb-30">
                                <h2>Recent Comments</h2>
                            </div>
                            <div class="latest-comments">
                                <ul>
                                    <li>
                                        <div class="comments-box">
                                            <div class="comments-avatar">
                                                <img src="{{asset('assets/img/user/user-01.jpg')}}" alt="">
                                            </div>
                                            <div class="comments-text">
                                                <div class="avatar-name">
                                                    <h5>Omar Elnagar</h5>
                                                    <span>September 13, 2018 at 10:38 AM</span>
                                                </div>
                                                <p>They call him Flipper Flipper faster than lightning. No one you see is smarter than he. They call
                                                    him Flipper Flipper the faster than lightning. No one you see is smarter than he</p>
                                                <a href="#"><i class="fas fa-reply-all"></i> Reply</a>
                                            </div>
                                        </div>
                                        <ul class="comments-reply">
                                            <li>
                                                <div class="comments-box">
                                                    <div class="comments-avatar">
                                                        <img src="{{asset('assets/img/user/user-02.jpg')}}" alt="">
                                                    </div>
                                                    <div class="comments-text">
                                                        <div class="avatar-name">
                                                            <h5>Omar Elnagar</h5>
                                                            <span>September 13, 2018 at 10:38 AM</span>
                                                        </div>
                                                        <p>They call him Flipper Flipper faster than lightning. No one you see is smarter than he. They
                                                            call him Flipper Flipper the faster than lightning. No one you see is smarter than he</p>
                                                        <a href="#"><i class="fas fa-reply-all"></i> Reply</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <div class="comments-box">
                                            <div class="comments-avatar">
                                                <img src="{{asset('assets/img/user/user-05.jpg')}}" alt="">
                                            </div>
                                            <div class="comments-text">
                                                <div class="avatar-name">
                                                    <h5>Omar Elnagar</h5>
                                                    <span>September 13, 2018 at 10:38 AM</span>
                                                </div>
                                                <p>They call him Flipper Flipper faster than lightning. No one you see is smarter than he. They call
                                                    him Flipper Flipper the faster than lightning. No one you see is smarter than he</p>
                                                <a href="#"><i class="fas fa-reply-all"></i> Reply</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                         <!-- post-comments-form -->
                        <div class="post-comments-form mt-40 mb-40">
                            <div class="section-title mb-30">
                                <h2>Recent Comments</h2>
                            </div>
                            <form action="#">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <input type="text" placeholder="Your Name">
                                    </div>
                                    <div class="col-xl-6">
                                        <input type="text" placeholder="Your Email">
                                    </div>
                                    <div class="col-xl-12">
                                        <textarea name="comments" id="comments" cols="30" rows="10" placeholder="Your Comments"></textarea>
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
                        <div class="post__small mb-30">
                            <div class="post__small-thumb f-left">
                                <a href="#">
                                    <img src="{{asset('assets/img/trendy/xs/xs-1.jpg')}}" alt="hero image">
                                </a>
                            </div>
                            <div class="post__small-text fix pl-10">
                                <span class="sm-cat">
                                    <a href="#">Fashion</a>
                                </span>
                                <h4 class="title-13 pr-0">
                                    <a href="#">Husar asks expenses authority to entitlements after Bruno</a>
                                </h4>
                                <div class="post__small-text-meta">
                                    <ul>
                                        <li>
                                            <i class="fas fa-calendar-alt"></i>
                                            <span>01 Sep 2018</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="post__small mb-30">
                            <div class="post__small-thumb f-left">
                                <a href="#">
                                    <img src="{{asset('assets/img/trendy/xs/xs-2.jpg')}}" alt="hero image">
                                </a>
                            </div>
                            <div class="post__small-text fix pl-10">
                                <span class="sm-cat">
                                    <a href="#">Fashion</a>
                                </span>
                                <h4 class="title-13 pr-0">
                                    <a href="#">Researchers claim majo throug in the fight to cure fibrosis</a>
                                </h4>
                                <div class="post__small-text-meta">
                                    <ul>
                                        <li>
                                            <i class="fas fa-calendar-alt"></i>
                                            <span>01 Sep 2018</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="post__small mb-30">
                            <div class="post__small-thumb f-left">
                                <a href="#">
                                    <img src="{{asset('assets/img/trendy/xs/xs-3.jpg')}}" alt="hero image">
                                </a>
                            </div>
                            <div class="post__small-text fix pl-10">
                                <span class="sm-cat">
                                    <a href="#">Fashion</a>
                                </span>
                                <h4 class="title-13 pr-0">
                                    <a href="#">Nahan downplays Liberal lership tensions after white ant</a>
                                </h4>
                                <div class="post__small-text-meta">
                                    <ul>
                                        <li>
                                            <i class="fas fa-calendar-alt"></i>
                                            <span>01 Sep 2018</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="post__small">
                            <div class="post__small-thumb f-left">
                                <a href="#">
                                    <img src="{{asset('assets/img/trendy/xs/xs-4.jpg')}}" alt="hero image">
                                </a>
                            </div>
                            <div class="post__small-text fix pl-10">
                                <span class="sm-cat">
                                    <a href="#">Travel</a>
                                </span>
                                <h4 class="title-13 pr-0">
                                    <a href="#">Farmers plead for bullets to put down emaciated stock</a>
                                </h4>
                                <div class="post__small-text-meta">
                                    <ul>
                                        <li>
                                            <i class="fas fa-calendar-alt"></i>
                                            <span>01 Sep 2018</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget widget-border mb-40">
                        <h3 class="widget-title">Categories</h3>
                        <ul>
                            <li><a href="#">Business <span>02</span></a></li>
                            <li><a href="#">Politic <span>05</span></a></li>
                            <li><a href="#">Fashion <span>01</span></a></li>
                            <li><a href="#">Corporate <span>03</span></a></li>
                            <li><a href="#">Football <span>07</span></a></li>
                            <li><a href="#">Magazine <span>06</span></a></li>
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
