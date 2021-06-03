@extends('layouts.app')

@section('content')
<div class="container">
      <nav class="breadcrumb">
        <a href="" class="breadcrumb-item active"> Home</a>
      </nav>
      <div class="row">
        <div class="col-lg-8">
          <div class="row">
          @if(count($categories)>0)
            @foreach ($categories as $category)
            <div class="col-lg-12">
              <!-- second section  -->
              <a href="{{route('category.overview', $category->id)}}">
                <h4 class="text-white bg-info mb-0 p-4 rounded-top">
                  {!!$category->title!!}
                </h4>
              </a>
            </div>
            <div class="col-lg-12">
              <h5 class="text-black">{!!$category->desc!!}</h5>
            </div>
            @endforeach
          @else
          <div>
            <h1>No Forum Categories found</h1>
          </div>
          @endif
        </div>
      </div>
    </div>
    @endsection