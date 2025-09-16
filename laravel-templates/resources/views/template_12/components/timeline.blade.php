<section class="container py-5">
    <h2 class="fw-bold text-center mb-5" style="font-family: 'Georgia', serif;">
        My Experience and Studies
    </h2>
    <div class="row position-relative">
        <div class="position-absolute top-0 start-50 translate-middle-x bg-secondary opacity-25"
            style="width: 2px; height: 100%; z-index: 1;"></div>
        <div class="col-md-6">
            <h5 class="fw-bold text-center mb-2">
                Experience
            </h5>
            @foreach($experiences as $exp)
            <div class="d-flex align-items-center mb-4 position-relative" style="min-height: 100px;">
                <div class="flex-grow-1 text-end pe-4">
                    <h5 class="mb-1 fw-bold" style="color:#A9876D;">
                        {{ $exp['company'] }}
                    </h5>
                    <h5 class="mb-1 fw-bold" style="color:#A9876D;">
                        {{ $exp['title'] }}
                    </h5>
                    <h5 class="mb-1 fw-bold" style="color:#A9876D;">
                        {{ $exp['year'] }}
                    </h5>
                    <p class="mb-0" style="color:#70635C; line-height: 1.4;">
                        {{ $exp['description'] }}
                    </p>
                </div>
                <div class="position-absolute end-0 top-50 translate-middle-y" style="z-index: 3;">
                    <div class="rounded-circle border border-3"
                        style="width: 20px; height: 20px; background-color: #A9876D; border-color: #70635C !important; transform: translateX(50%);"></div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="col-md-6">
            <h5 class="fw-bold text-center mb-2">
                Education
            </h5>
            @foreach($educations as $edu)
            <div class="d-flex align-items-center mb-4 position-relative" style="min-height: 100px;">
                <div class="position-absolute start-0 top-50 translate-middle-y" style="z-index: 3;">
                    <div class="rounded-circle border border-3"
                        style="width: 20px; height: 20px; background-color: #A9876D; border-color: #70635C !important; transform: translateX(-50%);"></div>
                </div>
                <div class="flex-grow-1 text-start ps-4">
                    <h5 class="mb-1 fw-bold" style="color:#A9876D;">
                        {{ $edu['university'] }}
                    </h5>
                    <p class="mb-1 fw-bold">
                        {{ $edu['degree'] }}
                    </p>
                    <small style="color:#70635C;">{{ $edu['year'] }}</small>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<style>
    @media (max-width: 767.98px) {

        .row>.position-absolute {
            left: 1.5rem !important;
            transform: translateX(0) !important;
        }

        .col-md-6:first-child {
            margin-bottom: 2rem;
        }

        .col-md-6 .position-absolute {
            left: 1.5rem !important;
            right: auto !important;
            transform: translateX(-50%) translateY(-50%) !important;
        }

        .col-md-6 .start-0 {
            left: 1.5rem !important;
        }

        .col-md-6 .text-end,
        .col-md-6 .text-start {
            text-align: left !important;
            padding-right: 0 !important;
            padding-left: 3rem !important;
        }

        .col-md-6 {
            padding-left: 0 !important;
        }
    }
</style>