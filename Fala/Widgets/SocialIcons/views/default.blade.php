<?php
/**
 * @var array $services
 */
?>

<div class="social-block d-flex align-items-center revers-block">
    @if(isset($services['facebook']))
        <a href="{{$services['facebook']}}" target="_blank"
           class="social-link d-flex justify-content-center align-items-center animatePulse">
            <i class="fab fa-facebook-f"></i>
        </a>
    @endif
    @if(isset($services['linkedin']))
        <a href="{{$services['linkedin']}}" target="_blank"
           class="social-link d-flex justify-content-center align-items-center animatePulse">
            <i class="fab fa-linkedin-in"></i>
        </a>
    @endif
    @if(isset($services['twitter']))
        <a href="{{$services['twitter']}}" target="_blank"
           class="social-link d-flex justify-content-center align-items-center animatePulse">
            <i class="fab fa-twitter"></i>
        </a>
    @endif
</div>


