<a href="{{ route('worker.detail', $worker->username) }}">
    <div class="card card-hover rounded-md border-0">
        <div class="card-body text-center">
            <img src="{{ asset($worker->user->getAvatar) }}" class="avatar avatar-xl rounded-circle mb-2 border p-1" alt="">
            <br>
            <p class="text-{{ levelColor($worker->experience) }} rounded-md text-sm mb-2">{{ $worker->experience }}</p>
            <h6 class="mb-0 text-darkblue fw-600">{{ $worker->expertise }}</h6>
            <p class="text-sm text-darkblue mb-2">{{ $worker->user->name }}</p>

            @foreach ($worker->availability as $e)
            <span class="me-1 text-xs mb-1 badge badge-light-secondary rounded-md">{{ $e->name }}</span>
            @endforeach

            <p class="text-xs text-darkblue my-2"><i class="bi bi-geo-alt" aria-hidden="true"></i> {{ $worker->kota->name }}, {{ $worker->provinsi->name }}</p>
            
            <div class="d-none">
                <a href="{{ $worker->facebook }}" class="text-darkblue me-3"><i class="bi bi-facebook"></i></a>
                <a href="{{ $worker->twitter }}" class="text-darkblue me-3"><i class="bi bi-twitter"></i></a>
                <a href="{{ $worker->instagram }}" class="text-darkblue me-3"><i class="bi bi-instagram"></i></a>
                <a href="{{ $worker->linkedin }}" class="text-darkblue"><i class="bi bi-linkedin"></i></a>
            </div>
            
            <div class="d-grid mt-3">
                <a href="#" class="btn btn-outline-dark btn-lg rounded-md">Contact</a>
            </div>
        </div>
    </div>
</a>