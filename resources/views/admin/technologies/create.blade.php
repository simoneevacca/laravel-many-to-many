@extends('layouts.admin')
@section('content')
    <form action="{{ route('admin.technologies.store') }}" method="post"></form>
    <div class="mb-3">
        <label class="text-white" for="name" class="form-label">Technology</label>
        <input type="text" class="form-control" name="name" id="name" aria-describedby="helpId" placeholder="" />
    </div>
@endsection



