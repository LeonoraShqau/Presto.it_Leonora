<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- CDN fontawsome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer">
    {{-- CDN fonts google --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100;0,9..40,200;0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;0,9..40,800;0,9..40,900;0,9..40,1000;1,9..40,100;1,9..40,200;1,9..40,300;1,9..40,400;1,9..40,500;1,9..40,600;1,9..40,700;1,9..40,800;1,9..40,900;1,9..40,1000&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    {{-- <link rel="icon" type="image/x-icon" href="https://lorem.picsum/50/50"> --}}
    <title>{{$title ?? 'Presto.it'}}    </title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    <x-navbar2/>
    <x-header/>



    <div class="min-vh-100">
        {{$slot}}
    </div>
    <x-footer/>

    <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdrop2Label" aria-hidden="true">

    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header d-flex justify-content-end">
                <button type="button" class="btn" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-meteor fa-2x"></i></button>
            </div>
            <div class="modal-body Montserrat">
                <div class="container-fluid ">
                    <div class="row align-items-center">
                      <div class="col-md-6 borderModal">
                        <p class="lead mb-4 text-center modalTitle">{{ __('ui.allRegistrati') }}</p>
                        {{-- REGISTRATI --}}
                        <form method="POST" action="{{route('register')}}">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label fw-medium">{{ __('ui.allNome') }}</label>
                                <input type="text" class="form-control formLabel" name="name">
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-medium">{{ __('ui.allEmail') }}</label>
                                <input type="email" class="form-control formLabel" name="email" placeholder="esempio@gmail.com">
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-medium">{{ __('ui.allPassword') }}</label>
                                <input type="password" class="form-control formLabel" name="password" placeholder="•••••••">
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-medium">{{ __('ui.allConfermaPassword') }}</label>
                                <input type="password" class="form-control formLabel" name="password_confirmation" placeholder="•••••••">
                            </div>
                            <button type="submit" class="btnModal btn btn-primary">{{ __('ui.allRegistrati') }}</button>
                        </form>
                      </div>
            {{-- ACCEDI --}}
                      <div class="col-md-6 ms-auto Montserrat">
                        <p class="lead mb-4 text-center modalTitle">{{ __('ui.allAccedi') }}</p>
                        <form method="POST" action="{{route('login')}}">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label  fw-medium">{{ __('ui.allEmail') }}</label>
                                <input type="email" class="form-control formLabel" name="email" placeholder="esempio@gmail.com">
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-medium">{{ __('ui.allPassword') }}</label>
                                <input type="password" class="form-control formLabel" name="password" placeholder="•••••••">
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">{{ __('ui.allResta') }}</label>
                              </div>
                            <button type="submit" class="btnModal btn btn-primary">{{ __('ui.allAccedi') }}</button>
                        </form>
                      </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" id="btnUfo" class="btn Montserrat" data-bs-dismiss="modal"><img class="ufo me-2" src="{{asset('/img/ufo.png')}}" alt="">{{ __('ui.allNo') }}</button>
            </div>
        </div>
    </div>
</div>
</body>
</html>