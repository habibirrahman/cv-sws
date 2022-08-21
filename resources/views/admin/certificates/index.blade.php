@extends('admin.app')

@section('user')
{{ $user->name }}
@endsection

@section('content')

<main>
    <div class="container-fluid">
        @include('admin.certificates.header', ['text' => 'Data Certificates'])
        <div class="card mb-4">
            <div class="card-header">
                <h4>
                    <i class="fas fa-table"></i>
                    <span class="ml-2">Data Certificates</span>
                    <div class="float-right">
                        <a class="btn btn-primary" href="{{ route('certificates.add') }}">New Certificate</a>
                    </div>
                </h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Details</th>
                                <th>Certificate Image</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Details</th>
                                <th>Certificate Image</th>
                                <th></th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($certificates as $certificate)
                            <tr>
                                <th>{{ $certificate->id }}</th>
                                <td>
                                    <div class="card h-100">
                                        <div class="card-header"><b>{{ $certificate->title }}</b></div>
                                        <div class="card-body">
                                            @if ($certificate->notary)
                                            <div>Notary: <b>{{ $certificate->notary }}</b></div>
                                            @endif
                                            @if ($certificate->number)
                                            <div>Number: <b>{{ $certificate->number }}</b></div>
                                            @endif
                                            @if ($certificate->date)
                                            <div>Date: <b>{{ $certificate->dateFormatted }}</b></div>
                                            @endif
                                            @if ($certificate->city)
                                            <div>City / Class: <b>{{ $certificate->city }} / {{ $certificate->class_of_city }}</b></div>
                                            @endif
                                            @if ($certificate->certificate_of_domicile)
                                            <div>Certificate of Domicile: <b>{{ $certificate->certificate_of_domicile }}</b></div>
                                            @endif
                                            @if ($certificate->published_by)
                                            <div>Published By: <b>{{ $certificate->published_by }}</b></div>
                                            @endif
                                            @if ($certificate->registration_number)
                                            <div>Registration Number: <b>{{ $certificate->registration_number }}</b></div>
                                            @endif
                                            @if ($certificate->tax_number)
                                            <div>Tax Number: <b>{{ $certificate->tax_number }}</b></div>
                                            @endif
                                            @if ($certificate->tax_letter)
                                            <div>Tax Letter: <b>{{ $certificate->tax_letter }}</b></div>
                                            @endif
                                            @if ($certificate->business_license)
                                            <div>Business License: <b>{{ $certificate->business_license }}</b></div>
                                            @endif
                                        </div>
                                    </div>
                                </td>
                                <td width="250">
                                    @if (count($certificate->images) > 0)
                                    <img class="rounded-lg" src="{{ asset('assets/certificates/'.$certificate->images[0]->url) }}" alt="{{ $certificate->title }}">
                                    @endif
                                </td>
                                <td class="text-center">
                                    <form action="{{ route('certificates.destroy', $certificate->id) }}" method="POST">
                                        <a title="Edit" class="btn btn-warning btn-sm m-1" href="{{ route('certificates.edit', $certificate->id) }}">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button title="Delete" type="submit" class="btn btn-danger btn-sm m-1" onclick="return confirm('Are you sure you want to delete the {{ $certificate->title }} certificate?')">Delete</button>
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
