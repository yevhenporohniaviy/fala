<div id="eventTravel"
     class="modal fade bd-example-modal-lg modalTravel modalEvents container"
     tabindex="-1"
     role="dialog"
     aria-labelledby="modalTravel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg  modal-dialog-centered">
        <div class="modal-content pb-5">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <img src="{{  url('/themes/fala/img/close-modal.png') }}">
            </button>
            <div class="container-fluid">
                <div class="w-100 d-flex justify-content-center">
                    <div class="loader">
                        <img src="{{ url('/themes/fala/img/loader.gif') }}" alt="">
                    </div>
                </div>
                <div class="api-response container px-0"></div>
            </div>
        </div>
    </div>
</div>
