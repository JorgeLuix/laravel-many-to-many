
@extends('layouts.admin')

@section('content')
    <h1>Type list</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Created at</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($types as $type)
                <tr>
                    <th scope="row">{{ $type->id }}</th>
                    <td>{{ $type->name }}</td>
                    <td>{{ $type->created_at }}</td>
                    <td>
                        <a class="text-black" href="{{ route('admin.types.show', $type->slug) }}">Show</a>
                        <a class="text-black" href="#">Edit</a>
                        <a class="text-black" href="#">Delete</a>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
