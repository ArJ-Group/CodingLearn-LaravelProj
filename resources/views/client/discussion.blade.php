@extends('layouts.app')
@section('content')
<div class="container">
      <nav class="breadcrumb">
      <a href="{{route('forum_main')}}" class="breadcrumb-item active"> Home</a>
      </nav>
    <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <!-- Category one -->
            <div class="col-lg-12">
              <!-- second section  -->
              <h4 class="text-white bg-info mb-0 p-4 rounded-top">
                {{$discussion->title}}
              </h4>
              <table
                class="table table-striped table-responsivelg table-bordered"
              >
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Author</th>
                    <th scope="col">Message</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="author-col">
                      <div>by {{$discussion->user->name}}</div>
                    </td>
                    <td class="post-col d-lg-flex justify-content-lg-between">
                      <div>
                        <span class="font-weight-bold">Discussion subject:</span>
                        {{$discussion->title}}
                      </div>
                      <div>
                        <span class="font-weight-bold">Posted:</span> {{$discussion->created_at->diffForHumans()}}
                      </div>
                    </td>
                    <td>
                      <div>
                        <span class="font-weight-bold">Total replies:</span> {{count($discussion->reply)}} 
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>

              @if(count($discussion->reply))
                @foreach($discussion->reply as $reply)
                  <table
                  class="table table-striped table-responsivelg table-bordered">
                  <tbody>
                    <tr>
                      <td class="author-col">
                        <div>by {{$reply->user->name}}</div>
                      </td>
                      <td class="post-col d-lg-flex justify-content-lg-between">
                        <div>
                          <span class="font-weight-bold">Post subject:</span>
                          {{$discussion->title}}
                        </div>
                        <div>
                          <span class="font-weight-bold">Replied:</span> {{$reply->created_at->diffForHumans()}}
                        </div>
                      </td>
                      <td>
                        @if(auth()->id() == $reply->user_id || auth()->id('is_admin') == 1)
                        <a href="{{route('reply.delete', $reply->id)}}" class="btn btn-danger"> delete</a>
                        @endif
                      </td>
                    </tr>
                    <tr>
                      <td>
                      </td>
                      <td>
                      <p>
                        {{$reply->desc}}
                      </p>
                      </td>
                      
                    </tr>
                  </tbody>
                  </table>
                @endforeach
              @else
                no replies to the discussion
              @endif
              </div>
          </div>
        </div>
      </div>

      
      <form action="{{route('discussion.reply', $discussion->id)}}" method = "post" class="mb-3">
        @csrf
        <div class="form-group">
          <label for="comment">Reply to this post</label>
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
      @if(!auth()->user())
      <div>
        <div class="d-lg-flex align-items-center mb-3">
          <form
            action=""
            class="form-inline d-block d-sm-flex mr-2 mb-3 mb-lg-0"
          >
            <div class="form-group mr-2 mb-3 mb-md-0">
              <label for="email" class="mr-2">Email:</label>
              <input
                type="email"
                class="form-control"
                placeholder="example@gmail.com"
                required
              />
            </div>

            <div class="form-group mr-2 mb-3 mb-md-0">
              <label for="password" class="mr-2">Password:</label>
              <input
                type="password"
                class="form-control"
                name="password"
                required
              />
            </div>

            <button class="btn btn-primary">Login</button>
          </form>
          <span class="mr-2">or...</span>
          <button class="btn btn-success">Create Account</button>
        </div>
      </div>
      <p class="small">
        <a href="#">Have you forgotten your account details?</a>
      </p>
      @endif
    </div>
@endsection