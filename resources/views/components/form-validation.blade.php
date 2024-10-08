@if ($errors->any())
    <div class="alert alert-danger col-sm-12 " role="alert">
        <div class="container">
            @foreach ($errors->all() as $error)
            <li><i class="bi bi-exclamation-triangle"></i>{{ $error }}</li>
            @endforeach
        </div>
    </div>
@endif

@if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <div class="container">
            <strong></strong> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
@endif
