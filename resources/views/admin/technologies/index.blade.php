@extends('layouts.admin')
@section('content')
    <div class="container">
        <a href="{{ route('admin.technologies.create') }}" class="btn btn-primary my-4">Add new project</a>


        <div class="table-responsive">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Technology</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($technologies as $technology)
                        <tr class="">
                            <td scope="row">{{ $technology->id }}</td>
                            <td>{{ $technology->name }}</td>
                            <td>
                                <a class="btn btn-warning btn-sm" href="{{ route('admin.technologies.edit', $technology) }}"><i
                                    class="fa-solid fa-pen-to-square fa-fw"></i> Edit</a>

                            <!-- Modal trigger button -->
                            {{-- <a class="btn btn-danger btn-sm"href="#"
                                data-bs-toggle="modal"data-bs-target="#modalId-{{ $type->id }}"><i
                                    class="fa-solid fa-trash-can"></i> Delete</a> --}}
                            </td>
                        </tr>

                    @empty

                        <td scope="row">No records</td>
                    @endforelse
                    <tr class="">

                    </tr>
                </tbody>
            </table>
        </div>

    </div>
@endsection
