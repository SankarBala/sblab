@extends('admin.layouts.admin')
@section('content')
    <div class="content-wrapper">

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="d-inline">Settings</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Settings</li>
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
                            <form id="quickForms" action="{{ route('admin.settings.update') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="question">Phone Number</label>
                                                <input type="text" name="phone" class="form-control" id="phone"
                                                    placeholder="Write Section phone here"
                                                    value="{{ old('phone', $settings->get('phone')) }}" />
                                                @error('phone')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="parent_category">Email</label>
                                                <input type="text" name="email" class="form-control" id="email"
                                                    placeholder="Write email here"
                                                    value="{{ old('email', $settings->get('email')) }}" />
                                                @error('email')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="parent_category">Address</label>
                                                <input type="text" name="address" class="form-control" id="address"
                                                    placeholder="Write address here"
                                                    value="{{ old('address', $settings->get('address')) }}" />
                                                @error('address')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        {{-- Social Links --}}
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="parent_category">Facebook</label>
                                                <input type="text" name="facebook" class="form-control" id="facebook"
                                                    placeholder="Enter facebook link here"
                                                    value="{{ old('facebook', $settings->get('facebook')) }}" />
                                                @error('facebook')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="parent_category">Youtube</label>
                                                <input type="text" name="youtube" class="form-control" id="youtube"
                                                    placeholder="Enter youtube link here"
                                                    value="{{ old('youtube', $settings->get('youtube')) }}" />
                                                @error('youtube')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="parent_category">Twitter</label>
                                                <input type="text" name="twitter" class="form-control" id="twitter"
                                                    placeholder="Enter twitter link here"
                                                    value="{{ old('twitter', $settings->get('twitter')) }}" />
                                                @error('twitter')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        {{-- End Social Links --}}
                                    </div>
                                    <div class="d-flex justify-content-end mt-2">
                                        <button type="submit" class="btn btn-success">Update
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
