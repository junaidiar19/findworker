@extends('user.profile.setup.head')
@section('subcontent')

@push('after-style')
    <style>
        .table>:not(caption)>*>* {
            border-bottom-width: 0;
        }
    </style>
@endpush

@push('after-script')
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
@endpush

<br>

<form action="" method="POST" onsubmit="submitForm()">
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
    <input type="hidden" id="experience-input" name="experience">

    <div class="mb-4">
        <p class="line-between fw-semibold mb-5">Available to</p>
        <div class="row justify-content-center">
            <div class="col-md-9">
                <table class="table text-sm">
                @foreach ($availabilities as $e)
                <tr>
                    <td><input type="checkbox" name="available[]" class="me-3 checkbox" id="available-{{ $e->id }}" value="{{ $e->id }}"></td>
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
        <input type="text" class="form-control @error('skills') is-invalid @enderror" id="tokenfield" name="skills" placeholder="Ex. React, Laravel, PHP, Java" required>
        @error('skills')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="mb-4">
        <p class="line-between fw-semibold mb-5">Social Media</p>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for=""><i class="bi bi-linkedin me-1"></i>Linkedin</label>
                    <input type="text" class="form-control" name="linkedin" placeholder="Ex. Username">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for=""><i class="bi bi-twitter me-1"></i>Twitter</label>
                    <input type="text" class="form-control" name="twitter" placeholder="Ex. Username">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for=""><i class="bi bi-instagram me-1"></i>Instagram</label>
                    <input type="text" class="form-control" name="instagram" placeholder="Ex. Username">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for=""><i class="bi bi-facebook me-1"></i>Facebook</label>
                    <input type="text" class="form-control" name="facebook" placeholder="Ex. Username">
                </div>
            </div>

        </div>
    </div>

    <div class="text-end mt-4">
        <button class="btn btn-orange px-4" id="submit-button">Submit</button>
    </div>

</form>

@push('after-script')
    @include('partials.processing')
@endpush

@endsection