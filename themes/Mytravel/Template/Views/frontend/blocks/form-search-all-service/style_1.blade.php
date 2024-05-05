{{--<div class="bravo-form-search-all hero-block hero-v1 bg-img-hero-bottom gradient-overlay-half-black-gradient text-center z-index-2" style="background-image: url('{{$bg_image_url}}') !important;">
    <div class="container space-2 space-top-xl-4">
        <div class="row justify-content-center pb-xl-8">
            <div class="py-8 py-xl-10 pb-5">
                <h1 class="font-size-60 font-size-xs-30 text-white font-weight-bold">{{$title ?? ''}}</h1>
                <p class="font-size-20 font-weight-normal text-white">{{$sub_title ?? ''}}</p>
            </div>
        </div>
        @if(empty($hide_form_search))
            <div class="mb-lg-n1">
                <ul class="nav tab-nav-rounded flex-nowrap pb-2 pb-md-4 tab-nav @if(!empty($single_form_search)) d-none @endif" role="tablist">
                    @if(!empty($service_types))
                        @php $number = 0; @endphp
                        @foreach ($service_types as $service_type)
                            @php
                                $allServices = get_bookable_services();
                                if(empty($allServices[$service_type])) continue;
                                $module = new $allServices[$service_type];
                            @endphp
                            <li class="nav-item" role="bravo_{{$service_type}}">
                                <a class="nav-link font-weight-medium @if($number == 0) active @endif pl-md-5 pl-3" id="bravo_{{$service_type}}-tab" data-toggle="pill" href="#bravo_{{$service_type}}" role="tab" aria-controls="bravo_{{$service_type}}" aria-selected="true">
                                    <div class="d-flex flex-column flex-md-row  position-relative text-white align-items-center">
                                        <figure class="ie-height-40 d-md-block mr-md-3">
                                            <i class="icon {{ $module->getServiceIconFeatured() }} font-size-3"></i>
                                        </figure>
                                        <span class="tabtext mt-2 mt-md-0 font-weight-semi-bold">
                                              {{ !empty($modelBlock["title_for_".$service_type]) ? $modelBlock["title_for_".$service_type] : $module->getModelName() }}
                                        </span>
                                    </div>
                                </a>
                            </li>
                            @php $number++; @endphp
                        @endforeach
                    @endif
                </ul>
                <div class="tab-content hero-tab-pane">
                    @if(!empty($service_types))
                        @php $number = 0; @endphp
                        @foreach ($service_types as $service_type)
                            @php
                                $allServices = get_bookable_services();
                                if(empty($allServices[$service_type])) continue;
                            @endphp
                            <div class="tab-pane fade @if($number == 0) active show @endif" id="bravo_{{$service_type}}" role="tabpanel" aria-labelledby="bravo_{{$service_type}}-tab">
                                <div class="card border-0 tab-shadow">
                                    <div class="card-body">
                                        @include(ucfirst($service_type).'::frontend.layouts.search.form-search')
                                    </div>
                                </div>
                            </div>
                            @php $number++; @endphp
                        @endforeach
                    @endif
                </div>
            </div>
        @endif
    </div>
</div> --}}

<style>

    .text-left-on-video {
        position: absolute;
        top: 10%;
        left: 0;
        width: 50%; /* Adjust width as needed */
        padding: 20px; /* Adjust padding as needed */
        color: white; /* Text color */
        z-index: 1; /* Ensure text is above the video */
    }
        @media(min-aspect-ratio:16/9) {
            .bg-video{
                width:100%;
                height:auto;
                z-index: -1;
            }
        }
        
</style>    
<div class="bravo-form-search-all hero-block hero-v1 bg-video bg-img-hero-bottom gradient-overlay-half-black-gradient text-center z-index-2">
<video autoplay loop muted playsinline class="bg-video">
        <source src="{{asset('makkah.mp4')}}" type="video/mp4">
        <!-- Add other video formats here if needed -->
        Your browser does not support the video tag.
    </video>
    <div class="text-left-on-video">
        <div class="container space-2 space-top-xl-4">
            <h1 class="font-size-60 font-size-xs-30 text-white font-weight-bold">{{ $title ?? '' }}</h1>
            <p class="font-size-20 font-weight-normal text-white">{{ $sub_title ?? '' }}</p>
        </div>
    </div>
    <div class="container space-2 space-top-xl-4">
        @if(empty($hide_form_search))
            <div class="mb-lg-n1">
                <ul class="nav tab-nav-rounded flex-nowrap pb-2 pb-md-4 tab-nav @if(!empty($single_form_search)) d-none @endif" role="tablist">
                    @if(!empty($service_types))
                        @php $number = 0; @endphp
                        @foreach ($service_types as $service_type)
                            @php
                                $allServices = get_bookable_services();
                                if(empty($allServices[$service_type])) continue;
                                $module = new $allServices[$service_type];
                            @endphp
                            <li class="nav-item" role="bravo_{{$service_type}}">
                                <a class="nav-link font-weight-medium @if($number == 0) active @endif pl-md-5 pl-3" id="bravo_{{$service_type}}-tab" data-toggle="pill" href="#bravo_{{$service_type}}" role="tab" aria-controls="bravo_{{$service_type}}" aria-selected="true">
                                    <div class="d-flex flex-column flex-md-row  position-relative text-white align-items-center">
                                        <figure class="ie-height-40 d-md-block mr-md-3">
                                            <i class="icon {{ $module->getServiceIconFeatured() }} font-size-3"></i>
                                        </figure>
                                        <span class="tabtext mt-2 mt-md-0 font-weight-semi-bold">
                                              {{ !empty($modelBlock["title_for_".$service_type]) ? $modelBlock["title_for_".$service_type] : $module->getModelName() }}
                                        </span>
                                    </div>
                                </a>
                            </li>
                            @php $number++; @endphp
                        @endforeach
                    @endif
                </ul>
                <div class="tab-content hero-tab-pane">
                    @if(!empty($service_types))
                        @php $number = 0; @endphp
                        @foreach ($service_types as $service_type)
                            @php
                                $allServices = get_bookable_services();
                                if(empty($allServices[$service_type])) continue;
                            @endphp
                            <div class="tab-pane fade @if($number == 0) active show @endif" id="bravo_{{$service_type}}" role="tabpanel" aria-labelledby="bravo_{{$service_type}}-tab">
                                <div class="card border-0 tab-shadow">
                                    <div class="card-body">
                                        @include(ucfirst($service_type).'::frontend.layouts.search.form-search')
                                    </div>
                                </div>
                            </div>
                            @php $number++; @endphp
                        @endforeach
                    @endif
                </div>
            </div>
        @endif
    </div>
</div>

