@extends('layouts.app')
@section('content')
    <x-breadcrumb title="Profile" />

    <div class="blog-detials-area">
        <div class="container">
            <div class="row">
                <div class="blog-details-main">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="blog-details-content py-0 my-0 border-bottom ">
                                <h2 class="my-0 py-2">{{ $staff->name }}</h2>
                            </div>
                            <div class="p-0 m-0 mb-3 mt-2"> 
                                <h5 class="fw-lg">{{$staff->designation}}</h5>
                            </div>
                            <div class="text-justify">
                                <img class="img-thumbnail mb-4" style="margin-right: 16px; float:left;"
                                    src="{{ asset("storage/{$staff->image}") }}" alt="">
                                {!! $staff->description !!}
                            </div>
                        </div>


                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection

@section('reply')
    <div class="row">
        <div class="col-12">
            <div class="">
                <textarea class="form-control" name="message" id="answer" rows="6" placeholder="Write here..."></textarea>
            </div>
            <div class="float-end mt-3">
                <button type="submit" class="btn btn-primary">Comment</button>
            </div>
        </div>
    </div>
@endsection


@push('styles')
    <style>
        .blog-details-des {
            text-align: justify;
        }

        .blog-details-des img {
            float: left;
            max-width: 320px;
            height: auto;
        }

        @media (max-width: 992px) {
            .blog-details-des img {
                float: none;
                display: block;
                margin: 0 auto;
            }
        }
    </style>
@endpush
