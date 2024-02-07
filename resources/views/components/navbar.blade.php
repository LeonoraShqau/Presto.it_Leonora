{{-- <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid d-flex mx-auto">
        <a class="navbar-brand" href="{{ route('home') }}"><img id="logo" src="{{ asset('/img/LogoPresto.png') }}"
            alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse flex-column" id="categoriesDropdown">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li><a class="nav-link" href="{{route('announcements.index')}}"> Annunci</a></li>
               
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Categorie
                    </a>
                    <ul class="dropdown-menu">
                        @foreach ($categories as $category)
                        <li><a class="dropdown-item" href="{{route('categoryShow', compact('category'))}}">{{$category->name}}</a></li>
                        @endforeach
                        
                    </ul>
                </li>
                
                @guest
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <i class="fa-regular fa-circle-user"></i>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ route('register') }}"><i class="fa-solid fa-user-plus pe-2"></i> Registrati</a></li>
                    <li><a class="dropdown-item" href="{{ route('login') }}"><i class="fa-solid fa-user-check pe-2"></i> Accedi</a></li>
                </ul>
            </li>
            @else

            
            
            
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Benvenuto {{ Auth::user()->name }}
            </a>
            <ul class="dropdown-menu">
                <li>
                    <a class="dropdown-item" href="/logout"
                    onclick="event.preventDefault();getElementById('form-logout').submit();">Logout</a>
                </li>
                <form id="form-logout" action="{{ route('logout') }}" method="post" class="d-none">@csrf</form>
            </ul>
        </li>
        <li class="nav-item">
            <button id="btnAnnouncement" class="nav-link active" onclick="window.location.href='{{ route('announcements.create') }}'">
                <i id="iAnnouncement" class="fa-regular fa-square-plus pe-1"></i> Crea articolo
            </button>
        </li>
        
    </ul>
    @endguest
    <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
</div>
</div>
</nav> --}}
<!-- Button trigger modal -->

{{-- <div type="button" class="btn" > --}}

<a class="nav-link " href="#" role="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop"
    aria-expanded="false">
    <div id="iconCircle" class="iconAstro d-flex justify-content-center align-items-center">
        <i class="iconColor fa-solid fa-user-astronaut fa-2x"></i>
    </div>
</a>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">

    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Vuoi vendere i tuoi articoli?</h1>
                <button type="button" class="btn" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-meteor fa-2x"></i></button>
            </div>
            <div class="modal-body Montserrat">
                <div class="container-fluid ">
                    <div class="row align-items-center">
                      <div class="col-md-6">
                        {{-- REGISTRATI --}}
                        <form method="POST" action="{{route('register')}}">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Nome utente</label>
                                <input type="text" class="form-control" name="name">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Indirizzo e-mail</label>
                                <input type="email" class="form-control" name="email" placeholder="esempio@gmail.com">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Conferma Password</label>
                                <input type="password" class="form-control" name="password_confirmation">
                            </div>
                            <button type="submit" class="btn btn-primary">Registrati</button>
                        </form>
                      </div>
            {{-- ACCEDI --}}
                      <div class="col-md-6 ms-auto Montserrat">
                        <form method="POST" action="{{route('login')}}">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Indirizzo e-mail</label>
                                <input type="email" class="form-control" name="email" placeholder="esempio@gmail.com">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Rimani collegato</label>
                              </div>
                            <button type="submit" class="btn btn-primary">Accedi</button>
                        </form>
                      </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" id="btnUfo" class="btn Montserrat" data-bs-dismiss="modal"><img class="ufo me-2" src="{{asset('/img/ufo.png')}}" alt="">No grazie </button>
            </div>
        </div>
    </div>
</div>
