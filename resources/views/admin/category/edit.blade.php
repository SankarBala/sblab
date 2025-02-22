@extends('admin.layouts.admin')
@section('content')
    <div class="content-wrapper">

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="d-inline">Update Category</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.faq.index') }}">Category</a></li>
                            <li class="breadcrumb-item active">Update</li>
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
                            <form id="quickForms" action="{{ route('admin.category.update', $category) }}" method="POST"
                                enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="question">Name (Required)</label>
                                                <input type="text" name="name" class="form-control" id="name"
                                                    placeholder="Write Section name here"
                                                    value="{{ old('name', $category->name) }}" />
                                                @error('name')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="parent_category">Parent Category</label>
                                                <select name="parent_category" class="form-control" id="parent_category"
                                                    value="2">
                                                    <option value="0">Primary Category</option>
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}"
                                                            selected={{ $category->id == $category->parent_id }}>
                                                            {{ $category->name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('parent_category')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-lg-9">
                                            <div class="form-group">
                                                <label for="answer">Description (Optional)</label>
                                                <textarea name="description" class="form-control" placeholder="Write description here." rows="6">{{ old('description', $category->description) }}</textarea>
                                                @error('description')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <h5 class="{{ $category->active ? 'text-success' : 'text-secondary' }}">
                                                {{ $category->active ? 'Active' : 'Inactive' }}</h5>
                                        </div>
                                        <div class="col-md-4 col-lg-3">
                                            <div class="form-group">
                                                <label for="image">Image (Optional)</label>
                                                <x-image-picker name="image" src="{{ $category->image }}"
                                                    accept="image/*" />
                                                @error('image')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>


                                    <div class="d-flex justify-content-end mt-2">
                                        <button type="submit" class="btn btn-secondary mx-2" name="active"
                                            value="0">Draft
                                        </button>
                                        <button type="submit" class="btn btn-success" name="active" value="1">Publish
                                        </button>
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
