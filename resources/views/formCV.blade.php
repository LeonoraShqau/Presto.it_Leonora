<x-layout>

    <div class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <h1 class="text-center titlePages p-2">{{__('ui.allTeam')}}</h1>

            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-7">
                
                <form method="POST" action="{{route('sendCv')}}" enctype="multipart/form-data" class="Montserrat createFormBorder createFormShadow bg-light p-3">
                    @csrf
                    <div class="mb-3">
                        <label  class="form-label fw-medium">{{__('ui.allNome')}}</label>
                        <input type="text" class="form-control formLabel2 @error('name') is-invalid @enderror" name="name">
                    </div>
                    <div class="mb-3">
                        <label  class="form-label fw-medium">{{__('ui.allEmail')}}</label>
                        <input type="email" class="form-control formLabel2 @error('email') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                    </div>
                    <div class="mb-3 d-flex flex-column">
                        <label for="exampleInputEmail1" class="form-label fw-medium">{{__('ui.lasciaMess')}}</label>
                        <textarea name="body" id="" cols="30" rows="5" class="formLabel2 @error('body') is-invalid @enderror"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label fw-medium">{{__('ui.CV')}}</label>

                        <input type="file" class="form-control formLabel2 @error('CV') is-invalid @enderror" name="CV" >
                    </div>
                    
                    <button type="submit" class="btn btnCard btn-gradient">{{__('ui.invia')}}</button>
                </form>
                
                
            </div>
        </div>
    </div>
    
    
    
    
    
    
    
    
    
    {{-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <p class="lead text-center loginText Raleway fw-bold fs-2">{{__('ui.allMessLogin')}}</p>
            </div>
        </div>
        
    </div>
    <div id="CARDS" class="container-fluid Montserrat">
        <div class="row justify-content-center">
            <div class="col-6 ">
                
                <form method="POST" action="{{route('sendCv')}}" class=" carouselBorder carouselShadow bg-light p-3">
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
    </div> --}}
    
</x-layout>