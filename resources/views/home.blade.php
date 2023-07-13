@extends('layouts.app')

@section('content')
@if(Auth::user()->id_level == 1 )
<div class="text-center text-white">
  <h5>Hallo, {{ Auth::user()->name }} !!!</h5>
  <h5>Login Berhasil, silahkan menuju <a href="halaman_admin.php" style="color:white"><b>beranda</b></a></h5>
</div>
@else
<div class="text-center text-white">
<h5>Hallo, {{ Auth::user()->name }} !!!</h5>
  <h5>Login Berhasil, silahkan menuju <a href="home.php" style="color:white"><b>beranda</b></a></h5>
</div>
@endif
@endsection
