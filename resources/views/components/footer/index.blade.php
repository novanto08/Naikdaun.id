<section class="py-0 pt-7">
    <div class="container">

        <div class="border-bottom border-2"></div>

        <div class="row mt-4">
            <div class="col-12 col-lg-8 mb-lg-0 mb-3">
                <h5 class="lh-lg fw-bold text-1000">Client</h5>
                <img data-src="{{ asset('assets/img/client.png') }}" class="lazy img-fluid w-100" alt="Client">
                <div class="border-bottom border-lg-0 border-2 mt-5"></div>
            </div>

            @php
                $contacts = App\Models\Contact::get();
            @endphp

            {{-- contact --}}
            <div class="col-sm-6 col-lg-auto ms-auto mb-lg-0 mb-3 mt-lg-1 mt-3">
                @foreach ($contacts->all() as $contact)
                    <div class="mb-4">
                        <h6 class="lh-lg fw-bold text-1000">{{ $contact['name'] }}</h6>
                        <p class="text-800">
                            <svg class="feather feather-phone me-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                            </svg>
                            <span class="text-800">{{ $contact['phone'] }}</span>
                        </p>
                        <p class="text-800">
                            <svg class="feather feather-mail me-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                <polyline points="22,6 12,13 2,6"></polyline>
                            </svg>
                            <a class="text-800" href="mailto:{{ $contact['email'] }}">{{ $contact['email'] }}</a>
                        </p>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="border-bottom border-2"></div>

        <div class="row flex-center my-3">

            {{-- logo --}}
            <div class="col-md-6 order-1 order-md-0">
                <p class="my-2 text-1000 text-center text-md-start">
                    <a class="text-800" href="{{ route('home') }}">
                        <img src="{{ asset('/assets/img/logo/logo_h.svg') }}" alt="Logo" width="120">
                    </a>
                </p>
            </div>
            {{-- end logo --}}

            {{-- social media --}}
            <div class="col-md-6">
                <div class="text-center text-md-end mb-1 mb-md-0">

                    @php
                        $socmeds = App\Models\Socmed::get();
                    @endphp

                    @foreach ($socmeds->all() as $socmed)
                        <a href="{{ $socmed['url'] }}" target="_blank">
                            <i class="{{ $socmed['icon'] }} fs-2 fw-bold"></i>
                        </a>
                    @endforeach

                </div>
            </div>
            {{-- end social media --}}

        </div>
    </div>
</section>
