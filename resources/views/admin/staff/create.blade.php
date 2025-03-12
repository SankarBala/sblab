@extends('admin.layouts.admin')
@section('content')
    <div class="content-wrapper">

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="d-inline">Create New Staff</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.faq.index') }}">Staff</a></li>
                            <li class="breadcrumb-item active">Create</li>
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
                            <form id="quickForms" action="{{ route('admin.staff.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">

                                    <div class="row">
                                        <div class="col-md-8 col-lg-9">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="name">Name (Required)</label>
                                                        <input type="text" name="name" class="form-control"
                                                            id="name" placeholder="Write name here"
                                                            value="{{ old('name') }}" />
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
                                                            value="{{ old('designation') }}" />
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
                                                            value="{{ old('email') }}" />
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
                                                            value="{{ old('phone') }}" />
                                                        @error('phone')
                                                            <span class="text-danger"> {{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="description">Description</label>
                                                <textarea id="summernote" name="description" placeholder="Write description here.">{{ old('description') }}</textarea>
                                                @error('description')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                        </div>
                                        <div class="col-md-4 col-lg-3">
                                            <div class="form-group">
                                                <label for="answer">Photo</label>
                                                <x-image-picker name="image" accept="image/*" />
                                                @error('image')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-end">
                                        {{-- <button type="submit" class="btn btn-secondary mx-2" name="active"
                                            value="0">Draft</button> --}}
                                        <button type="submit" class="btn btn-success">Publish</button>
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
