@extends('layouts.admin')

@section('content')
    <h1>{{ $project->name }}</h1>
    <h6>Tecnology: {{$project->tecnology ? $project->tecnology->name : 'Senza tecnologia'}} </h6>
    <img class="card-img-top" src="{{ Vite::asset($project['image']) }}" alt="">
    <p>{!! $project->description !!}</p>
    @if ($project->types && count($project->types) > 0)
    <div>
        @foreach ($project->types as $type)
            <a href="{{ route('admin.types.show', $type->slug) }}"
                class="badge rounded-pill text-bg-info">{{ $type->name }}</a>
        @endforeach
    </div>
@endif
    <a class="btn btn-primary" href="{{route('admin.projects.index') }}">Go to Back</a>
@endsection
