@extends('layouts.scaffold')
@section('content')
    <div style="margin-left: 18%;" class="mt-5 container">
        <div class="float-right">
            <a href="{{ route('blogs.create') }}"><button class="btn btn-success float-right mb-5"><b>Add More Data</b></button></a>
        </div>
        @if(Session::has('success'))
        <div class="mb-5">
            <div class="alert alert-success">{{Session::get('success')}}</div>
        </div>
        @endif
        <table class="table table-hover table-bordered">
            <tr>
                <th>ID</th>
                <th>Author</th>
                <th>Title</th>
                <th>Thumbnail</th>
                <th>Category</th>
                <th>Short Description</th>
                <th>Long Description</th>
                <th>Action</th>
            </tr>
            @foreach($blogs as $blog)
            <tr>
                <td>{{( $blog->id )}}</td>
                <td>{{( $blog->author->name )}}</td>
                <td>{{( $blog->title )}}</td>
                <td style="width:10%"><img class="rounded img-thumbnail" src="{{asset('upload/blog/'.$blog->image)}}" alt="" width="100%"></td>
                <td>{{( $blog->category->name )}}</td>
                <td>{{( $blog->short_description )}}</td>
                <td>{{( $blog->long_description )}}</td>
                <td>
                    <a href="{{route('blogs.edit', $blog->id)}}" style="text-decoration: none;"><img src="{{asset('assets/img/b_edit.png')}}" alt="b_edit"> Edit</a>
                    &nbsp;|&nbsp;
                    <a class="text-danger" href="{{route('blogs.delete', $blog->id)}}" style="text-decoration: none;"><img src="{{asset('assets/img/b_drop.png')}}" alt="b_drop"> Delete</a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection