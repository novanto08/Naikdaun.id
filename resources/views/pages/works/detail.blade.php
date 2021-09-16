@extends('layouts.main')

@section('title', 'Work Detail | Naikdaun')

@section('content')
    <div class="container mt-5">
        <div class="row d-flex">

            {{-- display image --}}
            <div class="col-lg-8 col-md-6 col-sm-12 order-md-1 order-sm-2 order-2 mb-3">
                <div class="row">
                    <div class="col-12 mb-3 h-100">
                        <img data-src="{{ asset($work['hero_image']) }}" class="lazy img-fluid w-100 h-100" alt="Hero Image">
                    </div>

                    @foreach ($work['images'] as $img)
                        <div class="col-12 mb-3 h-100">

                            @if ($img['file_type'] == 'video')
                                <video class="lazy img-fluid w-100 h-100" controls>
                                    <source src="{{ asset($img['src']) }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>

                            @else
                                <img data-src="{{ asset($img['src']) }}" class="lazy img-fluid w-100 h-100" alt="Hero Image">
                            @endif

                        </div>
                    @endforeach

                </div>
            </div>
            {{-- end display image --}}


            {{-- display project description --}}
            <div class="col-lg-4 col-md-6 col-sm-12 order-md-2 order-sm-1 order-1 mb-3">
                <div class="sticky-lg-top">
                    <div class="row">
                        <div class="col-12 mb-1">
                            <h3>{{ $work['title'] }}</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 mb-1">
                            <h5 class="mb-1 fw-normal">Description:</h5>
                            <p class="fw-light">{{ $work['description'] }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 mb-1">
                            <h5 class="mb-1 fw-normal">Team:</h5>
                            <p class="fw-light">{{ $work['team'] }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 mb-1">
                            <h5 class="mb-1 fw-normal">Graphic Design:</h5>
                            <p class="fw-light">{{ $work['graphic_design'] }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 mb-1">
                            <h5 class="mb-1 fw-normal">Video Production:</h5>
                            <p class="fw-light">{{ $work['video_production'] }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 mb-1">
                            <h5 class="mb-1 fw-normal">Production:</h5>
                            <p class="fw-light">{{ $work['production'] }}</p>
                        </div>
                    </div>

                    {{-- button next, previous & back --}}
                    <div class="row">
                        <div class="col-12">
                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                <a href="{{ $previous ? route('works.detail', [$previous['slug']]) : '#' }}" class="btn btn-sm btn-outline-dark py-1 {{ $previous ? null : 'disabled' }}">
                                    Prev
                                </a>
                                <a href="{{ route('works') }}" class="btn btn-sm btn-outline-dark py-1">
                                    <i class="bi bi-grid-3x2-gap-fill fw-bold" style="font-size: 15px;"></i>
                                </a>
                                <a href="{{ $next ? route('works.detail', [$next['slug']]) : '#' }}" class="btn btn-sm btn-outline-dark py-1 {{ $next ? null : 'disabled' }}">
                                    Next
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- end display project description --}}

        </div>
    </div>
@endsection
