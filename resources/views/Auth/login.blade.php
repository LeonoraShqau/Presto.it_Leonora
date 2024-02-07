<x-layout>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-6">
            <p class="lead text-center loginText Raleway fw-bold fs-2">{{__('ui.allMessLogin')}}</p>
        </div>
    </div>

</div>
    <div id="CARDS" class="container-fluid Montserrat">
        <div class="row justify-content-center">
            <div class="col-6 ">

                <form method="POST" action="{{route('login')}}" class=" carouselBorder carouselShadow bg-light p-3">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label fw-medium">{{__('ui.allEmail')}}</label>
                        <input type="email" class="form-control formLabel" name="email" placeholder="esempio@gmail.com">
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-medium">{{__('ui.allPassword')}}</label>
                        <input type="password" class="form-control formLabel" name="password" placeholder="•••••••">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">{{__('ui.allResta')}}</label>
                      </div>
                    <button type="submit" class="btn btn-primary btnModal">{{__('ui.allAccedi')}}</button>
                </form>

            </div>
        </div>
    </div>

</x-layout>
