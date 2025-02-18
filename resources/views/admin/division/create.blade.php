@extends('admin.layouts.admin')
@section('content')
    <div class="content-wrapper">

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="d-inline">Create New Division</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.faq.index') }}">Division</a></li>
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
                            <form id="quickForms" action="{{ route('admin.division.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="question">Name (Required)</label>
                                        <input type="text" name="name" class="form-control" id="name"
                                            placeholder="Write Section name here" value="{{ old('name') }}" />
                                        @error('name')
                                            <span class="text-danger"> {{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-lg-9">
                                            <div class="form-group">
                                                <label for="answer">Description (Optional)</label>
                                                <textarea name="description" class="form-control" id="description" placeholder="Write description here." rows="6">{{ old('description') }}</textarea>
                                                @error('description')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-lg-3">
                                            <div class="form-group">
                                                <label for="answer">Image (Optional)</label>
                                                <div id="divisionImage"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-end">
                                        <button type="submit" class="btn btn-secondary mx-2" name="active"
                                            value="0">Draft</button>
                                        <button type="submit" class="btn btn-success" name="active"
                                            value="1">Publish</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
{{$errors}}
    </div>
@endsection


@push('styles')
    <style>
        #divisionImage .file_upload {
            min-height: 160px;
        }
    </style>
@endpush

@push('scripts')
    <script>
        $("#divisionImage").spartanMultiImagePicker({
            rowHeight: 'auto',
            allowedExt: 'png|jpg|jpeg|gif|webp',
            maxFileSize: '2048',
            dropFileLabel: 'Drop file here',
            fieldName: 'images[]',
            maxCount: 1,
            groupClassName: '',
        });
    </script>
@endpush
