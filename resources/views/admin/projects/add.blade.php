@extends('admin.app')

@section('user')
{{ $user->name }}
@endsection

@section('content')

<main>
    <div class="container-fluid">
        @include('admin.projects.header', ['text' => 'New Project'])
        <div class="card mb-4">
            <div class="card-header">
                <h4>
                    <i class="fas fa-plus-square"></i>
                    <span class="ml-2">New Project</span>
                    <div class="float-right">
                        <a class="btn btn-secondary btn-sm" href="{{ route('projects.index') }}">Back</a>
                    </div>
                </h4>
            </div>
            <div class="card-body">
                <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Project Name</label>
                        <input class="form-control" id="name" name="name" type="text" placeholder="Project Name" required />
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description" type="text" rows="6" placeholder="Description" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="location">Location</label>
                        <input class="form-control" id="location" name="location" type="text" placeholder="Location" required />
                    </div>
                    <div class="form-group">
                        <label for="date">Date</label>
                        <input class="form-control" id="date" name="date" type="date" required />
                    </div>
                    <div class="form-group">
                        <label for="images[]">Upload Images (Multiple)</label>
                        <input class="form-control-file" id="images[]" name="images[]" type="file" required multiple />
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary btn-block" type="submit">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

@endsection
