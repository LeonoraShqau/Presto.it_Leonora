<div id="navbar" class="container-fluid sticky-top w-100 mb-5">



    <div class="row mt-3 justify-content-center">
        <div id="menu" class=" col-2 col-md-1 d-flex">
            <button class="btn mt-3 d-flex justify-content-center align-items-center" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
                <i class="fa-solid fa-bars fa-2x">
                    
                </i>
            </button>

            <div class="offcanvas offcanvas-start bgOffcanvas" data-bs-scroll="true" tabindex="-1"
                id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
                <div class="offcanvas-header">
                    <h3 class="offcanvas-title Raleway" id="offcanvasWithBothOptionsLabel">Presto.it</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>

                <div class="offcanvas-body pb-0 pt-0">
                    @guest
                        <h4 class="Raleway">{{ __('ui.allCiao') }},</h4>
                        <h5 class="Raleway">{{ __('ui.allRegistrato') }}?</h5>
                        <button class="btn btn-primary pt-1 btnOffCanvas">
                            <a class="nav-link Raleway" href="#" role="button" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop2" aria-expanded="false">
                                {{ __('ui.allAccedi') }}
                            </a>
                        </button>
                    @endguest
                    <button class=" nav-link active Raleway mt-5 pb-2"
                        onclick="window.location.href='{{ route('announcements.create') }}'">
                        {{ __('ui.allCrea') }}
                    </button>
                    <a class="nav-link Raleway pb-2" href="{{ route('announcements.index') }}">{{ __('ui.allAnn') }}</a>
                    <li class=" Raleway nav-item dropdown pb-2">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            {{ __('ui.allCategorie') }}
                        </a>
                        <ul class="dropdown-menu categOffCanva">
                            @foreach ($categories as $category)
                                <li><a class="dropdown-item Raleway categOffCanva2"
                                        href="{{ route('categoryShow', compact('category')) }}">{{ __("ui.$category->name") }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>

                    <li>
                        <a href="{{route('formCv')}}" class="nav-link text-reset Raleway pb-2">{{__('ui.lavora')}}</a>
                    </li>
                    
                    
                    <li>
                        <a href="{{route('faq')}}" class="nav-link text-reset Raleway pb-2">FAQ</a>
                    </li>

                    <p>
                        <button id="example" href="{{ route('become.revisor') }}" type="button" class="mt-3 btn btn-secondary btnUltimi Raleway" data-bs-toggle="tooltip"
                            data-bs-placement="top" data-bs-custom-class="custom-tooltip"
                            data-bs-title="{{ __('ui.allMessage') }}">
                            {{ __('ui.allDivRevisore') }}
                        </button>
                    </p>

                    
                    <div class="d-flex">
                    <li class="nav-item">
                        <x-_locale lang="it" />
                    </li>
                    <li class="nav-item">
                        <x-_locale lang="en" />
                    </li>
                    <li class="nav-item">
                        <x-_locale lang="fr" />
                    </li>
                </div>
                </div>


            </div>

        </div>
        <div class="col-3 mt-3">
            <form id="searchJs" action="{{ route('announcements.search') }}" method="GET" class=""
                role="search">
                <div class="d-flex">
                    <input name="searched" class="form-control me-2  searchBar" type="search" placeholder="{{ __('ui.allCerca') }}"
                        aria-label="Search">
                    <button type="submit" class="input-group-text  searchBar2" id="">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </div>
            </form>
        </div>
        <div class="col-2 col-md-4 d-flex justify-content-center">
            <a class="navbar-brand d-flex justify-content-around align-items-center" href="{{ route('home') }}">
                <img class="me-3" id="LogoID" src="{{ asset('/img/Logo2Black.png') }}" alt="">
                <img class="logoSize ms-3" src="{{ asset('/img/PRESTOlogo.png') }}" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

        </div>
        <div class="col-4 d-flex justify-content-end">
            @guest
                <ul>
                    {{-- ASTRONAUTA --}}
                    <a class="nav-link AstroSize" href="#" role="button" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop2" aria-expanded="false">
                        <div id="iconCircle" class="iconAstro d-flex justify-content-center align-items-center">
                            <i class="iconColor fa-solid fa-user-astronaut fa-2x iconAstroColorWhite"></i>
                        </div>
                    </a>

                    <!-- Modal -->
                    {{-- FINE ASTRONAUTA --}}
                @else
                    {{-- DROPDOWN UTENTE LOGIN --}}
                    <div class="dropdown mt-1">
                        <button class="btn btnUtenteLogin" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        </button>

                        <ul class="dropdown-menu mt-3 dropdownUtente ">
                            
                            <li>
                                <p class="welcomeMessage Raleway fw-bold dropdown-item mb-4" href="#">{{ __('ui.allBenvenuto') }}
                                    {{ Auth::user()->name }}!</p>
                            </li>
                           
                            <li class="d-flex justify-content-center align-items-center">
                                <button class=" nav-link active d-flex align-items-center"
                                        onclick="window.location.href='{{ route('announcements.create') }}'">
                                    <p class=" Raleway fw-bold text-center">{{ __('ui.allCrea') }}</p>
                                </button>  
                            </li>
                            <li class="d-flex justify-content-center align-items-center">
                                <button class=" nav-link active d-flex align-items-center"
                                        onclick="window.location.href='{{ route('announcements.personal') }}'">
                                    <p class=" Raleway fw-bold text-center">{{__('ui.account')}}</p>
                                </button>  
                            </li>
                                
                                   
                            
                            @if (Auth::user()->is_revisor)
                                <li><a class="nav-link btn Raleway revisionBtn p-2 fw-bold position-relative m-3"
                                        aria-current="page" href="{{ route('revisor.index') }}">{{ __('ui.allRevisione') }}
                                        <span
                                            class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-info">{{ App\Models\Announcement::toBeRevisionedCount() }}
                                            <span class="visually-hidden">unread message</span>
                                        </span>
                                    </a>
                                </li>
                            @endif
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item text-center Raleway text-danger fw-bold" href="/logout"
                                    onclick="event.preventDefault();getElementById('form-logout').submit();">{{ __('ui.allLogout') }}</a>
                            </li>
                            <form id="form-logout" action="{{ route('logout') }}" method="post" class="d-none">@csrf
                            </form>
                        </ul>
                    </div>
                    {{-- DROPDOWN FINITO --}}
                </ul>
            @endguest
        </div>

    </div>
    <div class="row mt-4 rowSearch2 justify-content-center">
        <div id="searchJs2" class="col-6 d-block mb-3">
            <form action="{{ route('announcements.search') }}" method="GET" class="d-flex" role="search">
                <input name="searched" class="searchBar form-control me-2 searchBar" type="search"
                    placeholder="{{ __('ui.allCerca') }}" aria-label="Search">
                <button type="submit" class="input-group-text searchBar2" id=""><i
                        class=" fa-solid fa-magnifying-glass"></i>
                </button>
            </form>
        </div>
    </div>

</div>
{{-- <div class="container-fluid mt-5">
    <div class="row justify-content-center mt-5 pt-5 mb-3 pb-2 mx-auto">
        <div class="col-10 d-flex justify-content-around flex-wrap">
            @foreach ($categories as $category)
                <button id="" type="button" 
                    class=" btn btn-custom fs-6 fw-bold Raleway mb-1">{{ $category->name }}</button>
            @endforeach
        </div>
    </div>
</div> --}}
