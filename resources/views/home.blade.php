@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">

                        <h2>Add A Post</h2>
                        <form action="{!! route('post.store') !!}" method="post">
                            @csrf
                            <label for="">Enter Post Title</label> <br>
                            <input type="text" name="title" class="form-control">

                            <label for="">Enter Post Description</label> <br>
                            <textarea name="description" class="form-control" rows="5"></textarea>

                            <label for="">Category</label> <br>
                            <select class="form-control" name="category_id">
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>

                            <input type="submit" class="mt-2 btn btn-success" value="Publish">
                        </form>
                    </div>
                </div>

                <div class="card card-body">
                    <h2>My Post</h2>
                    @foreach($user->posts as $post)
                        <div class="card card-body mt-2">
                            <h3>{{$post->title}} in
                                <mark>
                                    <small>
                                        <a href="{!! route('category',$post->category->id) !!}">{{$post->category->name}}</a>
                                    </small>
                                </mark>
                            </h3>
                            <div>
                                {!! $post->description !!}
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
@endsection
