@push('after-style')
    <style>
        .table>:not(caption)>*>* {
            border-bottom-width: 0;
        }
    </style>
<link href="{{ asset('vendor/bootstrap-tokenfield/bootstrap-tokenfield.min.css') }}" rel="stylesheet">
@endpush

@push('after-script')
<script src="{{ asset('vendor/bootstrap-tokenfield/bootstrap-tokenfield.min.js') }}"></script>
<script>
    $('#tokenfield').tokenfield()
</script>
<script>
    function experienceClick(name) {
        let input = $("#experience-input");
        let btn = $("#exp-button-" + name);

        if(name !== input.val()) {
            let old = $("#exp-button-" + input.val());
            old.removeClass('btn-orange');
            old.addClass('btn-outline-orange');
        }

        btn.removeClass('btn-outline-orange');
        btn.addClass('btn-orange');
        input.val(name);
    }
</script>
@if ($worker->experience)
<script>
    $("#exp-button-{{ $worker->experience }}").addClass('btn-orange').removeClass('btn-outline-orange');
</script>
@endif
@endpush

<br>

<form action="{{ @$url }}" method="POST" onsubmit="submitForm('add-button')">
@csrf

    <div class="mb-5">
        <p class="line-between fw-semibold mb-5">Experience</p>

        @error('experience')
        <div class="alert alert-danger py-2 text-sm">
            <i class="bi bi-info-circle"></i>
            {{ $message }}
        </div>
        @enderror

        <div class="row">
            @foreach ($experiences as $e)
            <div class="col-3 d-grid">
                <div onclick="experienceClick('{{ $e->name }}')" id="exp-button-{{ $e->name }}" class="btn btn-outline-orange pointer-event">{{ $e->name }}</div>
            </div>
            @endforeach
        </div>
    </div>
    <input type="hidden" id="experience-input" value="{{ $worker->experience }}" name="experience">

    <div class="mb-4">
        <p class="line-between fw-semibold mb-5">Available to</p>
        <div class="row justify-content-center">
            <div class="col-md-9">
                <table class="table text-sm">
                @foreach ($availabilities as $e)
                @php
                    $checked = '';
                    foreach($aval as $i) {
                        if($i == $e->id) {
                            $checked = 'checked';
                        }
                    }
                @endphp
                <tr>
                    <td><input type="checkbox" 
                        name="available[]" 
                        class="me-3 checkbox" 
                        id="available-{{ $e->id }}"
                        value="{{ $e->id }}"
                        {{ $checked }}
                    ></td>
                    <td><label class="me-4" for="available-{{ $e->id }}">{{ $e->name }}</label></td>
                    <td class="text-muted">{{ $e->description }}</td>
                </tr>
                @endforeach
                </table>
            </div>
        </div>
    </div>

    <div class="mb-5">
        <p class="line-between fw-semibold mb-5">Skills and Expertise</p>
        <input type="text" class="form-control @error('skills') is-invalid @enderror" id="tokenfield" name="skills" value="{{ $worker->skills }}" placeholder="Ex. React, Laravel, PHP, Java" required>
        @error('skills')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="mb-5">
        <p class="line-between fw-semibold mb-5">Salary Range</p>

        <div class="d-flex">
            <input type="text" class="form-control" id="form-input-1" value="{{ $worker->salary_start }}" onkeyup="rupiahFormat(this.value, '1', 'Rp. ')" name="salary_start" placeholder="Rp. 0" required>
            <span class="mx-3 mt-1">-</span>
            <input type="text" class="form-control" id="form-input-2" value="{{ $worker->salary_end }}" onkeyup="rupiahFormat(this.value, '2', 'Rp. ')" name="salary_end" placeholder="Rp. 0" required>
        </div>

    </div>

    <div class="mb-4">
        <p class="line-between fw-semibold mb-5">Social Media</p>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for=""><i class="bi bi-linkedin me-1"></i>Linkedin</label>
                    <input type="text" class="form-control" name="linkedin" value="{{ $worker->linkedin }}" placeholder="Ex. https://www.linkedin.com/">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for=""><i class="bi bi-twitter me-1"></i>Twitter</label>
                    <input type="text" class="form-control" name="twitter" value="{{ $worker->twitter }}" placeholder="Ex. https://www.twitter.com/">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for=""><i class="bi bi-instagram me-1"></i>Instagram</label>
                    <input type="text" class="form-control" name="instagram" value="{{ $worker->instagram }}" placeholder="Ex. https://www.instagram.com/">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for=""><i class="bi bi-facebook me-1"></i>Facebook</label>
                    <input type="text" class="form-control" name="facebook" value="{{ $worker->facebook }}" placeholder="Ex. https://www.facebook.com/">
                </div>
            </div>

        </div>
    </div>

    <div class="text-end mt-4">
        <button class="btn btn-orange px-4" id="add-button">{{ $button }}</button>
    </div>

</form>

@push('after-script')
    @include('partials.processing')
    @include('partials.rupiah-format')
@endpush