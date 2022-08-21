@extends('admin.app')

@section('user')
{{ $user->name }}
@endsection

@section('content')

<main>
    <div class="container-fluid">
        @include('admin.certificates.header', ['text' => 'New Certificate'])
        <div class="card mb-4">
            <div class="card-header">
                <h4>
                    <i class="fas fa-plus-square"></i>
                    <span class="ml-2">New Certificate</span>
                    <div class="float-right">
                        <a class="btn btn-secondary btn-sm" href="{{ route('certificates.index') }}">Back</a>
                    </div>
                </h4>
            </div>
            <div class="card-body">
                <form action="{{ route('certificates.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title">Certificates Title</label>
                        <input class="form-control" id="title" name="title" type="text" placeholder="Certificates Title" required />
                    </div>
                    <div class="form-group">
                        <label for="notary">Notary Name</label>
                        <input class="form-control" id="notary" name="notary" type="text" placeholder="Notary Name" />
                    </div>
                    <div class="form-group">
                        <label for="number">Number</label>
                        <input class="form-control" id="number" name="number" type="text" placeholder="Number" />
                    </div>
                    <div class="form-group">
                        <label for="date">Date</label>
                        <input class="form-control" id="date" name="date" type="date" />
                    </div>
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="city">City</label>
                            <input class="form-control" id="city" name="city" type="text" placeholder="City" />
                        </div>
                        <div class="form-group col-6">
                            <label for="class_of_city">Class</label>
                            <input class="form-control" id="class_of_city" name="class_of_city" type="text" placeholder="Class" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="certificate_of_domicile">Certificate of Domicile</label>
                        <input class="form-control" id="certificate_of_domicile" name="certificate_of_domicile" type="text" placeholder="Certificate of Domicile" />
                    </div>
                    <div class="form-group">
                        <label for="published_by">Published By</label>
                        <input class="form-control" id="published_by" name="published_by" type="text" placeholder="Published By" />
                    </div>
                    <div class="form-group">
                        <label for="registration_number">Registration Number</label>
                        <input class="form-control" id="registration_number" name="registration_number" type="text" placeholder="Registration Number" />
                    </div>
                    <div class="form-group">
                        <label for="tax_number">Tax Number</label>
                        <input class="form-control" id="tax_number" name="tax_number" type="text" placeholder="Tax Number" />
                    </div>
                    <div class="form-group">
                        <label for="tax_letter">Tax Letter</label>
                        <input class="form-control" id="tax_letter" name="tax_letter" type="text" placeholder="Tax Letter" />
                    </div>
                    <div class="form-group">
                        <label for="business_license">Business License</label>
                        <input class="form-control" id="business_license" name="business_license" type="text" placeholder="Business License" />
                    </div>
                    <div class="form-group">
                        <label for="image">Upload Certificate Image</label>
                        <input class="form-control-file" id="image" name="image" type="file" required />
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
