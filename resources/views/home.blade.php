@extends('layouts.mainlayout')

@section('title', 'Home')

@section('content') 
<div class="container mt-5">
    <h1>Ini adalah halamn home</h1>
    <h2>Selamat datang, {{ $name }} Anda adalah {{ $role }}</h2>

    {{-- *if and else if --}}
    {{-- @if ($role == 'admin')
            <a href="#">Masuk ke halaman admin</a>
        @elseif ($role == 'staff')
            <a href="#">Masuk ke halaman gudang</a>
        @else
            <a href="#">Masuk ke halaman ini</a>
        @endif --}}
    {{-- *end if and else if --}}

    {{-- *switch case --}}
    {{-- @switch($role)
            @case($role == 'admin')
                <a href="">Masuk ke halaman admin</a>
            @break

            @case($role == 'staff')
                <a href="">Masuk ke halaman gudang</a>
            @break

            @default
                <a href="#">Masuk ke halaman ini</a>
        @endswitch --}}
    {{-- *end switch case --}}

    {{-- *loop directive --}}
    {{-- @for ($i = 0; $i < 5; $i++)
            {{$i}} <br>
        @endfor --}}

    <table class="table">
        <tr>
            <th>No</th>
            <th>Name</th>
        </tr>
        @foreach ($buah as $data)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $data }}</td>
            </tr>
        @endforeach
    </table>

    {{-- *end loop directive --}}




</div>

@endsection
