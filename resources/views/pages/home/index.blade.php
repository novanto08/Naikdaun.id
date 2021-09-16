@extends('layouts.main')

@section('title', 'Naikdaun')

@section('content')
    {{-- section landing --}}
    <section class="py-0">
        <div class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('/assets/img/bg/bg-landing.jpg') }}" class="lazy d-block w-100" alt="banner">
                </div>
            </div>
        </div>
    </section>
    {{-- end section landing --}}



    {{-- works --}}
    <section class="py-0" id="collection">
        <div class="container-fluid">
            <div class="row h-100">

                {{-- work card --}}
                @foreach ($works as $work)
                    <div class="col-lg-4 col-md-6 col-sm-12 px-0">
                        <a href="{{ route('works.detail', [$work['slug']]) }}">
                            <div class="lazy card-work card card-span" data-src="{{ $work['hero_image'] }}">
                                <div class="work-label-overlay pt-8">
                                    <h3 class="fs-2 text-light text-nowrap">{{ $work['title'] }}</h3>
                                    <span class="fs-1 fw-normal text-light text-nowrap">View detail</span>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
@endsection
