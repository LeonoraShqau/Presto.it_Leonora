<x-layout>
    <div class="container mb-4">
        <div class="row justify-content-center">
            <div class="col-12 col-md-5">
                <p class="lead text-center loginText Raleway fw-bold fs-2">
                    {{ $announcement_to_check->title }}
                </p>
            </div>
        </div>
    </div>


    @if ($announcement_to_check)
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-10 col-md-6 dettCard me-3">
                    <div class="carousel slide" id="carouselExampleIndicators">
                        <div class="carousel-inner">
                            @if ($announcement_to_check->images->isNotEmpty())
                                @foreach ($announcement_to_check->images as $image)
                                    <div class="carousel-item @if ($loop->first) active @endif">
                                        <div class="w-100 containerSlide">
                                            <div class="container-fluid">
                                                <div class="row py-5">
                                                    <div class="col-7 d-flex align-items-center">
                                                        <img src="{{ $image->getUrl(300, 300) }}"
                                                            class="img-fluid p-3 rounded" alt="data">
                                                    </div>
                                                    <div class="col-4 d-flex align-items-center justify-content-center">
                                                        <div class="card-body">
                                                            <h5 class="fw-bold text-center pb-4 pt-3 text-danger">
                                                                {{__('ui.imgRev')}}</h5>
                                                            <p>{{__('ui.adulti')}}<span class="{{ $image->adult }}"></span> </p>
                                                            <p>{{__('ui.satira')}}<span class="{{ $image->spoof }}"></span> </p>
                                                            <p>{{__('ui.medicina')}}<span class="{{ $image->medical }}"></span>
                                                            </p>
                                                            <p>{{__('ui.violenza')}}<span class="{{ $image->violence }}"></span>
                                                            </p>
                                                            <p>{{__('ui.espl')}}<span
                                                                    class="{{ $image->racy }}"></span> </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="carousel-item active ">
                                    <img src="{{ asset('/img/placeholderCard.avif') }}" class="img w-100 imgDefault rounded-3"
                                        alt="default">
                                </div>
                            @endif
                        </div>

                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="prev">

                            <i class="fa-solid fa-angle-left text-black fa-2x"aria-hidden="true" ></i>
                            <span class="visually-hidden">{{__('ui.previous')}}</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="next">

                            <i class="fa-solid fa-angle-right text-black fa-2x"aria-hidden="true" ></i>

                            <span class="visually-hidden">{{__('ui.next')}}</span>
                        </button>
                    </div>
                </div>




                <div class="col-10 col-md-3 dettCard p-3 Raleway">
                    <h5 class="card-title fw-bold text-center pb-4 pt-3 ">{{ __('ui.allTitolo') }}
                        {{ $announcement_to_check->title }}</h5>
                    <p class="card-title mt-2">{{ __('ui.allDescrizione') }}: </p>
                    <p>{{ $announcement_to_check->body }}</p>
                    <p class="card-footer mt-5 text-center">{{ __('ui.allPublished') }}:
                        {{ $announcement_to_check->created_at->format('d/m/Y') }} {{ __('ui.allDa') }}
                        {{ $announcement_to_check->user->name ?? '' }}</p>
                    <div class="d-flex flex-row justify-content-center">
                        <form
                            action="{{ route('revisor.accept_announcement', ['announcement' => $announcement_to_check]) }}"
                            method="POST">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="btn btnCard btn-gradient mb-2 me-3"><i
                                    class="fa-solid fa-lg fa-check-to-slot" style="color: #ffffff;"></i></button>
                        </form>
                        <form
                            action="{{ route('revisor.reject_announcement', ['announcement' => $announcement_to_check]) }}"
                            method="POST">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="btn btnCard btn-gradient mb-2"><i
                                    class="fa-solid fa-lg fa-trash-can" style="color: #ffffff;"></i></button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    @endif



</x-layout>
