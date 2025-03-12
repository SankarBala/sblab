@extends('admin.layouts.admin')
@section('content')
    <div class="content-wrapper">

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6 col-md-4">
                        <h1 class="d-inline">Articles</h1>
                        <a class="btn btn-info ml-5" href="{{ route('admin.article.create') }}">Create New</a>
                    </div>
                    <div class="mt-2 col-sm-6 col-md-4">
                        <form action="{{ route('admin.article.index') }}" method="GET">
                            <div class="input-group">
                                <input type="search" class="form-control" placeholder="Search products..."
                                    aria-label="Search products" aria-describedby="button-search" name="search"
                                    value="{{ request()->search }}" />
                                <div class="input-group-append">
                                    <button class="btn btn-info" type="submit" id="button-search">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <ol class="breadcrumb mt-2 float-sm-left float-md-right float-md-left">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Articles</li>
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
                            <th>Price</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($articles as $article)
                            <tr data-widget="expandable-table" aria-expanded="false">
                                <td>{{ $article->id }}</td>
                                <td>{{ $article->name }}</td>
                                <td>
                                    @if ($article->image)
                                        <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}"
                                            class="img-thumbnail" style="width: 80px" />
                                    @endif
                                </td>
                                {{-- <td>{{ $article->published ? '✔' : '❌' }}</td> --}}
                                <td>{{ $article->price }}</td>
                                <td class="d-flex">
                                    <a href="{{ route('admin.article.edit', $article) }}" onclick="event.stopPropagation()"
                                        class="btn btn-warning mr-1">
                                        <span class="d-none d-md-flex">Edit</span>
                                        <span class="d-md-none d-flex"><i class="fa fa-pen"></i></span>
                                    </a>

                                    <form action="{{ route('admin.article.destroy', $article) }}" method="POST">
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
                                <td colspan="5" class="">
                                    <div class="row"></div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="row">
                    <div class="col-12">
                        {{ $articles->links() }}
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection
