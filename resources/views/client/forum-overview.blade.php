@extends('layouts.app')
@section('content')
<div class="container">
      <nav class="breadcrumb">
        <a href="{{route('forum_main')}}" class="breadcrumb-item active"> Home</a>
        <a href="{{route('category.overview', $forum->category->id)}}" class="breadcrumb-item active"> {{$forum->category->title}}</a>
      </nav>
<div class="row">
        <div class="col-lg-12">
          <div class="row">
            <!-- Category one -->
            <div class="col-lg-12">
              <!-- second section  -->
              <h4 class="text-white bg-info mb-0 p-4 rounded-top">
                {{$forum->title}}
              </h4>
              <table
                class="table table-striped table-responsive table-bordered mb-xl-0"
              >
              <thead class="thead-light">
                    <th width='2000px'>{{$forum->desc}}</th>
                </thead>
                <tbody>
                </tbody>
              </table>
              
              <table
                class="table table-striped table-responsivelg table-bordered"
              >
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Answer</th>
                    <th scope="col ">Created</th>
                    <th scope="col">Reply</th>
                    <th scope="col">Update</th>
                    <th scope="col">Delete</th>
                    <th scope="col">Reply</th>
                  </tr>

                </thead>
                <tbody>

                @if(count($forum->discussions) > 0)
                  @foreach($forum->discussions as $discussion)
                  <tr>
                    <td>
                      <h3 class="h6">
                        {{$discussion->desc}}
                      </h3>
                      
                    </td>
                    <td>
                      <div>by {{$discussion->user->name}}</div>
                      <div>{{$discussion->created_at}}</div>
                    </td>
                    <td>
                      <div>{{$discussion->reply->count()}} replies</div>
                    </td>
                    <td>
                    @if(auth()->id() == $discussion->user_id || auth()->id('is_admin') == 1)
                      <a href="{{route('discussion.edit', $discussion->id)}}" class="btn btn-primary">Edit</a>
                        @else
                        <div>Cannot Update</div>
                        @endif
                    </td>
                    <td>
                      <div>
                      @if(auth()->id() == $discussion->user_id || auth()->id('is_admin') == 1)
                        <a href="{{route('discussion.delete', $discussion->id)}}" class="btn btn-danger"> Delete</a>
                        @else
                        <div>Cannot Delete</div>
                      @endif
                      </div>
                    </td>
                    <td>
                      <div>
                      @if(auth()->id())
                        <a href="{{route('discussion', $discussion->id)}}" class="btn btn-primary"> Reply</a>
                        @else
                        <div>Cannot Reply</div>
                      @endif
                      </div>
                    </td>
                  </tr>
                  
                  @endforeach
                @else
                  <h4>No answers in this topics yet</h4>
                @endif
                  
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      @if(!auth()->user())
      <div></div>
      <div></div>
      <h5>You haven't Login yet </h5>
      @else
      <form action="{{route('discussion.store', $forum->id)}}" method = "post" class="mb-3">
        @csrf
        <div class="form-group">
          <label for="comment">Create new question to this answer</label>
          <textarea
            class="form-control"
            name="desc"
            rows="10"
            required
          ></textarea>
          <button type="submit" class="btn btn-primary mt-2 mb-lg-5">
            Submit reply
          </button>
          <button type="reset" class="btn btn-danger mt-2 mb-lg-5">
            Reset
          </button>
        </div>
      </form>

      
      <div class="mb-3 clearfix">
        <nav aria-label="Navigate post pages" class="float-lg-right">
          <ul class="pagination pagination-sm mb-lg-0">
            <li class="page-item active">
              <a href="#" class="page-link">1</a>
            </li>
            <li class="page-item"><a href="#" class="page-link">2</a></li>
            <li class="page-item"><a href="#" class="page-link">3</a></li>
            <li class="page-item"><a href="#" class="page-link">4</a></li>
            <li class="page-item"><a href="#" class="page-link">5</a></li>
            <li class="page-item">
              <a href="#" class="page-link">&hellip;</a>
            </li>
            <li class="page-item"><a href="#" class="page-link">9</a></li>
            <li class="page-item"><a href="#" class="page-link">10</a></li>
          </ul>
        </nav>
        <form action="" class="form-inline float-lg-left d-block d-sm-flex">
          <div class="mb-2 mb-sm-0 mr-2">Display posts from previous</div>
          <div class="form-group mr-2">
            <label class="sr-only" for="select-time"> Time Period</label>
            <select
              name="select-time"
              id=""
              class="form-control form-control-sm"
            >
              <option value="all">All posts</option>
              <option value="day">1 day</option>
              <option value="week">1 week</option>
              <option value="month">1 month</option>
              <option value="year">1 year</option>
            </select>
          </div>

          <div class="mb-2 mb-sm-0 mr-2">Sort by:</div>
          <div class="form-group mr-2">
            <label class="sr-only" for="post-sort">Sort posts by:</label>
            <select
              name="select-time"
              id=""
              class="form-control form-control-sm"
            >
              <option value="author">Author</option>
              <option value="post-time">Post time</option>
              <option value="replies">Replies</option>
              <option value="subject">Subject</option>
              <option value="views">Views</option>
            </select>
          </div>

          <div class="mb-2 mb-sm-0 mr-2">Sort direction:</div>
          <div class="form-group mr-2">
            <label class="sr-only" for="post-direct">Sort direct:</label>
            <select
              name="select-time"
              id=""
              class="form-control form-control-sm"
            >
              <option value="desending">Desending</option>
              <option value="ascending">Ascending</option>
            </select>
          </div>
          <button type="submit" class="btn btn-sm btn-primary">Sort</button>
        </form>
      </div>
      @endif
    </div>
@endsection