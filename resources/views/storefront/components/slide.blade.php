<style>
    .tns-controls {
        display: none
    }

</style>
<link rel="stylesheet" href="{{ asset('storefront/assets/css/tiny-slider.css') }}">

<div class="slider-section">
    <div class="container">
        <div class="row">
            <div class="slider-section">
                <div class="tns-outer" id="responsive-ow">
                    <div class="tns-controls" aria-label="Carousel Navigation" tabindex="0"><button type="button"
                            data-controls="prev" tabindex="-1" aria-controls="responsive">prev</button><button
                            type="button" data-controls="next" tabindex="-1" aria-controls="responsive">next</button>
                    </div>
                    <div class="tns-liveregion tns-visually-hidden" aria-live="polite" aria-atomic="true">slide
                        <span class="current">14 to 18</span> of 10</div>
                    <div id="responsive-mw" class="tns-ovh">
                        <div class="tns-inner" id="responsive-iw">
                            <div class="my-slider  tns-slider tns-carousel tns-subpixel tns-calc tns-horizontal"
                                id="responsive" style="transform: translate3d(-50%, 0px, 0px);">


                                @foreach(App\Item::where([
                                    ['status', '=', true],
                                    ['is_approve', '=', true],
                                    ['stock', '=', true],
                                    ])->take(26)->get() as $item)

                                    <div class="slider-item tns-item" aria-hidden="true" tabindex="-1">
                                        <div class="card">
                                            <a
                                                href="{{ route('item.view', $item->slug) }}">
                                                <div class="slider-img-box"><img
                                                        src="{{ asset('storage/item/small/'.$item->img) }}">
                                                </div>
                                                <div class="card-item-type"> {!! \Illuminate\Support\str::limit(strip_tags($item->title), 30) !!}</div>
                                                <div class="card-price">৳ {{ $item->price }}</div>
                                            </a>
                                        </div>
                                    </div>

                                @endforeach



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- end slider --}}
