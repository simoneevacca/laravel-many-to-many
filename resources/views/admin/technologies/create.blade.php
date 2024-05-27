@extends('layouts.admin')
@section('content')

<a class="btn btn-secondary" href="{{ route('admin.technologies.index') }}">BACK</a>

    @include('admin.partials.validation-errors')
    <form action="{{ route('admin.technologies.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label text-white">Technology</label>
            <input type="text" class="form-control" name="name" id="name" aria-describedby="helpId" placeholder=""
                value="{{ old('name') }}" />
        </div>
        <button type="submit" class="btn btn-primary">
            Create
        </button>

    </form>
@endsection
