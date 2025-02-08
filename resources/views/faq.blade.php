@extends('layouts.app')
@section('content')
    <x-breadcrumb title="FAQ"/>

    <div class="faq-section">
        <div class="container">
            <div class="section-questions text-center mb-5">
                <h3>Frequently Asked Questions</h3>
            </div>
            <div class="row mb-5">
                <div class="col-lg-6">
                    <div class="accordion" id="accordionLeft">
                        @foreach($faqs->slice(0, ceil($faqs->count() / 2)) as $key => $faq)
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingLeft{{ $key }}">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseLeft{{ $key }}" aria-expanded="false"
                                            aria-controls="collapseLeft{{ $key }}">
                                        {{ $faq->question }}
                                    </button>
                                </h2>
                                <div id="collapseLeft{{ $key }}" class="accordion-collapse collapse"
                                     aria-labelledby="headingLeft{{ $key }}"
                                     data-bs-parent="#accordionLeft">
                                    <div class="accordion-body">
                                        {{ $faq->answer }}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="accordion" id="accordionRight">
                        @foreach($faqs->slice(ceil($faqs->count() / 2)) as $key => $faq)
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingRight{{ $key }}">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseRight{{ $key }}" aria-expanded="false"
                                            aria-controls="collapseRight{{ $key }}">
                                        {{ $faq->question }}
                                    </button>
                                </h2>
                                <div id="collapseRight{{ $key }}" class="accordion-collapse collapse"
                                     aria-labelledby="headingRight{{ $key }}"
                                     data-bs-parent="#accordionRight">
                                    <div class="accordion-body">
                                        {{ $faq->answer }}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
