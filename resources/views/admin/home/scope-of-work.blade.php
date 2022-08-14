<div class="collapse py-3 px-3 rounded bg-neutral" id="collapseScope" aria-labelledby="headingScopeOfWork" data-parent="#accordionHome">
    <form class="text-sm" action="{{ route('save.scope-of-work') }}" method="POST" class="php-email-form" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Scope of Work" value="{{ $data->title }}">
        </div>
        <div class="row">
            <div class="col-12 col-md-4">
                <div class="mb-2">
                    <img class="rounded-lg" src="{{ asset('assets/img/'.$data->image1->url) }}" alt="{{ $data->image1->identifier }}">
                </div>
                <div class="form-group">
                    <label for="image-1">Scope of Work Image 1</label>
                    <input type="file" class="form-control-file" id="image-1" name="image-1">
                </div>
                <div class="form-group">
                    <label for="subtitle-1">Scope of Work Subtitle 1</label>
                    <input type="text" class="form-control" name="subtitle-1" id="subtitle-1" placeholder="Subtitle 1" value="{{ $data->subtitle1 }}">
                </div>
                <div class="form-group">
                    <label for="text-1">Scope of Work Text 1</label>
                    <textarea class="form-control" name="text-1" id="text-1" rows="4">{{ $data->text1 }}</textarea>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="mb-2">
                    <img class="rounded-lg" src="{{ asset('assets/img/'.$data->image2->url) }}" alt="{{ $data->image2->identifier }}">
                </div>
                <div class="form-group">
                    <label for="image-2">Scope of Work Image 2</label>
                    <input type="file" class="form-control-file" id="image-2" name="image-2">
                </div>
                <div class="form-group">
                    <label for="subtitle-2">Scope of Work Subtitle 2</label>
                    <input type="text" class="form-control" name="subtitle-2" id="subtitle-2" placeholder="Subtitle 2" value="{{ $data->subtitle2 }}">
                </div>
                <div class="form-group">
                    <label for="text-2">Scope of Work Text 2</label>
                    <textarea class="form-control" name="text-2" id="text-2" rows="4">{{ $data->text2 }}</textarea>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="mb-2">
                    <img class="rounded-lg" src="{{ asset('assets/img/'.$data->image3->url) }}" alt="{{ $data->image3->identifier }}">
                </div>
                <div class="form-group">
                    <label for="image-3">Scope of Work Image 3</label>
                    <input type="file" class="form-control-file" id="image-3" name="image-3">
                </div>
                <div class="form-group">
                    <label for="subtitle-3">Scope of Work Subtitle 3</label>
                    <input type="text" class="form-control" name="subtitle-3" id="subtitle-3" placeholder="Subtitle 3" value="{{ $data->subtitle3 }}">
                </div>
                <div class="form-group">
                    <label for="text-3">Scope of Work Text 3</label>
                    <textarea class="form-control" name="text-3" id="text-3" rows="4">{{ $data->text3 }}</textarea>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-block btn-primary">Update Scope of Work</button>
    </form>
</div>
