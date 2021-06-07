@extends('mahasiswa.layout')
@section('content')
<header id="header" class="top-head">
    <!-- Static navbar -->
    <nav class="navbar navbar-default">
       <div class="container-fluid">
          <div class="row">
             <div class="col-md-4 col-sm-12 left-rs">
                <div class="navbar-header">
                   <button type="button" id="top-menu" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                   </button>
                   <a href="{{url('index')}}" class="navbar-brand"><img src="a/images/logo.png" alt="" /></a>
                </div>
            
             </div>
             <div class="col-md-8 col-sm-12">
                <div class="right-nav">

                   <div class="login-sr">
                      <div class="login-signup">
                         <ul class="navbar-nav ml-auto">
                            <li class="nav-item dropdown">

                               <a id="navbarDropdown" class="right-arrow pull-right" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre><span class="caret"></span>
                                  {{ Auth::user()->name }}
                               </a>
                               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                  <a href="{{url('home')}}"> Profile</a>
                                  <a href="{{url('mahasiswa')}}"> College Data</a>
                                  
                                  <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                          document.getElementById('logout-form').submit();">
                                     {{ __('Logout') }}
                                  </a>
                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                     @csrf
                                  </form>

                               </div>
                            </li>
                         </ul>
                      </div>
                   </div>

                   <div class="help-r hidden-xs">
                      <div class="help-box">
                         <ul>
                            <li> <a data-toggle="modal" data-target="#myModal" href="#"> <span>Material</span> <img alt="" /> </a> </li>
                            <li> <a href="#"><img class="h-i" src="a/images/help-icon.png" alt="" /> Examples </a> </li>
                         </ul>
                      </div>
                   </div>
                  
                </div>
             </div>
          </div>
       </div>
       <!--/.container-fluid -->
    </nav>
 </header>
<head>
    <meta charset="UTF-8">
    <title>CODING LEARN APPLICATION </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--main css-->
    <link rel="stylesheet" href="a/css/style.css">

 </head>
 
 <div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
    <div class="pull-left mt-2">
        <h2>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2>
</div><br>
<div class="float-right my-2">
    <a class="btn btn-success" href="{{ route('mahasiswa.create') }}"> Input Mahasiswa</a>
        </div>
        <div class="float-left my-4">
        <form action="/mahasiswa/cari/" method="GET">
            <div class="input-group">
                <input type="text" name="keyword" class="form-control" placeholder="Search Name...">
                <button type="submit" class="btn btn-primary">
                    Search
            </div><p>
        </form>
</div>
</div>
        @if ($message = Session::get('success'))<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
    <table class="table table-bordered">
<tr>
    <th>Nim</th>
    <th>Nama</th>
    <th>Kelas</th>
    <th>Jurusan</th>
    <th>alamat</th>
    <th>email</th>
    <th width="280px">Action</th>
    </tr>
    @foreach ($mahasiswa as $mhs)
    <tr>
    <td>{{ $mhs ->nim }}</td>
    <td>{{ $mhs ->nama }}</td>
    <td>{{ $mhs ->kelas }}</td>
    <td>{{ $mhs ->jurusan }}</td>
    <td>{{ $mhs ->alamat }}</td>
    <td>{{ $mhs ->email }}</td>
    <td>
        <form action="{{ route('mahasiswa.destroy',['mahasiswa'=>$mhs->nim]) }}" method="POST">
    <a class="btn btn-info" href="{{ route('mahasiswa.show',$mhs->nim) }}">Show</a>
        <a class="btn btn-primary" href="{{ route('mahasiswa.edit',$mhs->nim) }}">Edit</a>
    @csrf
@method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
     @endforeach
    </table>

    <div class="d-flex">      
        {{$mahasiswa->links()}}
  </div>
@endsection