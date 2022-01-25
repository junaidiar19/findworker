<div class="bg-main">
    <div class="container py-4">
        <div class="text-center mb-3">
            <h6>Dapatkan tim terbaik untuk project Anda</h6>
        </div>

        <div class="card border-0 rounded-md">
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
                            <option value="">-Category Project-</option>
                            @foreach ($categoryproject as $e)
                                <option value="{{ $e }}">{{ $e }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-3 mb-3 mb-md-0">
                        <select name="" class="form-control select2">
                            <option value="">-Category Team-</option>
                            @foreach ($categoryteam as $e)
                                <option value="{{ $e }}">{{ $e }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-3 mb-3 mb-md-0">
                        <button class="btn btn-orange py-2">Generate</button>
                    </div>
                </div>
            </div>
        </div>

        
    </div>
</div>
