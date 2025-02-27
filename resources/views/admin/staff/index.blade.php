@extends('admin.layouts.admin')
@section('content')
    <div class="content-wrapper">

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="d-inline">Staffs</h1>
                        <a class="btn btn-info ml-5" href="{{ route('admin.staff.create') }}">Create New</a>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Staffs</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($staffs as $staff)
                            <tr data-widget="expandable-table" aria-expanded="false">
                                <td>{{ $staff->id }}</td>
                                <td>{{ $staff->name }}</td>
                                <td>{{ $staff->email }}</td>
                                <td>
                                    @if ($staff->image)
                                        <img src="{{ asset('storage/' . $staff->image) }}" alt="{{ $staff->title }}"
                                            class="img-thumbnail" style="width: 80px" />
                                    @endif
                                </td>
                                <td class="d-flex">
                                    <a href="{{ route('admin.staff.edit', $staff) }}" onclick="event.stopPropagation()"
                                        class="btn btn-warning mr-1">
                                        <span class="d-none d-md-flex">Edit</span>
                                        <span class="d-md-none d-flex"><i class="fa fa-pen"></i></span>
                                    </a>

                                    <form action="{{ route('admin.staff.destroy', $staff) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button onclick="event.stopPropagation()" class="btn btn-danger" type="submit">
                                            <span class="d-none d-md-flex">Delete</span>
                                            <span class="d-md-none d-flex"><i class="fa fa-trash"></i></span>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            <tr class="expandable-body">
                                <td colspan="5">
                                    <p class="text-break">{{ $staff->description }}</p>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </section>

    </div>
@endsection
