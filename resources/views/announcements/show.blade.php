<x-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 text-center titlePages">
                <h1 class="text-center fw-bold">{{__('ui.showTitle')}} {{ $announcement->title }}</h1>
            </div>
        </div>
    </div>


<div id="containerMobileSwiper" class="">
    <div class="blog-slider mt-5">

        <div class="blog-slider__wrp swiper-wrapper ">
            @foreach ($announcement->images as $image)
            <div class="blog-slider__item swiper-slide d-flex flex-row">
                <div class="blog-slider__img">

                    @if ($announcement->images->isNotEmpty())
                    
                      {{-- @foreach ($announcement->images as $image) --}}
                        <img src="{{ $image->getUrl(300,300) }}" class="img-fluid p-3 rounded"
                        alt="data">
                      {{-- @endforeach --}}
                    @endif
                    

                </div>
                <div class="d-none d-md-block">
                    <div class="title-slider ">{{ $announcement->title }}</div>
                    <div class="text-slider">{{ $announcement->body }}</div>
                    <div class="text-slider">€{{ $announcement->price }}</div>
                    <span class="code-slider">{{__('ui.allPublished')}} {{ $announcement->created_at->format('d/m/Y') }} {{__('ui.allDa')}}
                        {{ $announcement->user->name ?? '' }}</span>
                    <div class="mt-3">
                        <a href="{{route('announcements.index')}}" class="blog-slider__button">{{__('ui.allIndietro')}}</a>
                    </div>
                </div>
            </div>
            @endforeach

            

            <div class="blog-slider__pagination"></div>
        </div>
    </div>
    <div id="swiperMobileDescription" class="translate-middle d-block d-md-none position-absolute">
        <div class="title-slider ">{{ $announcement->title }}</div>
        <div class="text-slider">{{ $announcement->body }}</div>
        <div class="text-slider">€{{ $announcement->price }}</div>
        <span class="code-slider">{{__('ui.allPublished')}} {{ $announcement->created_at->format('d/m/Y') }} {{__('ui.allDa')}}
            {{ $announcement->user->name ?? '' }}</span>
        <div class="mt-3">
            <a href="{{route('announcements.index')}}" class="blog-slider__button">{{__('ui.allIndietro')}}</a>
        </div>
    </div>
</div>





</x-layout>
