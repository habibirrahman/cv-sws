<div class="collapse rounded card" id="collapseOrganizationChart" aria-labelledby="headingOrganizationChart" data-parent="#accordionAbout">
    <div class="card-header">
        <h4>
            <i class="fas fa-id-card"></i>
            <span class="ml-2">Organization Chart</span>
        </h4>
    </div>
    <div class="card-body">
        <form class="text-sm" action="{{ route('save.organization-chart') }}" method="POST" class="php-email-form" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Profile" value="{{ $data->title }}">
            </div>
            <div class="form-group">
                <label for="text-1">Organization Chart Text 1</label>
                <textarea class="form-control" name="text-1" id="text-1" rows="4">{{ $data->text1 }}</textarea>
            </div>
            <div class="form-group">
                <label for="text-2">Organization Chart Text 2</label>
                <textarea class="form-control" name="text-2" id="text-2" rows="4">{{ $data->text2 }}</textarea>
            </div>
            <hr />
            <div class="form-group">
                <label for="text-3">Organization Chart Text 3</label>
                <textarea class="form-control" name="text-3" id="text-3" rows="4">{{ $data->text3 }}</textarea>
            </div>
            <div class="form-group">
                <label for="text-4">Organization Chart Text 4</label>
                <textarea class="form-control" name="text-4" id="text-4" rows="4">{{ $data->text4 }}</textarea>
            </div>
            <button type="submit" class="btn btn-block btn-primary">Save Organization Chart</button>
        </form>
    </div>
</div>
