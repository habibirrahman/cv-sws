<div class="collapse py-3 px-3 rounded bg-neutral" id="collapseVisionMission" aria-labelledby="headingVisionMission" data-parent="#accordionAbout">
    <form class="text-sm" action="{{ route('save.vision-mission') }}" method="POST" class="php-email-form" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Profile" value="{{ $data->title }}">
        </div>
        <div class="form-group">
            <label for="text">Vision Mission Text</label>
            <textarea class="form-control" name="text" id="text" rows="4">{{ $data->text }}</textarea>
        </div>
        <div class="mb-2">
            <img class="rounded-lg" src="{{ asset('assets/img/'.$data->image->url) }}" alt="{{ $data->image->identifier }}">
        </div>
        <div class="form-group">
            <label for="image-1">Vision Mission Image</label>
            <input type="file" class="form-control-file" id="image-1" name="image-1">
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="form-group">
                    <label for="subtitle-1">Vision Mission Subtitle 1</label>
                    <input type="text" class="form-control" name="subtitle-1" id="subtitle-1" placeholder="Vision" value="{{ $data->subtitle1 }}">
                </div>
                <div class="form-group">
                    <label for="text-1">Vision Mission Text 1</label>
                    <textarea class="form-control" name="text-1" id="text-1" rows="4">{{ $data->text1 }}</textarea>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="form-group">
                    <label for="subtitle-2">Vision Mission Subtitle 2</label>
                    <input type="text" class="form-control" name="subtitle-2" id="subtitle-2" placeholder="Mission" value="{{ $data->subtitle2 }}">
                </div>
                <div class="form-group">
                    <label for="text-2">Vision Mission Text 2</label>
                    <textarea class="form-control" name="text-2" id="text-2" rows="4">{{ $data->text2 }}</textarea>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-block btn-primary">Update Vision Mission</button>
    </form>
</div>
