<img src="{{ asset($worker->user->getAvatar) }}" class="avatar avatar-xl rounded-circle mb-2 border p-1" alt="">
<br>
<p class="badge badge-light-secondary text-uppercase mb-2">{{ $worker->experience }}</p>
<h6 class="mb-0 text-darkblue fw-bold">{{ $worker->user->name }}</h6>
<p class="text-sm text-darkblue mb-2">{{ $worker->expertise }}</p>
<p class="text-sm text-muted">{{ $worker->about }}</p>

<a href="{{ $worker->facebook }}" class="text-darkblue me-3"><i class="bi bi-facebook"></i></a>
<a href="{{ $worker->twitter }}" class="text-darkblue me-3"><i class="bi bi-twitter"></i></a>
<a href="{{ $worker->instagram }}" class="text-darkblue me-3"><i class="bi bi-instagram"></i></a>
<a href="{{ $worker->linkedin }}" class="text-darkblue"><i class="bi bi-linkedin"></i></a>

<div class="d-grid mt-3">
    <a href="#" class="btn btn-outline-dark btn-lg rounded-md">Contact</a>
</div>

