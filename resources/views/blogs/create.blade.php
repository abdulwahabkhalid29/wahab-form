@extends('layouts.scaffold')
@section('content')
    <div style="margin-left: 18%;" class="container">
        <form class="mt-5" action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data" novalidate>
            @csrf
            <div class="card">
                <div class="card-header">
                    <h2 class="text-center text-info">Make Blog</h2>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" name="title">
                            <small class="text-danger">@error ('title') {{ $message }} @enderror</small>
                        </div>
                        <div class="col-md-12 mt-3">
                            <label for="image">Thumbnail</label>
                            <input type="file" class="form-control" name="image">
                            <small class="text-danger">@error ('image') {{ $message }} @enderror</small>
                        </div>
                        <div class="col-md-12 mt-3">
                            <label for="blog">blog</label>
                            <select name="blog" class="form-control">
                                <option value="">Please Select</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->blog}}</option>
                                @endforeach
                            </select>
                            <small class="text-danger">@error ('blog') {{ $message }} @enderror</small>
                        </div>







                        <div class="col-md-12 mt-3">
                            <label for="category_id">Category</label>
                            <select name="category_id" class="form-control">
                                <option value="">Please Select</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                            <small class="text-danger">@error ('category_id') {{ $message }} @enderror</small>
                        </div>
                        <div class="col-md-12 mt-3">
                            <label for="content">Content</label>
                            <textarea name="content" cols="30" rows="10" class="form-control"></textarea>
                            <small class="text-danger">@error ('content') {{ $message }} @enderror</small>                            
                        </div>
                    </div>
                    <button class="btn btn-success mt-3 btn-block" type="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection
@push('scripts')
<script src="//cdnjs.cloudflare.com/ajax/libs/tinymce/4.5.1/tinymce.min.js"></script>
<script>
    tinymce.init({ selector:'textarea' });
</script>
@endpush