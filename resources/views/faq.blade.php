<x-layout>
    <div class="container">
        <div class="row justify-content-center Raleway">
          <h2 class="text-center fs-1 Raleway fw-bolder titlePages4">FAQ</h2>
            <div class="col-12 col-md-8 mt-5">
            <h3 class="text-center titlePages3 mb-5">{{__('ui.account')}}</h3>
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button accCustom collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne2" aria-expanded="false" aria-controls="flush-collapseOne">
                      {{__('ui.howAcc')}}
                    </button>
                  </h2>
                  <div id="flush-collapseOne2" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample2">
                    <div class="accordion-body">{{__('spiegAcc')}}</div>
                  </div>
                </div>
                <div class="accordion-item mt-3 mb-3">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed accCustom" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo2" aria-expanded="false" aria-controls="flush-collapseTwo">
                      {{__('ui.howPass')}}
                    </button>
                  </h2>
                  <div id="flush-collapseTwo2" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample2">
                    <div class="accordion-body">{{__('ui.modifMail')}}</div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed accCustom" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree2" aria-expanded="false" aria-controls="flush-collapseThree">
                     {{__('ui.whatAcc')}}
                    </button>
                  </h2>
                  <div id="flush-collapseThree2" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample2">
                    <div class="accordion-body">{{__('ui.sezPers')}}</div>
                  </div>
                </div>
              </div>

              <h3 class="text-center mt-4 titlePages3 mb-5">{{__('ui.crea')}}</h3>
              <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed accCustom" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                      {{__('ui.howCrea')}}
                    </button>
                  </h2>
                  <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">{{__('ui.artiCrea')}}</div>
                  </div>
                </div>
                <div class="accordion-item mt-3 mb-3">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed accCustom" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                     {{__('ui.artiWhy')}}
                    </button>
                  </h2>
                  <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">{{__('ui.artiAft')}}</div>
                  </div>
                </div>
                <div class="accordion-item mb-5">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed accCustom" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                      {{__('ui.artiWhere')}}
                    </button>
                  </h2>
                  <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">{{__('ui.artiFind')}}</div>
                  </div>
                </div>
              </div>


        </div>
    </div>
</div>

</x-layout>