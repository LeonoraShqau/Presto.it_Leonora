<x-layout>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-5">
        <p class="lead text-center loginText Raleway fw-bold fs-2">
          {{ count($announcement_to_check)>0 ? __('ui.allMessRevisor') : __('ui.allMessRevisor2') }}
        </p>
      </div>
    </div>
  </div>
  
  @if($announcement_to_check)
  <div class="container mt-5">
    <div class="row">
      @foreach ($announcement_to_check as $announcement)
      <div class="col-12 d-flex justify-content-around my-2 backReview align-items-center shadow position-relative">
        <div class="col-3">
          <h5 class="card-title text-center">{{$announcement->title}}</h5>
        </div>
        <div class="col-3">
          <p class="m-0">{{__('ui.allCaricato')}}: {{$announcement->updated_at->format('d/m/Y')}}</p>
        </div>
        <div class="col-3 d-flex justify-content-center">
          <a class="btn btnCard btn-gradient my-2" href="{{ route('revisor.show', ['announcement_to_check' => $announcement]) }}">{{__('ui.allVedi')}}</a>
          
        </div>
      </div>
      @endforeach
    </div>
  </div>
  @endif
  
  
  @if ($denieds)
  
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-12 col-md-5">
        <p class="lead text-center loginText Raleway fw-bold fs-2">{{__('ui.rifiutati')}}</p>
      </div>
    </div>
  </div>
  
  <div class="container mt-5 mb-5">
    <div class="row">
      @foreach ($denieds as $denied)
      <div class="col-12 d-flex justify-content-around my-2 backReview align-items-center shadow">
        <div class="col-3">
          <h5 class="card-title text-center">{{$denied->title}}</h5>
        </div>
        <div class="col-3">
          <p class="m-0">{{__('ui.allRifiutato')}}: {{$denied->updated_at->format('d/m/Y')}}</p>
        </div>
        <div class="col-3 d-flex justify-content-center">
          <form action="{{ route('revisor.backInReview', ['announcement' => $denied]) }}"
            method="POST">
            @csrf
            @method('PATCH')
            <button type="submit" class="btn btnCard btn-gradient my-2">{{__('ui.allRivaluta')}}</button>
          </form>
        </div>
      </div>
      @endforeach
    </div>
  </div>
  @endif
  
</x-layout>
