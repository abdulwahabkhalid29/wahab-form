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
                                    <a href="#">Author Wise</a>
                                </li>
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
                <div class="col-xl-12 col-lg-12">
                    <div class="author-meta  mt-60">
                        <div class="media flex-column flex-md-row">
                            <div style="height:30%; width:30%;" class="media-left">

                            <img src="{{asset('upload/thumbnail/'.$author-> thumbnail)}}" alt="" class="">

                            </div>
                            <div class="media-body">
                                <span class="media-heading">
                                    <a href="#">{{ $author->name }}</a>
                                </span>
                                <p>{{ $author->about }}</p>
                                <div class="social">
                                    <a href="{{ $author->facebook }}" target="_blank">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="{{ $author->twitter }}" target="_blank">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="{{ $author->google }}" target="_blank">
                                        <i class="fab fa-google-plus-g"></i>
                                    </a>
                                    <a href="{{ $author->linkedin }}" target="_blank">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12">
                     <!-- also-like -->
                     <div class="also-like mt-30">
                        <div class="section-title mb-30">
                            <h2>{{$author->name}}'s Blogs</h2>
                        </div>
                        <div class="row">
                            @foreach ($blogs as $item)
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
                </div>


            </div>

            <div>
                {{$blogs->links()}}
            </div>
        </div>
    </section>

</main>
@endsection
