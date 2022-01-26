<div class="bg-main">
    <div class="container py-4">
        <div class="text-center mb-3">
            <h6>Dapatkan tim terbaik untuk project Anda</h6>
        </div>

        <div class="card border-0 rounded-md mb-3 shadow-md">
            <div class="card-body">
                <form wire:submit.prevent="scan">
                <div class="row">
                    <div class="col-md-3 mb-3 mb-md-0">
                        <div class="custom-search">
                            <i class="fa fa-pencil"></i>
                            <input type="text" class="form-control" wire:model="projectName" placeholder="Rencana Project Anda" required>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3 mb-md-0">
                        <select wire:model="category" class="form-control" required>
                            <option value="">-Project Category-</option>
                            @foreach ($projectcategory as $e)
                                <option value="{{ $e }}">{{ $e }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-2 mb-3 mb-md-0">
                        <select wire:model="team" class="form-control" required>
                            <option value="">-Team Category-</option>
                            @foreach ($teamcategory as $e)
                                <option value="{{ $e }}">{{ $e }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-2 mb-3 mb-md-0">
                        <select wire:model="ability" class="form-control select2" required>
                            <option value="">-Team Ability-</option>
                            @foreach ($teamability as $e)
                                <option value="{{ $e }}">{{ $e }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-2 mb-3 mb-md-0">
                        <div class="d-grid">
                            <button class="btn btn-orange py-2"><i class="fa fa-search me-1"></i> Cari</button>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>

        <div class="text-center">
            <div wire:loading class="py-5" wire:target="scan">
                <img src="{{ asset('img/loader/Preloader-3/64x64.gif') }}" alt="">
            </div>
        </div>

        <div wire:loading.remove wire:target="scan">
            @if ($scan)
            <div class="alert alert-primary">
                <div class="row">
                    <div class="col-md-6">
                        <p class="mb-0">Menampilkan <b>{{ number_format($workers['data']->count()) }}</b> Worker dari <b>{{ $workers['services']->count() }}</b> Bidang Keahlian</p>
                    </div>
                    <div class="col-md-6 text-end">
                        <p class="mb-0"><i class="bi bi-currency-dollar me-1"></i>Estimasi Biaya: <b>{{ rpSingkat($workers['costs']) }}</b></p>
                    </div>
                </div>
            </div>
            @endif

            @if ($scan)

            @foreach ($workers['services'] as $e)
            <h6 class="text-darkblue mb-3">{{ $e['name'] }}</h6>

            <div class="row mb-3">
                @foreach ($workers['data'] as $worker)
                @if ($worker->service_id == $e['id'])
                <div class="col-md-3">
                    <x-card-worker :worker=$worker />
                </div>
                @endif
                @endforeach
            </div>

            @endforeach

            @else
                <div class="row justify-content-center mb-2">
                    <div class="col-md-3 text-center">
                        <img src="{{ asset('img/vector/undraw_team_page_re_cffb.svg') }}" class="img-fluid" alt="">
                    </div>
                </div>
            @endif
        </div>

        
        
    </div>
</div>
