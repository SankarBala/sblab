@extends('admin.layouts.admin')
@section('content')
    <div class="content-wrapper">

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="d-inline">Edit Product</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.product.index') }}">Product</a></li>
                            <li class="breadcrumb-item active">Edit</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <form id="quickForms" action="{{ route('admin.product.update', $product) }}" method="POST"
                                enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-8 col-lg-9">
                                            <div class="form-group">
                                                <label for="name">Name (Required)</label>
                                                <input type="text" name="name" class="form-control" id="name"
                                                    placeholder="Write name here"
                                                    value="{{ old('name', $product->name) }}" />
                                                @error('name')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-lg-3">
                                            <div class="form-group">
                                                <label for="price">Price</label>
                                                <input type="number" name="price" class="form-control" id="price"
                                                    placeholder="Write price here"
                                                    value="{{ old('price', $product->price) }}" />
                                                @error('price')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-lg-9">
                                            <div class="form-group">
                                                <label for="description">Product Description</label>
                                                <textarea id="summernote" name="description" placeholder="Write description here.">{{ $product->description }}</textarea>
                                                @error('description')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="short_description">Short Description (Optional)</label>
                                                <textarea name="short_description" class="form-control" id="short_description"
                                                    placeholder="Write Short description here." rows="4">{{ old('short_description', $product->short_description) }}</textarea>
                                                @error('short_description')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="tags">Tags (Comma Separated)</label>
                                                @include('admin.partials.tag-input', [
                                                    'name' => 'tags',
                                                    'tags' => json_encode($product->tags->pluck('name')),
                                                ])
                                                @error('tags')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-lg-3">

                                            <div class="form-group">
                                                <label for="division">Division</label>
                                                <div class="">
                                                    <select class="form-control" name="division">
                                                        @foreach ($divisions as $division)
                                                            <option value="{{ $division->id }}"
                                                                {{ $division->id == $product->division_id ? 'selected' : '' }}>
                                                                {{ $division->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                @error('division')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>


                                            <div class="form-group">
                                                <label for="answer">Categories</label>
                                                <div class="category_input_wrapper">
                                                    @include('admin.partials.category-select', [
                                                        'categories' => $categories,
                                                        'selectedCategories' => $product->categories->pluck('id')->toArray(),
                                                        'depth' => 5,
                                                    ])
                                                </div>
                                                @error('categories')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="answer">Image (Optional)</label>
                                                <x-image-picker name="image" accept="image/*"
                                                    src="{{ $product->image }}" />
                                                @error('image')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-end">
                                        <button type="submit" class="btn btn-secondary mx-2" name="published"
                                            value="0">Draft</button>
                                        <button type="submit" class="btn btn-success" name="published"
                                            value="1">Publish</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}">

    <style>
        .note-editor.note-frame .note-editing-area .note-editable {
            min-height: 300px;
        }
    </style>
@endpush

@push('scripts')
    <script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>

    <script>
        $(function() {
            $('#summernote').summernote()
        })
    </script>
@endpush
