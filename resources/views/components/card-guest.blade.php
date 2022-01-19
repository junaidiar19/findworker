<div class="row justify-content-center mt-3">
    <div class="{{ $col ?? 'col-md-6' }} text-center">
        <img src="{{ asset($vector) }}" class="img-fluid h-200 mb-3" alt="">
        <h6>{{ $title }}</h6>
        <p class="text-muted text-sm">{{ $description }}</p>

        @if (!$worker)
            <a href="{{ route('user.setup.worker') }}" class="btn btn-outline-orange">Daftar Sebagai Worker <i class="bi bi-arrow-right-short"></i></a>
        @endif
    </div>
</div>