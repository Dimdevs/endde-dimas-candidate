<section class="py-0" style="margin-top:-4.5rem;">
    <div class="container">
        <div class="row">
            <div class="card card-span px-0 bg-secondary">
                <div class="card-body">
                    <div class="row flex-center gx-0">
                        <div class="col-lg-12 col-xl-4 mb-3 mb-lg-0 mb-md-0">
                            <h1 class="text-light fw-semi-bold fs-lg-4 fs-xl-5 text-lg-start text-center m-0 py-2">
                                {{ isset($event_informations) ? $event_informations->title : 'Upcoming For ICAS 2024!' }}
                            </h1>
                        </div>
                        <div class="col-lg-12 col-xl-6">
                            <div class="countdown-wrapper text-center text-start pr-3">
                                <div class="countdown-labels d-flex justify-content-evenly gap-lg-5 gap-md-5 gap-sm-3 gap-3 m-0 px-2" >
                                    <div class="countdown-group w-50">
                                        <h3 class="fw-bolder text-light mb-1" data-date="{{ isset($event_informations) ? $event_informations->date : '2025-01-01T19:53:55'  }}" id="countdown-days"></h3>
                                        <span class="countdown-label">Days</span>
                                    </div>
                                    <div class="countdown-group w-50">
                                        <h3 class="fw-bolder text-light mb-1" data-date="{{ isset($event_informations) ? $event_informations->date : '2025-01-01T19:53:55'  }}" id="countdown-hours"></h3>
                                        <span class="countdown-label">Hours</span>
                                    </div>
                                    <div class="countdown-group w-50">
                                        <h3 class="fw-bolder text-light mb-1" data-date="{{ isset($event_informations) ? $event_informations->date : '2025-01-01T19:53:55'  }}" id="countdown-minutes"></h3>
                                        <span class="countdown-label">Minutes</span>
                                    </div>
                                    <div class="countdown-group w-50">
                                        <h3 class="fw-bolder text-light mb-1" data-date="{{ isset($event_informations) ? $event_informations->date : '2025-01-01T19:53:55'  }}" id="countdown-seconds"></h3>
                                        <span class="countdown-label">Seconds</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of .container-->
</section>
