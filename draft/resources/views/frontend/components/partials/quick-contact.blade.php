<div class="more-info mx-auto my-4">
    <h6 class="black semibold text-center mx-4 mt-3 mb-3 info-title">Quick Contact</h6>
    <div class="pb-2">
        <a href="tel:{{env('COMPASS_PHONE')}}">
            <h5 class="grey text-center tel-info"><i
                        class="fas primary-color fa-phone faa-tada animated mr-2 grey my-lg-0 mb-1"></i>{{env('COMPASS_PHONE')}}
            </h5>
        </a>
        <a href="mailto:{{env('COMPASS_EMAIL')}}">
            <h5 class="grey text-center mail-info"><i
                        class="fas fa-envelope faa-horizontal animated primary-color mr-2"></i>{{env('COMPASS_EMAIL')}}
            </h5>
        </a>
        <a href="{{route('contact')}}">
            <h5 class="grey text-center mail-info"><i
                        class="fas fa-map faa-horizontal animated primary-color mr-2"></i>{{env('COMPASS_ADDRESS')}}
            </h5>
        </a>
    </div>
</div>