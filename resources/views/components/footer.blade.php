<div id="FOOTER" class="container-fluid">
    <!-- Footer -->
    <footer class="text-center text-lg-start text-muted DMSans">

        <section class="d-flex justify-content-center justify-content-lg-between pt-5 pb-3 border-bottom">

            <div class="me-5 d-none d-lg-block fw-bold DMSans">
                <span>{{ __('ui.allConnettiti') }}:</span>
            </div>
            <div class="">

                <i class="fa-brands fa-facebook-f me-3"></i>


                <i class="fa-brands fa-x-twitter me-3"></i>


                <i class="fab fa-instagram me-3"></i>


                <i class="fab fa-linkedin me-3"></i>


                <i class="fab fa-github me-3"></i>

            </div>

        </section>

        <section class="">
            <div class="container-fluid DMSans text-center text-md-start mt-3">

                <div class="row mt-3">

                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

                        <h6 class="text-uppercase fw-bold mb-4">
                            <i class="fa-solid fa-earth-americas me-2"></i>
                            PRESTO.IT
                        </h6>
                        <p>
                            {{ __('ui.allPresto') }}
                        </p>         
                        <div class="dropdown-center">
                            <button class="btn btn-secondary dropdown-toggle btnUltimi Raleway" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-2x fa-language" style="color: #ffffff;"></i>
                            </button>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <x-_locale lang="it" />{{ __('ui.allIta') }}
                                </li>
                                <li class="nav-item">
                                    <x-_locale lang="en" />{{ __('ui.allIngl') }}
                                </li>
                                <li class="nav-item">
                                    <x-_locale lang="fr" />{{ __('ui.allFr') }}
                                </li>
                            </ul>
                          </div>
                    </div>
                    <div class="col-md-3 col-lg-2 col-xl-2"></div>

                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

                        <h6 class="text-uppercase fw-bold mb-4">
                           {{__('ui.allUtili')}}
                        </h6>

                        
                         
                        
                        <p>
                            <a href="{{route('formCv')}}" class="text-reset">{{__('ui.lavora')}}</a>
                        </p>
                        
                        
                        <p>
                            <a href="{{route('faq')}}" class="text-reset">FAQ</a>
                        </p>

                        <form action="{{route('become.revisor')}}" method="get">
                            @csrf
                            <button id="example"  type="submit" class="btn btn-secondary btnUltimi mb-2" data-bs-toggle="tooltip"
                            data-bs-placement="top" data-bs-custom-class="custom-tooltip"
                            data-bs-title="{{ __('ui.allMessage') }}">
                            {{ __('ui.allDivRevisore') }}
                        </button>
                        
                        </form>

                        {{-- <p>
                            <a href="#!" class="text-reset">{{ __('ui.allAiuto') }}</a>
                        </p> --}}
                        <h6 class="text-uppercase fw-bold  mt-5">
                            {{ __('ui.pagamento') }}
                        </h6>
                        <i class="fa-regular fa-credit-card fa-lg me-2"></i>
                        <i class="fa-regular fa-address-card fa-lg me-2"></i>
                        <i class="fa-solid fa-gift fa-lg me-2"></i>
                        <i class="fa-solid fa-wallet fa-lg"></i>


                    </div>
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-md-0 mb-4">

                        <h6 class="text-uppercase fw-bold mb-4">{{ __('ui.allContatti') }}</h6>
                        <p><i class="fa-solid fa-location-crosshairs me-3"></i>{{ __('ui.allBari') }}</p>
                        <p>
                            <i class="fa-regular fa-paper-plane me-3"></i>
                            presto@info.com
                        </p>
                        <p><i class="fa-solid fa-headset me-3"></i>0172 35 553</p>
                    </div>

                </div>

            </div>
        </section>



        <div class="text-center text-white pt-5 pb-2">
            © 2024 Aulab Copyright: <span class="ms-1 text-white fw-bold" href="/">Presto.it</span>
        </div>
    </footer>
    <!-- Footer -->
</div>
