@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-body">
                    <h2>Category = {{$category->name}}</h2>
                    @foreach($category->posts as $post)
                        <div class="card card-body mt-2">
                            <h3>{{$post->title}} in
                                <mark>
                                    <small>{{$post->category->name}}</small>
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
