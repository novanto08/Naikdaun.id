@extends('layouts.main')

@section('title', 'Contact | Naikdaun')

@section('content')
    <div class="container">
        <section class="py-5 mt-5">
            <div class="row">
                <div class="col-12">
                    <h1 class="fs-lg-6 fs-md-5 fs-4 fw-normal">{{ $contact['description'] }}</h1>
                </div>
            </div>
        </section>

        <div class="border-bottom border-2 w-100"></div>

        {{-- contact --}}
        <section class="py-5">
            <div class="row">
                <div class="col-12 mb-3">
                    <div class="d-flex flex-row">
                        <h2 class="fs-3 fs-md-4 fw-normal">
                            Tel: <a href="tel:{{ $contact['tel_office'] }}" class="contact">{{ $contact['tel_office'] }}</a>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 mb-3">
                    <div class="d-flex flex-row">
                        <h2 class="fs-3 fs-md-4 fw-normal">
                            Mobile: <a href="tel:{{ $contact['tel_mobile'] }}" class="contact">{{ $contact['tel_mobile'] }}</a>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 mb-3">
                    <div class="d-flex flex-row">
                        <h2 class="fs-3 fs-md-4 fw-normal">
                            Email: <a href="mailto:{{ $contact['email'] }}" class="contact">{{ $contact['email'] }}</a>
                        </h2>
                    </div>
                </div>
            </div>
        </section>
        {{-- end contact --}}

        <div class="border-bottom border-2 w-100"></div>

        {{-- Find us --}}
        <section class="py-5">
            <div class="row mb-3">
                <div class="col-12">
                    <h2 class="fs-3 fs-md-4 fw-normal">
                        <a href="{{ $contact['maps'] }}" target="_balnk" class="contact">Find us here</a>
                    </h2>
                </div>
            </div>
        </section>
        {{-- End find us --}}

        <div class="border-bottom border-2 w-100"></div>

        {{-- Address --}}
        <section class="py-5">
            <div class="row mb-3">
                <div class="col-12">
                    <div class="fs-3 fs-md-4 fw-normal">
                        {!! $contact['address'] !!}
                    </div>
                </div>
            </div>
        </section>
        {{-- end address --}}

    </div>
@endsection
