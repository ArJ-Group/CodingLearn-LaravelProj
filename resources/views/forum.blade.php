@extends('layouts.app')

@section('content')
<div class="container">
  <nav class="breadcrumb">
    <a href="" class="breadcrumb-item active"> Home</a>
    @if(auth()->id('is_admin') == 1)
    <a href="{{route('admin_page')}}" class="breadcrumb-item active"> To Admin page</a>
    @endif
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
          <table class="table table-striped table-responsivelg table-bordered">
            <thead class="thead-light">
              <th width='2000px'>Description</th>
            </thead>
            <tbody>
              <tr>
                <td>
                  <h5>{!!$category->desc!!}</h5>
                </td>
              </tr>
            </tbody>
          </table>

          @endforeach
          @else
          <div>
            <h1>No Forum Categories found</h1>
          </div>
      @endif
        </div>
      </div>
    </div>
  </div>
</div>
@endsection