@extends('admin.layouts.admin')
@section('content')
    <div class="content-wrapper">

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="d-inline">Update Staff</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.faq.index') }}">Staff</a></li>
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
                            <form id="quickForms" action="{{ route('admin.staff.update', $staff) }}" method="POST"
                                enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="card-body">

                                    <div class="row">
                                        <div class="col-md-8 col-lg-9">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="question">Name (Required)</label>
                                                        <input type="text" name="name" class="form-control"
                                                            id="name" placeholder="Write Section name here"
                                                            value="{{ old('name', $staff->name) }}" />
                                                        @error('name')
                                                            <span class="text-danger"> {{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="parent_category">Designation</label>
                                                        <input type="text" name="designation" class="form-control"
                                                            id="designation" placeholder="Write designation here"
                                                            value="{{ old('designation', $staff->designation) }}" />
                                                        @error('designation')
                                                            <span class="text-danger"> {{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="parent_category">Email</label>
                                                        <input type="text" name="email" class="form-control"
                                                            id="email" placeholder="Write email here"
                                                            value="{{ old('email', $staff->email) }}" />
                                                        @error('email')
                                                            <span class="text-danger"> {{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="parent_category">Phone</label>
                                                        <input type="text" name="phone" class="form-control"
                                                            id="phone" placeholder="Write phone here"
                                                            value="{{ old('phone', $staff->phone) }}" />
                                                        @error('phone')
                                                            <span class="text-danger"> {{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="description">Description</label>
                                                <textarea id="summernote" name="description" placeholder="Write description here.">{{ old('description', $staff->description) }}</textarea>
                                                @error('description')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                        </div>
                                        <div class="col-md-4 col-lg-3">
                                            <div class="form-group">
                                                <label for="image">Image (Optional)</label>
                                                <x-image-picker name="image" src="{{ $staff->image }}"
                                                    accept="image/*" />
                                                @error('image')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-end mt-2">
                                        <button type="submit" class="btn btn-success">Publish
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
