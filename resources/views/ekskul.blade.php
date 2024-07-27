@extends('layouts.mainlayout')

@section('title', 'Ekskul')

@section('content')

    <h1>Ini halaman Ekskul</h1>
    <h2>Ekskul List</h2>

    <table class="table">
        <thead>
            <th>No.</th>
            <th>Name</th>
            <th>Student</th>
        </thead>
        <tbody>
            @foreach ($ekskulList as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->name }}</td>
                    <td>
                        @foreach ($data->students as $item)
                            - {{ $item->name }} <br>
                        @endforeach
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
