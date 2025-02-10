@extends('admin.layouts.admin')
@section('content')
    <div class="content-wrapper">

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="d-inline">Edit Faq</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{route('admin.faq.index')}}">Faq</a></li>
                            <li class="breadcrumb-item active">Edit-{{$faq->id}}</li>
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
                            <form id="quickForms" action="{{route('admin.faq.update', $faq)}}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="question">Question</label>
                                        <input type="text" name="question" class="form-control" id="question"
                                               placeholder="Write your question here"
                                               value="{{old('question', $faq->question)}}">
                                        @error('question')
                                        <span class="text-danger"> {{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="answer">Answer</label>
                                        <textarea name="answer" class="form-control"
                                                  id="answer" placeholder="Write answer here."
                                                  rows="5">{{old('answer', $faq->answer)}}</textarea>
                                        @error('answer')
                                        <span class="text-danger"> {{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="d-flex justify-content-between">
                                    <span class="{{ $faq->active ? 'text-success' : 'text-secondary' }}"> {{$faq->active? "Active": "Inactive"}}</span>
                                       <div> <button type="submit" class="btn btn-secondary mx-2" name="active" value="0">
                                            Draft
                                        </button>
                                        <button type="submit" class="btn btn-success" name="active" value="1">Publish
                                        </button></div>
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
