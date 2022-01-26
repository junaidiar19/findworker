<div class="bg-main">
    <div class="container py-4">
        <div class="text-center mb-3">
            <h6>Dapatkan tim terbaik untuk project Anda</h6>
        </div>

        <div class="card border-0 rounded-md mb-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3 mb-3 mb-md-0">
                        <div class="custom-search">
                            <i class="fa fa-pencil"></i>
                            <input type="text" class="form-control" placeholder="Rencana Project Anda">
                        </div>
                    </div>
                    <div class="col-md-3 mb-3 mb-md-0">
                        <select name="" class="form-control select2">
                            <option value="">-Project Category-</option>
                            @foreach ($projectcategory as $e)
                                <option value="{{ $e }}">{{ $e }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-2 mb-3 mb-md-0">
                        <select name="" class="form-control select2">
                            <option value="">-Team Category-</option>
                            @foreach ($teamcategory as $e)
                                <option value="{{ $e }}">{{ $e }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-2 mb-3 mb-md-0">
                        <select name="" class="form-control select2">
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
            </div>
        </div>

        @foreach ($services as $e)
        <h6 class="text-darkblue mb-3">{{ $e->name }}</h6>

        <div class="row mb-3">
            @foreach ($workers as $worker)
            <div class="col-md-3">
                <x-card-worker :worker=$worker />
            </div>
            @endforeach
        </div>

        @endforeach
        
    </div>
</div>
