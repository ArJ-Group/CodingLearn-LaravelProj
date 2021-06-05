@extends('layouts.app')
@section('content')
<div class="container">
      <nav class="breadcrumb">
      <a href="#" class="breadcrumb-item active"> Home</a>
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

      <form action="{{route('forum.store')}}" class="mb-3" method="POST">
      @csrf
      <div class="form-group">
          <label class="col-lg-2 control-label">Forum Title</label>
          <div class="col-lg-10">
          <input name="title" class="form-control" value=""/>
          </div>
        </div>
        <div class="form-group">
            <label class="col-lg-2 control-label">Forum Category</label>
            <div class="col-lg-10">
            <select name="category_id" class="form-control">
                @foreach ($categories as $category)
                <option value="{{$category->id}}">{{"$category->title"}}</option>
                @endforeach
            </select>
            </div>
        </div>

        <div class="form-group">
          <label class="col-lg-2 control-label">Forum description</label>
          <div class="col-lg-10">
          <textarea name="desc" id="editor1" class="form-control" cols="30" rows="5"></textarea>
          </div>
        </div>

        <input type="number" value="{{auth()->id()}}" name="user_id" hidden>

        <div class="form-group">
          <div class="col-lg-offset-2 col-lg-10">
            <button type="submit" class="btn btn-success">Add Forum</button>
            <a href="/dashboard/home" class="btn btn-danger">Cancel</a>
          </div>
        </div>
      </form>
    </div>
  </section>
</div>
@endsection