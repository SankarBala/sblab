@extends('admin.layouts.admin')
@section('content')
    <div class="content-wrapper">

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="d-inline">Products</h1>
                        <a class="btn btn-info ml-5" href="{{ route('admin.product.create') }}">Create New</a>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Products</li>
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
                            <th>Title</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr data-widget="expandable-table" aria-expanded="false">
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->name }}</td>
                                <td>
                                    @if ($product->image)
                                        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->title }}"
                                            class="img-thumbnail" style="width: 80px" />
                                    @endif
                                </td>
                                <td>{{ $product->published ? '✔' : '❌' }}</td>
                                <td class="d-flex">
                                    <a href="{{ route('admin.product.edit', $product) }}" onclick="event.stopPropagation()"
                                        class="btn btn-warning mr-1">
                                        <span class="d-none d-md-flex">Edit</span>
                                        <span class="d-md-none d-flex"><i class="fa fa-pen"></i></span>
                                    </a>

                                    <form action="{{ route('admin.product.destroy', $product) }}" method="POST">
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
                                    <p class="text-break">{{ $product->description }}</p>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="row">
                    <div class="col-12">
                        {{ $products->links() }}
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection
