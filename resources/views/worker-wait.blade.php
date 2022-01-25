@extends('layouts.user')
@section('content')

<div class="container py-4">
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Expertise</th>
                    <th>Approval</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($workers as $d)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $d->user->name }}</td>
                    <td>{{ $d->expertise }}</td>
                    <td>
                        @if (@$d->actived_at)
                        <button class="btn btn-success disabled">Approved</button>
                        @else
                        <a href="{{ request()->fullUrlWithQuery(['approve' => true, 'id' => $d->id]) }}" class="btn btn-danger">Approve</a>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection