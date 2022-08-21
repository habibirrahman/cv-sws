<h1 class="mt-4">Certificates</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">{{ $text }}</li>
</ol>
@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif
@if (session('failed'))
<div class="alert alert-danger">
    {{ session('failed') }}
</div>
@endif
