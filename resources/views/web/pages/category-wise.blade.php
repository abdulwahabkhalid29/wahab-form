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
                                    <a href="#">Category Wise</a>
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
                <div class="col-xl-8 col-lg-8">
                     <!-- also-like -->
                     <div class="also-like mt-30">
                        <div class="section-title mb-30">
                            <h2>{{$blog->name}}'s Blogs</h2>
                        </div>
                        <div class="row">
                            @foreach ($blogs as $item)
                                <div class="col-lg-4 col-md-4">
                                    <div class="postbox mb-30">
                                        <div class="postbox__thumb">
                                            <a href="{{ route('web.pages.details' , $item->id) }} ">
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
                <div class="col-xl-4 col-lg-4">
                    <div class="widget widget-border mb-40">
                        <h3 class="widget-title">Categories</h3>
                        <ul>
                            @foreach($categories as $category)
                                <li><a href="{{route('web.pages.categoryWise',$category->id)}}">{{$category->name}} <span>{{$category->categoryCount($category->id)}}</span></a></li>
                            @endforeach
                        </ul>
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
