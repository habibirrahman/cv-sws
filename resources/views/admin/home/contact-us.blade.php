<div class="collapse rounded card" id="collapseContactUs" aria-labelledby="headingContactUs" data-parent="#accordionHome">
    <div class="card-header">
        <h4>
            <i class="fas fa-home"></i>
            <span class="ml-2">Contact Us</span>
        </h4>
    </div>
    <div class="card-body">
        <form class="text-sm" action="{{ route('save.contact-us') }}" method="POST" class="php-email-form" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Contact Us" value="{{ $data->title }}">
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" name="address-1" id="address" placeholder="Address 1" value="{{ $data->address1 }}">
                <input type="text" class="form-control" name="address-2" id="address" placeholder="Address 2" value="{{ $data->address2 }}">
                <input type="text" class="form-control" name="address-3" id="address" placeholder="Address 3" value="{{ $data->address3 }}">
                <input type="text" class="form-control" name="address-4" id="address" placeholder="Address 4" value="{{ $data->address4 }}">
                <input type="text" class="form-control" name="address-5" id="address" placeholder="Address 5" value="{{ $data->address5 }}">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email-1" id="email" placeholder="Email 1" value="{{ $data->email1 }}">
                <input type="email" class="form-control" name="email-2" id="email" placeholder="Email 2" value="{{ $data->email2 }}">
                <input type="email" class="form-control" name="email-3" id="email" placeholder="Email 3" value="{{ $data->email3 }}">
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" class="form-control" name="phone-1" id="phone" placeholder="Phone 1" value="{{ $data->phone1 }}">
                <input type="text" class="form-control" name="phone-2" id="phone" placeholder="Phone 2" value="{{ $data->phone2 }}">
                <input type="text" class="form-control" name="phone-3" id="phone" placeholder="Phone 3" value="{{ $data->phone3 }}">
                <input type="text" class="form-control" name="phone-4" id="phone" placeholder="Phone 4" value="{{ $data->phone4 }}">
                <input type="text" class="form-control" name="phone-5" id="phone" placeholder="Phone 5" value="{{ $data->phone5 }}">
            </div>
            <button type="submit" class="btn btn-block btn-primary">Save Contact</button>
        </form>
    </div>
</div>
