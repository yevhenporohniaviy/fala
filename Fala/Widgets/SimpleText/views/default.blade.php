<?php
$hash = '';
if(!empty($content['hash'])){
    $hash = $content['hash'];
}
?>
<div id="{{$hash}}" class="{{$hash !== '' ? 'page-section':''}}">
<div class="container-fluid " id="widget-diagnosed-page">
    <div class="row">

        <div class="container">
            <div class="col-12 text-center text-section mb-3">
                {!! localeContent($content['description']) !!}
            </div>
        </div>
    </div>
</div>
</div>