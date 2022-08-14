<div class="collapse show py-3 px-3 rounded bg-neutral" id="collapseProfile" aria-labelledby="headingProfile" data-parent="#accordionHome">
    <form class="text-sm" action="{{ route('save.profile') }}" method="POST" class="php-email-form" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Profile" value="{{ $data->title }}">
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="form-group">
                    <label for="text-1">Profile Text 1</label>
                    <textarea class="form-control" name="text-1" id="text-1" rows="6">{{ $data->text1 }}</textarea>
                </div>
                <div class="form-group">
                    <label for="text-2">Profile Text 2</label>
                    <textarea class="form-control" name="text-2" id="text-2" rows="6">{{ $data->text2 }}</textarea>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="mb-2">
                    <img class="rounded-lg" src="{{ asset('assets/img/'.$data->image->url) }}" alt="{{ $data->image->identifier }}">
                </div>
                <div class="form-group">
                    <label for="image-1">Profile Image</label>
                    <input type="file" class="form-control-file" id="image-1" name="image-1">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="text-3">Profile Text 3</label>
            <textarea class="form-control" name="text-3" id="text-3" rows="4">{{ $data->text3 }}</textarea>
        </div>
        <div class="form-group">
            <label for="text-4">Profile Text 4</label>
            <textarea class="form-control" name="text-4" id="text-4" rows="4">{{ $data->text4 }}</textarea>
        </div>
        <button type="submit" class="btn btn-block btn-primary">Update Profile</button>
    </form>
</div>
