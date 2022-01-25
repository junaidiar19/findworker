@forelse ($workers as $worker)
<div class="card rounded-lg card-hover">
    <div class="card-body">

        <div class="row">
            <div class="col-md-6 mb-3">
                <div class="d-flex">
                    <div class="flex-shrink">
                        <img src="{{ $worker->user->getAvatar }}" class="avatar avatar-lg rounded-circle me-3 border p-1" alt="">
                    </div>
                    <div class="my-auto">
                        <h6 class="mb-0 text-dark">{{ $worker->expertise }}</h6>
                        <div class="d-flex">
                            <p class="text-sm text-muted mb-0 me-3">{{ $worker->user->name }}</p>
                            <p class="text-sm text-muted mb-0"> <i class="bi bi-geo-alt" aria-hidden="true"></i> {{ $worker->kota->name }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 text-md-end text-left mb-3">
                <span class="p-2 rounded-md me-1 badge badge-light-danger">{{ $worker->experience }}</span>
            </div>
        </div>
        

        <p class="text-gray text-sm">{{ $worker->about }}</p>

        <div class="row">
            <div class="col-md-6 mb-3">
                <p class="fw-semibold text-dark text-sm mb-2">Availability</p>

                @foreach ($worker->availability as $e)
                <span class="p-2 rounded-md me-1 badge badge-light-primary">{{ $e->name }}</span>
                @endforeach
            </div>
            <div class="col-md-6 mb-3">
                <p class="fw-semibold text-dark text-sm mb-2">Salary Range</p>
                <div class="d-flex text-sm text-dark">
                    <span>{{ rpSingkat($worker->salary_start) }}</span>
                    <span class="mx-2">-</span>
                    <span>{{ rpSingkat($worker->salary_end) }}</span>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-9 mb-3 mb-md-0">
                <p class="fw-semibold text-dark text-sm mb-2">Skills</p>
                @foreach (explode(',', $worker->skills) as $e)
                <span class="p-2 rounded-md me-1 badge badge-light-secondary">{{ $e }}</span>
                @endforeach
            </div>
            <div class="col-md-3 text-end">
                <button data-bs-toggle="modal" data-bs-target="#hire-modal" data-url="{{ route('worker.hire', $worker->username) }}" class="btn btn-orange rounded-md text-sm mt-3 shadow"><i class="bi bi-send-check me-1"></i> Hire Me</button>
            </div>
        </div>
    </div>
</div>
@empty
    
@endforelse