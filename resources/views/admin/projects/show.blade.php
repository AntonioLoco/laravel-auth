@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-8">
                @if (session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
                <h1 class="text-center mt-3">{{ $project->title }}</h1>
                <div class="d-flex justify-content-between mt-3">
                    <h5>{{ $project->created_at }}</h5>
                    <p>{{ $project->slug }}</p>
                </div>
                <p class="mt-3">{{ $project->description }}</p>
            </div>
        </div>
    </div>
@endsection
