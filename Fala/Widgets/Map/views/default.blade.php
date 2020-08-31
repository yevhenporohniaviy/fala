@php
    /**
    * @var array $location
    **/
$hash = '';
if(!empty($page['hash'])){
    $hash = $page['hash'];
}
@endphp
@if($locations)
    <div id="{{$hash}}" class="{{$hash !== '' ? 'page-section':''}}">
        <div class="container-fluid " id="widget-associations">
            <div class="row">
                <div class="container">

                    <div class="col-12 col-md-8 offset-md-2">
                        <div class="associations-title text-center">
                            {!!  localeContent($title) !!}
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row revers-block">
                            <div class="col-12 col-md-4 order-md-0 order-1 mb-4">
                                <ul class="list-associations">
                                    @foreach($locations as $item)
                                        <li onclick="initMap(this)"
                                            data-lat="{{ $item->lng }}"
                                            data-lng="{{ $item->lat }}">
                                            <a>{{ localeContent($item->translations)->title  }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="col-12 col-md-8 order-md-1 order-0 mb-4">
                                <div class="google-map" id="mapItem" style="width:100%; height:500px"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif


@section('map_scripts')
    <script>
        $(document).ready(() => {
            let headLocation = {lat: 32, lng: 22};
            let mapItem

            mapItem = new google.maps.Map(document.getElementById('mapItem'), {
                zoom: 13,
                center: headLocation
            })

            new google.maps.Marker({
                map: mapItem,
                animation: google.maps.Animation.BOUNCE,
                position: new google.maps.LatLng(headLocation.lat, headLocation.lng)
            })
        })

        function initMap(e) {
            let headLocation = {lat: parseFloat(e.getAttribute('data-lat')), lng: parseFloat(e.getAttribute('data-lng'))};
            let mapItem

            mapItem = new google.maps.Map(document.getElementById('mapItem'), {
                zoom: 13,
                center: headLocation
            })

            new google.maps.Marker({
                map: mapItem,
                animation: google.maps.Animation.BOUNCE,
                position: new google.maps.LatLng(headLocation.lat, headLocation.lng)
            })
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyApl4qzVxmXgU9cTN46H9AzmPaht8u9uQI"
            async defer></script>

@endsection
