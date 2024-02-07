<x-layout>





    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-3">
                <p class="lead text-center loginText Raleway fw-bold fs-2">{{__('ui.allRegistrati')}}</p>
            </div>
        </div>
    
    </div>
        <div id="CARDS" class="container-fluid Montserrat">
            <div class="row justify-content-center">
                <div class="col-6 ">
    
                    <form method="POST" action="{{route('register')}}" class=" carouselBorder carouselShadow bg-light p-3">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label fw-medium">{{ __('ui.allNome') }}</label>
                            <input type="text" class="form-control formLabel" name="name">
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-medium">{{__('ui.allEmail')}}</label>
                            <input type="email" class="form-control formLabel" name="email" placeholder="esempio@gmail.com">
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-medium">{{__('ui.allPassword')}}</label>
                            <input type="password" class="form-control formLabel" name="password" placeholder="•••••••">
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-medium">{{ __('ui.allConfermaPassword') }}</label>
                            <input type="password" class="form-control formLabel" name="password_confirmation" placeholder="•••••••">
                        </div>
                        
                        <button type="submit" class="btnModal btn btn-primary">{{ __('ui.allRegistrati') }}</button>
                    </form>
    
                </div>
            </div>
        </div>




















    {{-- <div class="container">
        <div class="row">
            <div class="col-8">

                <form method="POST" action="{{route('register')}}" class="carouselBorder carouselShadow bg-light p-3">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label  fw-medium">Nome utente</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email address</label>
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
        </div>
    </div> --}}

</x-layout>
