@extends('user.profile.setup.head')
@section('subcontent')

@push('after-style')
    <style>
        .table>:not(caption)>*>* {
            border-bottom-width: 0;
        }
    </style>
@endpush

<br>

<form action="" method="POST">
@csrf

    <div class="mb-5">
        <p class="line-between fw-semibold mb-5">Experience</p>
        <div class="row">
            @foreach ($experiences as $e)
            <div class="col-3 d-grid">
                <a href="" class="btn btn-outline-orange">{{ $e->name }}</a>
            </div>
            @endforeach
        </div>
    </div>

    <div class="mb-4">
        <p class="line-between fw-semibold mb-5">Available to</p>
        <div class="row justify-content-center">
            <div class="col-md-9">
                <table class="table text-sm">
                @foreach ($availabilities as $e)
                <tr>
                    <td><input type="checkbox" name="available[]" class="me-3 checkbox" id="available-{{ $e->id }}"></td>
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
        <input type="text" class="form-control" name="skills[]" placeholder="Ex. React, Laravel, PHP, Java">
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


@endsection