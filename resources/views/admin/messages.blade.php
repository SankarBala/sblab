@extends('admin.layouts.admin')
@section('content')
    <div class="content-wrapper">

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="d-inline">Messages</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Messages</li>
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
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($messages as $message)
                            <tr data-widget="expandable-table" aria-expanded="false">
                                <td>{{ $message->id }}</td>
                                <td>{{ $message->name }}</td>
                                <td>{{ $message->email }}</td>
                                <td class="d-flex">
                                    <form action="{{ route('admin.message.update', $message) }}" method="POST">
                                        @method('PUT')
                                        @csrf
                                        @if ($message->seen)
                                            <input name="seen" type="hidden" value="0">
                                            <button onclick="event.stopPropagation()" class="btn btn-secondary mr-2"
                                                type="submit">
                                                <span class="d-none d-md-flex">Unseen</span>
                                                <span class="d-md-none d-flex"><i class="fa fa-eye-slash"></i></span>
                                            </button>
                                        @else
                                            <input name="seen" type="hidden" value="1">
                                            <button onclick="event.stopPropagation()" class="btn btn-info mr-2"
                                                type="submit">
                                                <span class="d-none d-md-flex">Seen</span>
                                                <span class="d-md-none d-flex"><i class="fa fa-eye"></i></span>
                                            </button>
                                        @endif
                                    </form>

                                    <form action="{{ route('admin.message.destroy', $message) }}" method="POST">
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
                                    <p><span class="text-info font-weight-bold">Message: </span> {{ $message->message }}</p>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="row">
                    <div class="col-12">
                        {{ $messages->links() }}
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection
