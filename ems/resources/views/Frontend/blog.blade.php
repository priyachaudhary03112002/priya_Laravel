@extends('frontend.layout.main')

@section('main_section')

<body>
<div class="container">
  <div class="main">
<h5>Create a New Post</h5>
  <hr>
  <form action="{{url('/blog')}}" method="post">
    @csrf
    <div class="form-group">
      <input type="text" class="form-control"  placeholder="title.." name="title">
    </div>
    <div class="form-group">
      <textarea name="comment" class="form-control" placeholder="comment.." rols="30" cols="25" style="height: 168px;"></textarea>
    </div>
    <button type="submit"  name="submit" class="btn btn-primary">Create Post</button>
  </form>
</div>
</div>
</body>

@endsection