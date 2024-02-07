<x-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <h2 class="text-center titlePages mb-5">Il mio account</h2>
            </div>
        </div>
    </div>

    <div class="container ">
        <div class="row ">
            <div class="col-4">
                <div class="row">
                    <div class="col-12 col-md-8 d-flex justify-content-center mx-auto">
                        <div class="card my-3 indexCustom">
                            <div class="position-relative image-container2">
                                <img src="{{asset('/img/fotoProfilo.jpg')}}" class=" position-absolute img-pers"
                                    alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{__('ui.personalData')}}</h5>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><i
                                            class="fa-solid fa-user-astronaut me-2"></i>{{ Auth::user()->name }}</li>
                                    <li class="list-group-item"><i class="fa-solid fa-envelope me-2"></i>
                                        {{ Auth::user()->email }}</li>
                                    <li class="list-group-item fw-bold">{{__('ui.iscription')}}
                                        {{ Auth::user()->created_at->format('d/m/y') }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-8">
                <div class="row">

                    @foreach ($announcements as $announcement)
                        <div class="col-12 col-md-4 d-flex flex-row my-3">
                            <div class="card my-4 indexCustom">
                                <div class="position-relative image-container">
                                    <img src="{{ !$announcement->images()->get()->isEmpty()
                                        ? $announcement->images()->first()->getUrl(300, 300)
                                        : 'https://picsum.photos/300/300' }}"
                                        class=" position-absolute image-top3" alt="...">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-truncate">{{ $announcement->title }}</h5>
                                    <p class="card-text fw-semibold m-0">{{ __('ui.allPrezzo') }}:
                                    <p>{{ $announcement->price }}</p>
                                    </p>
                                    <a href="{{ route('announcements.show', compact('announcement')) }}"
                                        class="btn btn-primary btnCard btn-gradient me-1"><i
                                            class="fa-solid fa-circle-info" style="color: #ffffff;"></i></a>
                                    <a href=""
                                        class="my-2 btn btn-primary fw-semibold  btnCard btn-gradient">{{ $announcement->category->name }}</a>
                                    <p class="card-text fst-italic fst-italic">{{ __('ui.allPublished') }}
                                        {{ $announcement->created_at->format('d/m/Y') }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {{ $announcements->links() }}
                </div>
            </div>
        </div>
    </div>

    <a href="#" class=" d-flex justify-content-end me-2"><button type="button" class="btn btnUltimi"><i class="fa-regular fa-circle-up fa-2x pt-1" style="color: #ffffff;"></i></button></a>

</x-layout>
