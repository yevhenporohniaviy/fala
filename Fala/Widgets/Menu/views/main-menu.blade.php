<?php
/**
 * @var \Modules\Core\MenuBuilder\Entities\Menu $menu
 */
?>
<div class="container-fluid" id="header" >
    <div class="container header-navbar">
        <nav class="navbar navbar-expand-lg">
            <div class="navbar-content d-flex ">
                <div class="">
                    <a class="navbar-brand" href="/">
                        <img src="{{ url('themes/fala/img/logo.png') }}" alt="main-logo">
                    </a>
                </div>
                <div class="">
                    <button  class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <div class="menu-burger">
                            <div id="burger-icon">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent" >
                        <ul class="navbar-nav">

                            @foreach($menu->structure as $item)

                                @if(isset($item['status']) && $item['status'] && (moduleEnabled($item['module']) || $item['module'] === '*'))
                                    @if(!empty($item['children']))
                                        <li class="nav-item dropdown">
                                            <a href="{{ url(localizedUrl(localeContent($item['url']))) }}" class=" nav-link {{ isActiveUrl(localeContent($item['url'])) ? 'active' : '' }}" >
                                                {{ localeContent($item['titles']) }}

                                            </a>
                                            <i class="fas fa-caret-down caret-nav" id="dropDownAbout" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false"></i>
                                            <ul class="dropdown-menu" aria-labelledby="dropDownAbout">

                                                @foreach($item['children'] as $children)

                                                        <a class="dropdown-item" href="{{ url(localizedUrl(localeContent($children['url']))) }}#{{localeContent($children['hash'])}}" attr-hash="{{localeContent($children['hash'])}}">
                                                            {{ localeContent($children['titles']) }}
                                                        </a>

                                                @endforeach
                                            </ul>
                                        </li>
                                    @else
                                        <li class="nav-item">
                                            <a class="nav-link {{ isActiveUrl(localeContent($item['url'])) ? 'active' : '' }}" href="{{ url(localizedUrl(localeContent($item['url']))) }}">  {{localeContent($item['titles'])}}</a>
                                        </li>
                                    @endif
                                @endif
                            @endforeach
                            @widget('locale-selector')
                        </ul>
                    </div>

                </div>
            </div>

        </nav>
    </div>
</div>


