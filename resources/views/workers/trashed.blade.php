@extends('layout.main')

@section('content')
    <div class="m-2">
        <a href="{{ route('workers.index') }}" class="btn btn-primary">Back</a>
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
                <td>{{ $worker->name }}</td>
                <td>{{ $worker->surname }}</td>
                <td>{{ $worker->email }}</td>
                <td>{{ $worker->age }}</td>
                <td>
                    <a href="{{ route('workers.restore',$worker->id) }}" class="btn btn-warning m-1">Restore</a>
                    <form action="{{ route('workers.forceDelete',$worker->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger m-1">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
