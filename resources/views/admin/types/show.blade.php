@extends('layouts.admin')
@section('content')
    <h1>Type</h1>
    <p>The type name is: {{ $type->name }}</p>
    @foreach ($type->projects as $project)
        <p>{{ $project->name }}</p>
    @endforeach
@endsection
