<div class="collapse show rounded card" id="collapseCompanyOverview" aria-labelledby="headingCompanyOverview" data-parent="#accordionAbout">
    <div class="card-header">
        <h4>
            <i class="fas fa-id-card"></i>
            <span class="ml-2">Company Overview</span>
        </h4>
    </div>
    <div class="card-body">
        <form class="text-sm" action="{{ route('save.company-overview') }}" method="POST" class="php-email-form" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Profile" value="{{ $data->title }}">
            </div>
            <div class="mb-2">
                <img class="rounded-lg" src="{{ asset('assets/img/'.$data->image->url) }}" alt="{{ $data->image->identifier }}">
            </div>
            <div class="form-group">
                <label for="image-1">Company Overview Image</label>
                <input type="file" class="form-control-file" id="image-1" name="image-1">
            </div>
            <div class="form-group">
                <label for="text-1">Company Overview Text 1</label>
                <textarea class="form-control" name="text-1" id="text-1" rows="4">{{ $data->text1 }}</textarea>
            </div>
            <div class="form-group">
                <label for="text-2">Company Overview Text 2</label>
                <textarea class="form-control" name="text-2" id="text-2" rows="4">{{ $data->text2 }}</textarea>
            </div>
            <div class="form-group">
                <label for="text-3">Company Overview Text 3</label>
                <textarea class="form-control" name="text-3" id="text-3" rows="4">{{ $data->text3 }}</textarea>
            </div>
            <div class="form-group">
                <label for="text-4">Company Overview Text 4</label>
                <textarea class="form-control" name="text-4" id="text-4" rows="4">{{ $data->text4 }}</textarea>
            </div>
            <div class="form-group">
                <label for="text-5">Company Overview Text 5</label>
                <textarea class="form-control" name="text-5" id="text-5" rows="4">{{ $data->text5 }}</textarea>
            </div>
            <div class="form-group">
                <label for="text-6">Company Overview Text 6</label>
                <textarea class="form-control" name="text-6" id="text-6" rows="4">{{ $data->text6 }}</textarea>
            </div>
            <div class="form-group">
                <label for="text-7">Company Overview Text 7</label>
                <textarea class="form-control" name="text-7" id="text-7" rows="4">{{ $data->text7 }}</textarea>
            </div>
            <div class="form-group">
                <label for="text-8">Company Overview Text 8</label>
                <textarea class="form-control" name="text-8" id="text-8" rows="4">{{ $data->text8 }}</textarea>
            </div>
            <button type="submit" class="btn btn-block btn-primary">Save Company Overview</button>
        </form>
    </div>
</div>
