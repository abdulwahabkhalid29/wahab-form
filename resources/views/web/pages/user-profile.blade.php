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

                                <li class="breadcrumb-item active" aria-current="page"> User Profile</li>
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
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                          Profile
                        </div>
                        <div class="card-body">
                            <form action="{{route('web.profile.update')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                <div class="col-md-12">
                                        <label for="">Name</label>
                                        <input type="text" class="form-control" required name="name" value="{{auth()->user()->name}}">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="">Image</label>
                                        <input type="file" name="thumbnail" id="" class="form-control">
                                    </div>
                                    @if(!empty(auth()->user()->thumbnail))
                                    <small style="padding-top: 12px !important; padding-bottom: 12px !important; margin-left:20px">
                                        <img src="{{asset('upload/profile/'.auth()->user()->thumbnail)}}" class="img-thumbnail" style="height:100px; width:100px; ">
                                    </small>
                                    @endif
                                    <div class="col-md-12">
                                        <label for="">About</label>
                                        <textarea name="about" id="" cols="30" rows="10" class="form-control">{{auth()->user()->about}}</textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="">Facebook</label>
                                        <input type="text" class="form-control" required name="facebook" value="{{auth()->user()->facebook}}">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="">Twitter</label>
                                        <input type="text" class="form-control" required name="twitter" value="{{auth()->user()->twitter}}">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="">Google</label>
                                        <input type="text" class="form-control" required name="google" value="{{auth()->user()->google}}">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="">Linkedin</label>
                                        <input type="text" class="form-control" required name="linkedin" value="{{auth()->user()->linkedin}}">
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <button type="submit" class="btn  btn-block text-white">UPDATE PROFILE</button>
                                    </div>
                                  </div>
                            </form>

                        </div>
                      </div>
                </div>
                <div class="col-md-2"></div>

            </div>
        </div>
    </section>

</main>
@endsection
