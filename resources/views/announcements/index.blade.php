<x-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-4">

                <h2 class="text-center titlePages5 my-2 p-2 Raleway">{{ __('ui.allAnnouncements') }}</h2>
            </div>
        </div>
    </div>



    <div class="container pt-3 Raleway">
        <div class="row justify-content-center">
            @forelse ($announcements as $announcement)
                <div class="col-12 col-md-3 d-flex justify-content-center mx-auto">

                    <div class="card my-4 indexCustom">
                        <div class="position-relative image-container">
                            <img src="{{ !$announcement->images()->get()->isEmpty()
                                ? $announcement->images()->first()->getUrl(300, 300)
                                : 'https://picsum.photos/250/250' }}"
                                class=" position-absolute image-top" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-truncate">{{ $announcement->title }}</h5>
                            <p class="card-text fw-semibold m-0">{{ __('ui.allPrezzo') }}:
                            <p>{{ $announcement->price }}</p>
                            </p>
                            <a href="{{ route('announcements.show', compact('announcement')) }}"
                                class="btn btn-primary btnCard btn-gradient me-1"><i class="fa-solid fa-circle-info"
                                    style="color: #ffffff;"></i></a>
                            <a href=""
                                class="my-2 btn btn-primary fw-semibold  btnCard btn-gradient">{{ $announcement->category->name }}</a>
                            <p class="card-text fst-italic fst-italic">{{ __('ui.allPublished') }}
                                {{ $announcement->created_at->format('d/m/Y') }}</p>
                        </div>
                    </div>
                </div>
            @empty
                <div class="row vh-100">

                    <div class="col-12">
                        <div class="alert alert-warning py-3 shadow">
                            <p class="lead">{{ __('ui.allAlertSearch') }}</p>
                        </div>
                        <div class="col-4 d-flex justify-content-center mx-auto">
                            <img class="img-fluid rounded" src="https://images.unsplash.com/photo-1631534295489-9584a5efa6a8?q=80&w=1528&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                        </div>
                    </div>
                </div>
            @endforelse
            {{ $announcements->links() }}
        </div>
    </div>
    {{-- $announcement->images()->first()->getUrl(400,300) --}}
    {{-- Storage::url($announcement->images()->first()->path) --}}
    <a href="#" class=" d-flex justify-content-end me-2"><button type="button" class="btn btnUltimi"><i
                class="fa-regular fa-circle-up fa-2x pt-1" style="color: #ffffff;"></i></button></a>
</x-layout>
