<div>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-md-4">
                <h2 class="Raleway text-center mb-3 titlePages">{{__('ui.allMessCreate')}}</h2>
            </div>
            
        </div>
        <div class="row justify-content-center mb-3">
           @if (session()->has('message'))
            <div class="d-flex flex-row col-12 col-md-6 fs-4 messCreateBl justify-content-center alert alert-success my-2">
                {{ session('message') }}
            </div>
        @endif  
        </div>
       
    </div>


<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12 col-md-5">
<form wire:submit.prevent="store" class="Montserrat createFormBorder createFormShadow bg-light p-3">
        @csrf
        <div class="mb-3">
            <label class="form-label  fw-medium">{{__('ui.allNameProd')}}</label>
            <input wire:model.live="title" type="text" class="form-control  formLabel2 @error('title') is-invalid @enderror">
            @error('title')
                {{ $message }}
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label fw-medium">{{__('ui.allDescrizione')}}</label>
            <textarea wire:model.live="body" id="" cols="30" rows="3"
                class="form-control  formLabel2 @error('body') is-invalid @enderror">
            </textarea>
            @error('body')
                {{ $message }}
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label fw-medium">{{__('ui.allPrezzo')}}</label>
            <input wire:model.live="price" type="number" class="form-control  formLabel2 @error('price') is-invalid @enderror">
            @error('price')
                {{ $message }}
            @enderror
        </div>
        <div class="mb-3">
            <label for="category">{{__('ui.allCategorie')}}</label>
            <select wire:model.defer="category" id="category" class="form-control  formLabel2">
                <option value="">{{__('ui.allScegliCat')}}</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        @error('genresSelect')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="mb-3">
            <input wire:model="temporary_images" type="file" name="images" multiple class="form-control formLabel2 shadow @error('temporary_images.*') is-invalid @enderror" placeholder="Img">
            @error('temporary_images.*')
              <p class="text-danger mt-2">{{$message}}</p>
              @enderror
        </div>
        @if (!empty($images))
        <div class="">
            <div class="">
                <p>{{__('ui.allFotoPrev')}}</p>
                <div class=" border border-4 border-info rounded shadow py-4">
                    @foreach ($images as $key => $image)
                    <div class="col my-3">
                        <div class="img-preview mx-auto shadow rounded" style="background-image: url({{$image->temporaryUrl()}});"></div>
                        <button class="btn btnCard btn-gradient text-center d-block mt-2 mx-auto " type="button" wire:click="removeImage({{$key}})">{{__('ui.allCancella')}}</button>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
            
        @endif
        <button type="submit" class="btnCreate btn mt-2">{{__('ui.allPubblica')}}</button>
    </form>
        </div>

    </div>

</div>


    
    
</div>

