@extends('layouts.app')

@section('content')
<div class="text-center text-white">
  <h5>Apakah anda Yakin akan Keluar ? <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <b>Log Out</b>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form></h5>
</div>
@endsection
