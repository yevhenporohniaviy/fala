<?php
/**
 * @var array $buttons
 */
?>
@if(!empty($buttons))
    <div class="social-sharing">
        <div class="social-title">
            {{ __('theme::common.share', ['page' => $share_title]) }}
        </div>
        @if(isset($buttons['facebook']))
            <a class="social-link" href="https://www.facebook.com/sharer/sharer.php" target="_blank" onclick="javascript:window.open(this.href,
  '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
                <i class="fab fa-facebook-square"></i>
            </a>
        @endif
        @if(isset($buttons['twitter']))
            <a class="social-link" href="https://twitter.com/share?url={{ $url }}&text={{ $description }}"
               target="_blank" onclick="javascript:window.open(this.href,
  '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
                <i class="fab fa-twitter-square"></i>
            </a>
        @endif
        @if(isset($buttons['google_plus']))
            <a class="social-link" href="https://plus.google.com/share?url={{ $url }}" target="_blank" onclick="javascript:window.open(this.href,
  '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
                <i class="fab fa-google-plus"></i>
            </a>
        @endif
        @if(isset($buttons['linkedin']))
            <a class="social-link"
               href="https://www.linkedin.com/shareArticle?mini=true&url={{ $url }}&title={{ $title }}&source={{ config('app.url') }}"
               target="_blank" onclick="javascript:window.open(this.href,
  '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
                <i class="fab fa-linkedin-square"></i>
            </a>
        @endif
    </div>

@endif
