@extends('admin.app')

@section('user')
{{ $user->name }}
@endsection

@section('content')

<main>
    <div class="container-fluid">
        @include('admin.certificates.header', ['text' => 'Edit Certificate'])
        <div class="card mb-4">
            <div class="card-header">
                <h4>
                    <i class="fas fa-plus-square"></i>
                    <span class="ml-2">Edit Certificate</span>
                    <div class="float-right">
                        <a class="btn btn-secondary btn-sm" href="{{ route('certificates.index') }}">Back</a>
                    </div>
                </h4>
            </div>
            <div class="card-body">
                <form action="{{ route('certificates.update', $certificate->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="title">Certificates Title</label>
                        <input class="form-control" id="title" name="title" type="text" placeholder="Certificates Title" required value="{{ $certificate->title }}" />
                    </div>
                    <div class="form-group">
                        <label for="notary">Notary Name</label>
                        <input class="form-control" id="notary" name="notary" type="text" placeholder="Notary Name" value="{{ $certificate->notary }}" />
                    </div>
                    <div class="form-group">
                        <label for="number">Number</label>
                        <input class="form-control" id="number" name="number" type="text" placeholder="Number" value="{{ $certificate->number }}" />
                    </div>
                    <div class="form-group">
                        <label for="date">Date</label>
                        <input class="form-control" id="date" name="date" type="date" value="{{ $certificate->date }}" />
                    </div>
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="city">City</label>
                            <input class="form-control" id="city" name="city" type="text" placeholder="City" value="{{ $certificate->city }}" />
                        </div>
                        <div class="form-group col-6">
                            <label for="class_of_city">Class</label>
                            <input class="form-control" id="class_of_city" name="class_of_city" type="text" placeholder="Class" value="{{ $certificate->class_of_city }}" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="certificate_of_domicile">Certificate of Domicile</label>
                        <input class="form-control" id="certificate_of_domicile" name="certificate_of_domicile" type="text" placeholder="Certificate of Domicile" value="{{ $certificate->certificate_of_domicile }}" />
                    </div>
                    <div class="form-group">
                        <label for="published_by">Published By</label>
                        <input class="form-control" id="published_by" name="published_by" type="text" placeholder="Published By" value="{{ $certificate->published_by }}" />
                    </div>
                    <div class="form-group">
                        <label for="registration_number">Registration Number</label>
                        <input class="form-control" id="registration_number" name="registration_number" type="text" placeholder="Registration Number" value="{{ $certificate->registration_number }}" />
                    </div>
                    <div class="form-group">
                        <label for="tax_number">Tax Number</label>
                        <input class="form-control" id="tax_number" name="tax_number" type="text" placeholder="Tax Number" value="{{ $certificate->tax_number }}" />
                    </div>
                    <div class="form-group">
                        <label for="tax_letter">Tax Letter</label>
                        <input class="form-control" id="tax_letter" name="tax_letter" type="text" placeholder="Tax Letter" value="{{ $certificate->tax_letter }}" />
                    </div>
                    <div class="form-group">
                        <label for="business_license">Business License</label>
                        <input class="form-control" id="business_license" name="business_license" type="text" placeholder="Business License" value="{{ $certificate->business_license }}" />
                    </div>
                    <div class="d-flex flex-wrap mb-2">
                        @foreach ($certificate->images as $image)
                        <div class="col-12 col-md-6 d-flex align-items-center justify-content-center p-2">
                            <img class="rounded-lg" src="{{ asset('assets/certificates/'.$image->url) }}" alt="{{ $image->url }}">
                        </div>
                        @endforeach
                        <div class="form-group col-12 col-md-6">
                            <label for="image">Change Certificate Image</label>
                            <input class="form-control-file" id="image" name="image" type="file" />
                        </div>
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
