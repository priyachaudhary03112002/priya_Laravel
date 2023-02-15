@extends('frontend.layout.main')

@section('main_section')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                 <div class="row">
                    <div class="col-8">
                        <h1 class="display-one">Our Blog!</h1>
                        <p>Enjoy reading our posts. Click on a post to read!</p>
                    </div>
                    <div class="col-4">
                        <p>Create new Post</p>
                        <a href="{{url('/blog')}}" class="btn btn-primary btn-sm">Add Post</a>
                    </div>
                </div>                
                @foreach($posts as $post)
                    <ul>
                        <li><a href="#">{{$post->title}}</a></li>
                    </ul>
                    
                @endforeach
            </div>
        </div>
    </div>
@endsection
