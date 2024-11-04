@extends('layout.main')

@section('content')
    <div class="m-2">
        <a href="{{ route('workers.create') }}" class="btn btn-info">Create</a>
    </div>
    <table class="table m-3">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Surname</th>
            <th scope="col">Email</th>
            <th scope="col">Age</th>
            <th scope="col">Buttons</th>
        </tr>
        </thead>
        <tbody>
        @foreach($workers as $worker)
            <tr>
                <th scope="row">{{ $worker->id }}</th>
                <td><a href="{{ route('workers.show',$worker->id) }}">{{ $worker->name }}</a></td>
                <td><a href="{{ route('workers.show',$worker->id) }}">{{ $worker->surname }}</a></td>
                <td><a href="{{ route('workers.show',$worker->id) }}">{{ $worker->email }}</a></td>
                <td><a href="{{ route('workers.show',$worker->id) }}">{{ $worker->age }}</a></td>
                <td>
                    <a href="{{ route('workers.edit',$worker->id) }}" class="btn btn-warning">Edit</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
