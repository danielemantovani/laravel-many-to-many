@extends('layouts.admin')

@section('content')
<div class="container p-5">
    <h2 class="text-center mb-5">{{$project->title}}</h2>
    <p>{{$project->content}}</p>
    <p>{{$project->type?->technology}}</p>
    <p>{{$project->slug}}</p>
    <ul>
        @forelse ($project->technologies as $technology)
        <li>
            {{ $technology->name }}
        </li>
        @empty
        <li>
            Devi ancora inserire una tecnolgia
        </li>
        @endforelse
    </ul>
</div>
@endsection