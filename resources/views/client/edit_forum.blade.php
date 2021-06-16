@extends('layouts.app')
@section('content')
<div class="container">
      <nav class="breadcrumb">
      <a href="{{route('forum_main')}}" class="breadcrumb-item active"> Home</a>
      <a href="{{route('category.overview', $forum->category->id)}}" class="breadcrumb-item active"> {{$forum->category->title}}</a>
        <span class ="breadcrumb-item active"> New Topic </span>
      </nav>
<div class="row">
        <div class="col-lg-12">
          <div class="row">
            <!-- Category one -->
            <div class="col-lg-12">
              <!-- second section  -->
              <h4 class="text-white bg-info mb-0 p-4 rounded">New Topic</h4>
            </div>
          </div>
        </div>
      </div>

      <form action="{{route('forum.update', $forum->id)}}" class="mb-3" method="POST">
      @csrf
        <input type="number" value="{{$forum->category_id}}" name="category_id" hidden>
        <div class="form-group">
          <label class="col-lg-2 control-label">Forum description</label>
          <div class="col-lg-10">
          <textarea name="desc" class="form-control" cols="30" rows="5" >
          {!!$forum->desc!!}
          </textarea>
          </div>
        </div>

        <input type="number" value="{{auth()->id()}}" name="user_id" hidden>

        <div class="form-group">
          <div class="col-lg-offset-2 col-lg-10">
            <button type="submit" class="btn btn-success">Update Forum</button>
            <a href="/dashboard/home" class="btn btn-danger">Cancel</a>
          </div>
        </div>
      </form>
    </div>
  </section>
</div>
@endsection