@extends('user.profile.setup.head')
@section('subcontent')

<form action="" method="POST" enctype="multipart/form-data" onsubmit="submitForm()">
@csrf
<div class="row">
    <div class="col-md-5">
        <label>Foto Profile</label>
        <input type="file" name="avatar" class="dropify" data-max-file-size-preview="5M" data-allowed-file-extensions="jpg png jpeg" />
        <p class="text-sm mt-2">* Only: jpg, png, jpeg | max: 5MB</p>
        @error('avatar')
            <div class="text-danger">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="col-md-7">
        <div class="form-group">
            <label for="">Username <span>*</span></label>
            <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" placeholder="Ex. johndoe" required>
            @error('username')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="">Nama Lengkap <span>*</span></label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', auth()->user()->name) }}" placeholder="Ex. John Doe" required>
            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="">Anda adalah seorang? <span>*</span></label>
            <input type="text" class="form-control @error('expertise') is-invalid @enderror" name="expertise" value="{{ old('expertise') }}" placeholder="Ex. Web Developer" required>
            @error('expertise')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="">Email <span>*</span></label>
            <input type="text" class="form-control" value="{{ auth()->user()->email }}" disabled required>
        </div>

        <div class="form-group">
            <label for="">No. Hp <span>*</span></label>
            <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" placeholder="Ex. 08xxxx" required>
            @error('phone')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="">Link Portofolio <sup class="text-sm text-muted fw-normal">(opsional)</sup></label>
            <input type="text" class="form-control" name="portofolio_link" value="{{ old('portofolio_link') }}">
        </div>

        <div class="form-group">
            <label for="">Provinsi <span>*</span></label>
            <select class="form-control" name="provinsi" onchange="cityCheck(this.value)" required>
                <option value="">-Silakan Pilih-</option>
                @foreach ($provinsi as $e)
                    <option value="{{ $e->id }}">{{ $e->name }}</option>
                @endforeach
            </select>
            @error('provinsi')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="">Kota <span>*</span></label>
            <select class="form-control" name="kota" id="city-option" required>
                <option value="">-Silakan Pilih-</option>
            </select>
            @error('kota')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="">Tulis sesuatu tentang diri Anda <span>*</span></label>
            <textarea name="about" class="form-control" cols="30" rows="4"></textarea>
            @error('kota')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="text-end mt-4">
            <button class="btn btn-orange px-4" id="submit-button">Submit</button>
        </div>

    </div>
</div>
</form>

@push('after-script')
    @include('partials.city-check')
    @include('partials.processing')
@endpush

@endsection