@extends('layouts.app')
@section('content')
<div class="container">
      <nav class="breadcrumb">
      <a href="{{route('forum_main')}}" class="breadcrumb-item active"> Home</a>
        <a href="{{route('category.overview', $forum->category->id)}}" class="breadcrumb-item active"> {{$forum->category->title}}</a>
        <a href="{{route('forum.overview', $forum->id)}}" class="breadcrumb-item active"> {{$forum->title}}</a>
        <span class ="breadcrumb-item active"> Reply </span>
      </nav>
<div class="row">
        <div class="col-lg-12">
          <div class="row">
            <!-- Category one -->
            <div class="col-lg-12">
              <!-- second section  -->
              <h4 class="text-white bg-info mb-0 p-4 rounded">New Discussion Topic</h4>
            </div>
          </div>
        </div>
      </div>

      <form action="{{route('discussion.store')}}" class="mb-3" method="POST">
      @csrf
        <div class="form-group">
          <label for="title">Discussion Topic Title</label>
          <input type="text" name="title" class="form-control" />
        </div>
        <input type="number" value="{{$forum->id}}" name="forum_id" hidden>

        <div class="form-group">
          <textarea
            class="form-control"
            name="desc"
            id=""
            rows="10"
            required
          ></textarea>
        </div>

        <button type="submit" class="btn btn-primary mt-2 mb-lg-5">
          Create Discussion
        </button>
        <button type="reset" class="btn btn-danger mt-2 mb-lg-5">Reset</button>
      </form>
      <div></div>
    </div>
@endsection