<div class="collapse py-3 px-3 rounded bg-neutral" id="collapseCompanyCapability" aria-labelledby="headingCompanyCapability" data-parent="#accordionHome">
    <form class="text-sm" action="{{ route('save.company-capability') }}" method="POST" class="php-email-form" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Company Capability" value="{{ $data->title }}">
        </div>
        <div class="row">
            <div class="col-12 col-md-4">
                <div class="form-group">
                    <label for="text-1">Company Capability Text 1</label>
                    <textarea class="form-control" name="text-1" id="text-1" rows="4">{{ $data->text1 }}</textarea>
                </div>
                <div class="form-group">
                    <label for="subtitle-1">Company Capability Subtitle 1</label>
                    <input type="text" class="form-control" name="subtitle-1" id="subtitle-1" placeholder="Subtitle 1" value="{{ $data->subtitle1 }}">
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="form-group">
                    <label for="text-2">Company Capability Text 2</label>
                    <textarea class="form-control" name="text-2" id="text-2" rows="4">{{ $data->text2 }}</textarea>
                </div>
                <div class="form-group">
                    <label for="subtitle-2">Company Capability Subtitle 2</label>
                    <input type="text" class="form-control" name="subtitle-2" id="subtitle-2" placeholder="Subtitle 2" value="{{ $data->subtitle2 }}">
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="form-group">
                    <label for="text-3">Company Capability Text 3</label>
                    <textarea class="form-control" name="text-3" id="text-3" rows="4">{{ $data->text3 }}</textarea>
                </div>
                <div class="form-group">
                    <label for="subtitle-3">Company Capability Subtitle 3</label>
                    <input type="text" class="form-control" name="subtitle-3" id="subtitle-3" placeholder="Subtitle 3" value="{{ $data->subtitle3 }}">
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-block btn-primary">Update Company Capability</button>
    </form>
</div>
