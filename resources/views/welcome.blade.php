<x-layout>
    <x-iconsCategory />
    
    <div class="container mt-5 mb-5">
        <div class="card mb-3 coupon-custom couponContainer">
            <div class="row g-0">
                <div class="col-12 col-md-4 ">
                    <div class="card-body">
                        <h5 class="card-title Raleway coupon-title">Coupon 20%</h5>
                        <p class="card-text Raleway">{{__('ui.coupon')}}
                        </p>
                        @guest
                        <a href="{{route('register')}}" class="btn coupon-btn Raleway">{{__('ui.allRegistrati')}}</a>
                        @endguest
                    </div>
                </div>
                <div class="col-12 col-md-8 couponImg">
                    <img src="{{asset('/img/coupon2.jpg')}}" class="img-fluid rounded-start coupon-img" alt="...">
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="col-10 d-flex justify-content-center ">
                <h2 class="Raleway text-center mb-3 titlePages2">{{__('ui.ulAnn')}}</h2>
            </div>
        </div>
    </div>
    
    
    
    
    
    
    <div  class="container Raleway">
        <div class="row justify-content-center justify-content-around">
            
            @foreach ($announcements as $announcement)
            <div class="col-12 col-md-3 d-flex justify-content-around my-3">
                <div class="card cardCustom my-4">
                    <img src="{{ !$announcement->images()->get()->isEmpty()
                        ? $announcement->images()->first()->getUrl(300, 300)
                        : 'https://picsum.photos/200/200' }}"
                        class="card-img-top" alt="...">
                        
                        <div class="card-body">
                            <div>
                                <h5 class="card-title">{{ $announcement->title }}</h5>
                                <p class="card-text fw-semibold m-0">{{ __('ui.allPrezzo') }}:
                                    €{{ $announcement->price }}
                                </p>
                            </div>
                            
                            <div class="d-flex flex-column justify-content-between mt-1">
                                <div>
                                    <a href="{{ route('announcements.show', compact('announcement')) }}"
                                    class="btn btnCard btn-gradient"><i class="fa-solid fa-circle-info" style="color: #ffffff;"></i></a>
                                </div>
                                <div>
                                    <a href="" class="btn btnCard btn-gradient mt-2">
                                        {{ $announcement->category->name }}</a>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            {{-- Storage::url($announcement->images()->first()->path) --}}
            {{-- $announcement->images()->first()->getUrl(400,300) --}}
            
            <a href="#" class=" d-flex justify-content-end me-2"><button type="button" class="btn btnUltimi"><i class="fa-regular fa-circle-up fa-2x pt-1" style="color: #ffffff;"></i></button></a>
        </x-layout>
        