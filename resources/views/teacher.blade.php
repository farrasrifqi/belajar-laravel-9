@extends('layouts.mainlayout')

@section('title', 'Teacher')

@section('content')

<h1>Ini halaman "{{ $judul }}"</h1>
<h2>TeacherList</h2>

    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
                @foreach ($teacherList as $data)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->name }}</td>
                    </tr>
                @endforeach
        </tbody>
    </table>

@endsection