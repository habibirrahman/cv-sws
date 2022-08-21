@extends('admin.app')

@section('user')
{{ $user->name }}
@endsection

@section('content')

<main>
    <div class="container-fluid">
        @include('admin.projects.header', ['text' => 'Edit Project'])
        <div class="card mb-4">
            <div class="card-header">
                <h4>
                    <i class="fas fa-plus-square"></i>
                    <span class="ml-2">Edit Project</span>
                    <div class="float-right">
                        <a class="btn btn-secondary btn-sm" href="{{ route('projects.index') }}">Back</a>
                    </div>
                </h4>
            </div>
            <div class="card-body">
                <form action="{{ route('projects.update', $project->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Project Name</label>
                        <input class="form-control" id="name" name="name" type="text" placeholder="Project Name" required value="{{ $project->name }}" />
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description" type="text" rows="6" placeholder="Description" required>{{ $project->description }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="location">Location</label>
                        <input class="form-control" id="location" name="location" type="text" placeholder="Location" required value="{{ $project->location }}" />
                    </div>
                    <div class="form-group">
                        <label for="date">Date</label>
                        <input class="form-control" id="date" name="date" type="date" required value="{{ $project->date }}" />
                    </div>
                    <div class="d-flex flex-wrap mb-2">
                        @foreach ($project->images as $image)
                        <div class="col-12 col-md-4 d-flex align-items-center justify-content-center p-2">
                            <img class="rounded-lg" src="{{ asset('assets/projects/'.$image->url) }}" alt="{{ $image->url }}">
                        </div>
                        @endforeach
                    </div>
                    <div class="form-group">
                        <label for="images[]">Change All Images (Multiple)</label>
                        <input class="form-control-file" id="images[]" name="images[]" type="file" multiple />
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary btn-block" type="submit">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

@endsection
