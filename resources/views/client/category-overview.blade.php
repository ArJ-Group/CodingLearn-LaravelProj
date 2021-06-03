@extends('layouts.app')
@section('content')
<div class="container">
      <nav class="breadcrumb">
        <a href="{{route('main')}}" class="breadcrumb-item active"> Home</a>
        <span class ="breadcrumb-item active"> {{$category->title}} </span>
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
                  <tr>
                    <th scope="col">Forum</th>
                    <th scope="col">Topics</th>
                    <th scope="col">Posts</th>
                    <th scope="col">Latest Post</th>
                  </tr>
                </thead>
                @if(count($category->forums) > 0)
                  @foreach($category->forums)
                <tbody>
                  
                  <tr>
                    <td>
                      <h3 class="h5">
                        <a href="{{route('forum.overview', $forum->id)}}" class="text-uppercase">{{$forum->title}}</a>
                      </h3>
                      <p class="mb-0">
                        {{$forum->desc}}
                      </p>
                    </td>
                    <td><div>0</div></td>
                    <td><div>0</div></td>
                    <td>
                      <h4 class="h6 font-weight-bold mb-0">
                      </h4>
                      <div>{{$forum->created_at->diffForHumans()}}</div>
                    </td>
                  </tr>
                  </tbody>
                  @endforeach
                @else
                  <h4>No Forums in this category</h4>
                @endif
                </table>
            </div>
          </div>
          <a href="{{route('forum.new', $category->id)}}" class="btn btn-lg btn-primary mb-2">New Topic</a>
        </div>
        
@endsection