<a href="{{ route('worker.detail', $worker->username) }}">
    <div class="d-flex mb-4">
        <div class="flex-shrink">
            <img src="{{ $worker->user->getAvatar }}" class="avatar avatar-md rounded-circle me-3" alt="">
        </div>
        <div class="my-auto">
            <h6 class="mb-0 text-dark">{{ $worker->expertise }}</h6>
            <div class="d-flex">
                <p class="text-sm text-muted mb-0 me-2">{{ $worker->user->name }} &bull;</p>
                <p class="text-sm text-{{ levelColor($worker->experience) }} mb-0"> {{ $worker->experience }}</p>
            </div>
        </div>
    </div>
</a>