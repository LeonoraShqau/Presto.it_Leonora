<x-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-5">
                <p class="text-center Raleway text-center fs-2 mb-3 titlePages">{{$category->name}}</p>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="row justify-content-center">
            @forelse ($category->announcements as $announcement)
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
                        <p class="card-text fw-semibold m-0">{{__('ui.allPrezzo')}}:
                        <p>{{ $announcement->price }}</p>
                    </p>
                    <a href="{{ route('announcements.show', compact('announcement')) }}"
                    class="btn btn-primary btnCard btn-gradient me-1"><i class="fa-solid fa-circle-info" style="color: #ffffff;"></i></a>
                    <a href=""
                    class="my-2 btn btn-primary fw-semibold  btnCard btn-gradient">{{ $announcement->category->name }}</a>
                    <p class="card-text fst-italic fst-italic">{{__('ui.allPublished')}}
                        {{ $announcement->created_at->format('d/m/Y') }}</p>
                    </div>
                </div>
            </div>
            
            @empty
            <div class="col-12 col-md-8 fs-3 mt-5">
                <p class="titlePages Raleway p-2">{{__('ui.allMessDisp')}} {{$category->name}}</p>
                <p class="h4 Raleway">{{__('ui.allUno')}}: <a href="{{route('announcements.create')}}" class="btn revisionBtn">{{__('ui.allNew')}}</a></p>
            </div>
            @endforelse
        </div>
    </div>
    <a href="#" class=" d-flex justify-content-end me-2"><button type="button" class="btn btnUltimi"><i class="fa-regular fa-circle-up fa-2x pt-1" style="color: #ffffff;"></i></button></a>
</x-layout>
