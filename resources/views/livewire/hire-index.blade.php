<div class="bg-main">
    <div class="container py-4">

        <div class="card rounded-md border-0 mb-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3 mb-3 mb-md-0">
                        <div class="custom-search">
                            <i class="fa fa-search"></i>
                            <input type="text" class="form-control" placeholder="Ex. Web Developer, UI/UX Designer">
                        </div>
                    </div>
                    <div class="col-md-3 mb-3 mb-md-0">
                        <select name="" class="form-control select2">
                            <option value="">-Lokasi-</option>
                            @foreach ($kota as $e)
                                <option value="{{ $e->id }}">{{ $e->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-3 mb-3 mb-md-0">
                        <select name="" class="form-control">
                            <option value="">-Ready For-</option>
                            @foreach ($availability as $e)
                                <option value="{{ $e->id }}">{{ $e->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-3 mb-3 mb-md-0">
                        <select name="" class="form-control">
                            <option value="">-Experience Level-</option>
                            @foreach ($experiences as $e)
                                <option value="{{ $e->name }}">{{ $e->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                
            </div>
        </div>

        <div class="row">
            <div class="col-md-3 d-none">
                <div class="card border-0 rounded-md sticky">
                    <div class="card-body">
                        <h6 class="mb-4">Ready for</h6>
                        @foreach ($availability as $e)
                        <label for="available-{{ $loop->iteration }}" class="checkbox-wrap checkbox-orange">{{ $e->name }}
                            <input type="checkbox" id="available-{{ $loop->iteration }}">
                            <span class="checkmark"></span>
                        </label>
                        @endforeach
    
                        <br>
    
                        <h6 class="mb-4">Experience Level</h6>
                        @foreach ($experiences as $e)
                        <label for="experience-{{ $loop->iteration }}" class="checkbox-wrap checkbox-orange">{{ $e->name }}
                            <input type="checkbox" id="experience-{{ $loop->iteration }}">
                            <span class="checkmark"></span>
                        </label>
                        @endforeach
                    </div>
                </div>

            </div>
            <div class="col-md-12">

                <p class="text-muted text-sm">Showing {{ $workers->total() }} Results</p>

                @if ($workers->total() > 0)
                <div class="row mb-5">
                    @foreach ($workers as $worker)
                    <div class="col-md-3">
                        <x-card-worker :worker=$worker />
                    </div>
                    @endforeach
                </div>

                {{ $workers->links() }}
                @else
                    {{-- empty result --}}
                @endif
            </div>
        </div>
    </div>

    @push('after-script')
    @include('modals.hire-modal')
    <script>
        $(".select2").select2({
            theme: "bootstrap-5",
        });
    </script>
    @endpush

</div>
