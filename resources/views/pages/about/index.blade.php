@extends('layouts.main')

@section('title', 'About | Naikdaun')

@section('content')
    <div class="container">

        {{-- label --}}
        <section class="py-5 mt-5">
            <div class="row">
                <div class="col-12">
                    <h1 class="fw-normal fs-6">
                        “Established in 2011, Naikdaun.id is a design agency powered by the belief that vision and visibility work together to produce visceral design that drive prosperity for clients.”
                    </h1>
                </div>
            </div>
        </section>
        {{-- end label --}}

        <div class="border-bottom border-2 w-100 my-5"></div>

        {{-- our temas --}}
        <section class="py-5">
            <div class="row mb-3">
                <div class="col-6">
                    <h3>Our Teams</h3>
                </div>
            </div>

            <div class="row d-flex justify-content-center">
                @foreach ($teams as $team)
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-5">
                        <img data-src="{{ asset($team['avatar']) }}" class="lazy img-fluid" alt="{{ $team['name'] }}">
                        <div class="fs-1 fw-bold mt-1">{{ ucwords($team['name']) }}</div>
                        <span class="fw-normal">{{ $team['division'] }}</span>
                    </div>
                @endforeach
            </div>
        </section>
        {{-- end our teams --}}

    </div>
@endsection
