@extends('layouts.mainlayout')

@section('title', 'Students')

@section('content') 
<h1>ini halaman student</h1>
<h3>Student List</h3>

<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>name</th>
            <th>gender</th>
            <th>nis</th>
            <th>class id</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($studentList as $data)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $data->name }}</td>
                <td>{{ $data->gender }}</td>
                <td>{{ $data->nis }}</td>
                <td>{{ $data->class_id }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection