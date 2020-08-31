<?php
/**
 * @var \Modules\Core\MenuBuilder\Entities\Menu $menu
 */
?>

<footer>
    <div class="container-fluid" id="footer">
        <div class="row">
            <div class="container">
                <div class="row revers-block">
                    <div class="col-12 col-md-9">
                        <div class="row">
                            <div class="col-12 sitemap">
                                {{ __('theme::footer.sitemap') }}
                            </div>
                            <div class="col-12 sitemap-list">
                                <div class="row revers-block">

                                    @foreach($menu->structure as $item)
                                        @if(isset($item['status']) && $item['status'] && (moduleEnabled($item['module']) || $item['module'] === '*'))
                                            <div class="col-6 col-md-3">
                                                <ul class="list">
                                                    <li class="title-section">
                                                        <a href="{{ url(localizedUrl(localeContent($item['url']))) }}"
                                                           class="{{ isActiveUrl(localeContent($item['url'])) ? 'active' : '' }}">
                                                            {{ localeContent($item['titles']) }}
                                                        </a>
                                                    </li>
                                                    @if(!empty($item['children']))
                                                        <ul class="child">
                                                            @foreach($item['children'] as $subitem)
                                                                <li>
                                                                    <a href="{{ url(localizedUrl(localeContent($subitem['url']))) }}#{{localeContent($subitem['hash'])}}"
                                                                       attr-hash="{{localeContent($subitem['hash'])}}"
                                                                       class="sub-link {{ isActiveUrl(localeContent($subitem['url'])) ? 'active' : '' }}">
                                                                        {{ localeContent($subitem['titles']) }}
                                                                    </a>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    @endif
                                                </ul>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        @widget('footer-contact-us')
                    </div>
                    <div class="col-12">
                        <div class="row sitemap-footer revers-block">
                            <div class="logo-footer"><img src="{{ url('themes/fala/img/logo-footer.png') }}"></div>
                            <div class="copyright">
                                {{ __('theme::common.copyright', ['year' => date('Y')]) }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
