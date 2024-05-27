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
                                 <a class="btn btn-danger btn-sm"href="#"
                                 data-bs-toggle="modal"data-bs-target="#modalId-{{ $technology->id }}"><i
                                     class="fa-solid fa-trash-can"></i> Delete</a>


                             <!-- Modal Body -->
                             <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                             <div class="modal fade" id="modalId-{{ $technology->id }}" tabindex="-1"
                                 data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
                                 aria-labelledby="modalTitleId-{{ $technology->id }}" aria-hidden="true">
                                 <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm"
                                     role="document">
                                     <div class="modal-content">
                                         <div class="modal-header">
                                             <h5 class="modal-title text-dark" id="modalTitleId-{{ $technology->id }}">
                                                 Delete Type
                                             </h5>
                                             <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                 aria-label="Close"></button>
                                         </div>
                                         <div class="modal-body text-dark">Attention! You are deleting this technology,
                                             this action is irreversible. Do you want to continue?</div>
                                         <div class="modal-footer">
                                             <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                 back
                                             </button>
                                             <form action="{{ route('admin.technologies.destroy', $technology) }}" method="POST">
                                                 @csrf
                                                 @method('DELETE')
                                                 <button type="submit" class="btn btn-danger">Delete</button>
                                             </form>
                                         </div>
                                     </div>
                                 </div>
                             </div>
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
