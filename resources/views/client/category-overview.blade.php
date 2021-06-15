@extends('layouts.app')
@section('content')
<div class="container">
      <nav class="breadcrumb">
        <a href="{{route('forum_main')}}" class="breadcrumb-item active"> Home</a>
      </nav>
<div class="row">
        <div class="col-lg-8">
          <div class="row">
            <!-- Category one -->
            <div class="col-lg-12">
              <!-- second section  -->
              <h4 class="text-white bg-info mb-0 p-4 rounded-top">
                {{$category->title}}
              </h4>
              <table
                class="table table-striped table-responsive table-bordered mb-xl-0"
              >
              <thead class="thead-light">
              @if(count($category->forums) > 0)
                  <tr>
                    <th scope="col" width='400px'>Question</th>
                    <th scope="col">Answer</th>
                    <th scope="col" width='100px'>Latest Post</th>
                    <th scope="col">Update</th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
              @endif
                @if(count($category->forums) > 0)
                  @foreach($category->forums as $forum)
                <tbody>
                  <tr>
                    <td>
                      <h3 class="h5">
                        <a href="{{route('forum.overview', $forum->id)}}">{{$forum->title}}</a>
                      </h3>
                      <p class="mb-0">
                        {{$forum->desc}}
                      </p>
                    </td>
                    <td><div>{{count($forum->discussions)}}</div></td>
                    <td>
                      <h4 class="h6 font-weight-bold mb-0">
                      </h4>
                      <div>{{$forum->created_at->diffForHumans()}}</div>
                    </td>
                    <td>
                    @if(auth()->id() == $forum->user_id || auth()->id('is_admin') == 1)
                      <a href="{{route('forum.edit', $forum->id)}}" class="btn btn-primary">Edit</a>
                        @else
                        <div>Cannot Update</div>
                        @endif
                    </td>
                    <td>
                      @if(auth()->id() == $forum->user_id || auth()->id('is_admin') == 1)
                        <a href="{{route('forum.destroy', $forum->id)}}" class="btn btn-danger"> Delete</a>
                        @else
                        <div>Cannot Delete</div>
                        @endif
                    </td>
                  </tr>
                  </tbody>
                  @endforeach
                @else
                  <h4>No Topics in this category yet</h4>
                @endif
                </table>
            </div>
          </div>
          
          @if(!auth()->user())
          <div></div>
          <h5>You haven't Login yet </h5>
      @else
      <a href="{{route('forum.new', $category->id)}}" class="btn btn-lg btn-primary mb-2">New Topics</a>
      @endif
        </div>
        
@endsection