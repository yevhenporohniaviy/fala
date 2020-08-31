<?php
$hash = '';
if(!empty($content['hash'])){
    $hash = $content['hash'];
}
?>
<div id="{{$hash}}" class="{{$hash !== '' ? 'page-section':''}}">
<div class="container-fluid " id="simple-gray">
    <div class="row">
        <div class="container">
            <div class="col-md-6 col-12 offset-md-3 offset-0 text-center text-section mb-5">
                {!! localeContent($content['description']) !!}
            </div>
        </div>
        <div class="col-12 text-center title-section">
            {{localeContent($content['title']) }}
        </div>
    </div>
</div>
</div>