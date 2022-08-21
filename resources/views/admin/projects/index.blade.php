@extends('admin.app')

@section('user')
{{ $user->name }}
@endsection

@section('content')

<main>
    <div class="container-fluid">
        @include('admin.projects.header', ['text' => 'Data Projects'])
        <div class="card mb-4">
            <div class="card-header">
                <h4>
                    <i class="fas fa-table"></i>
                    <span class="ml-2">Data Projects</span>
                    <div class="float-right">
                        <a class="btn btn-primary" href="{{ route('projects.add') }}">New Project</a>
                    </div>
                </h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Location</th>
                                <th>Date</th>
                                <th>Image</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Location</th>
                                <th>Date</th>
                                <th>Image</th>
                                <th></th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($projects as $project)
                            <tr>
                                <th>{{ $project->id }}</th>
                                <td>{{ $project->name }}</td>
                                <td>{{ $project->description }}</td>
                                <td>{{ $project->location }}</td>
                                <td>{{ $project->dateFormatted }}</td>
                                <td>{{ count($project->images) }}</td>
                                <td class="text-center">
                                    <form action="{{ route('projects.destroy', $project->id) }}" method="POST">
                                        <a title="Edit" class="btn btn-warning btn-sm m-1" href="{{ route('projects.edit', $project->id) }}">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button title="Delete" type="submit" class="btn btn-danger btn-sm m-1" onclick="return confirm('Are you sure you want to delete the {{ $project->name }} project?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection
