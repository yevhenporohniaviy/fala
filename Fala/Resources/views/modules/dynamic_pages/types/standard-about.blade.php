
{{--<div class="container">--}}
    {{--<div class="row detail-banner justify-content-center">--}}
        {{--<div class="col-12">--}}
            {{--<div class="card ">--}}
                {{--<img class="card-new-img w-100" src="{{ imgFirstMedia($page->related_media) ?: '/themes/fala/img/no-image-landscape.png' }}?w=1100&h=420&fit=crop" alt="Card image">--}}
            {{--</div>--}}
            {{--<div class="row">--}}
                {{--<div class="col-12 col-md-10 offset-md-1">--}}
                    {{--<div class="detail-descrition pt-4 px-4">--}}
                        {{--<div class="title text-center mb-3">--}}
                            {{--{!! localeContent($page->translations)->summary !!}--}}
                        {{--</div>--}}
                        {{--<div class="text text-center">--}}
                            {{--{!! localeContent($page->translations)->description !!}--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}


<div class="container-fluid " id="nav-crumbs">
    <div class="row">
        <img src="{{ url('themes/fala/img/gb-crumbs.png') }}" class="bg-crumbs">
        <div class="container">
            <div class="crumb">
                <div class="page-title">
                    About FALA
                </div>
                <div class="page-crumbs">
                    <span><a href="#">Home</a></span><span><a href="#">About FALA</a></span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid " id="widget-scroll-to" data-toggle="affix"  >
    <div class="row">
        <div class="container">
            <div class="scroll-to-box d-flex justify-content-between align-items-center" >
                <div class="logo">
                    <img src="{{ url('themes/fala/img/logo.png') }}" alt="scroll-logo">
                </div>
                <div class="list-to">
                    <ul class="justify-content-center align-items-center mt-1">
                        <li><a href="#widget-our-story-about" class="active">Our Story</a></li>
                        <li><a href="#widget-mission-vision">Our Mission & Vision</a></li>
                        <li><a href="#widget-family">Our Family</a></li>
                        <li><a href="#widget-partners">Our Partners</a></li>
                    </ul>
                </div>
                <div class="open-list-to d-block d-md-none">
                    <i class="fas fa-angle-down"></i>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid page-section " id="widget-our-story-about">
    <div class="row">
        <div class="container">
            <div class="col-12">
                <div class="title text-center">Out Story</div>
                <div class="row revers-block">
                    <div class="col-12 col-md-6 my-2">
                        <div class="description text-transform">
                            FALA emerged from a good deed by the Alumni of Saint Joseph Antoura scouts et guides
                            group- ASG. Every Christmas the group members would lend a helping hand to those in
                            need, and in 2017, they ended up helping two families affected by FA.

                            They were able to provide them with some basic technical equipment and help them adapt
                            their homes to the needs of the family members affected with FA. This good deed ended up
                            turning into a long-term project, and Marianne, a member of the ASG Saint Joseph Antoura
                            scouts group made it her life’s mission to continue helping and serving those with FA in
                            Lebanon.

                            Marianne, who is also affected by FA, got her Masters in Media Studies and used her
                            thesis to tackle the deafening silence around FA in Lebanon. She met with various people
                            living with FA in the country.
                            The result was the NGO FALA, with the help of the Troupe committee.

                        </div>
                    </div>
                    <div class="col-12 col-md-6 my-2">
                        <div class="img">
                            <img class="img-fluid" src="{{ url('themes/fala/img/img-test2.png') }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid page-section " id="widget-mission-vision">
    <div class="row">
        <div class="container">
            <div class="col-12">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-6 d-flex my-3">
                        <div class="vision-mission-box vision-line"
                             data-aos="flip-up"
                             data-aos-duration="1000">
                            <div class="icon">
                                <img src="{{ url('themes/fala/img/vision-icon.png') }}" class="vision">
                            </div>
                            <div class="text">
                                <div class="title">
                                    Vision
                                </div>
                                <div class="description">
                                    Improve the quality of life of people living with FA in Lebanon through a
                                    holistic support program.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 d-flex my-3">
                        <div class="vision-mission-box mission-line"
                             data-aos="flip-up"
                             data-aos-duration="1000">
                            <div class="icon">
                                <img src="{{ url('themes/fala/img/mission-icon.png') }}" class="vision">
                            </div>
                            <div class="text">
                                <div class="title">
                                    Mission
                                </div>
                                <div class="description">
                                    Provide people living with FA with physical, medical and psychosocial support
                                    services enabling them to better manage their living conditions .
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid page-section " id="widget-family">
    <div class="row">
        <div class="container">
            <div class="col-12">
                <div class="title text-center">Our Family</div>
            </div>
            <div class="position-relative">
                <div class="family-slider">
                    <div class="col-12 col-md-3 family-item animatePulse"
                         data-aos="zoom-in">
                        <div class="card" data-toggle="modal" data-target="#modalFala">
                            <img class="card-img-top" src="{{ url('themes/fala/img/img-family1.png') }}"
                                 alt="Card image">
                            <div class="card-body text-center">
                                <div class="card-name">
                                    Marianne Hakim
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 family-item animatePulse"
                         data-aos="zoom-in">
                        <div class="card">
                            <img class="card-img-top" src="{{ url('themes/fala/img/img-family1.png') }}"
                                 alt="Card image">
                            <div class="card-body text-center">
                                <div class="card-name">
                                    Marianne Hakim
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 family-item animatePulse"
                         data-aos="zoom-in">
                        <div class="card">
                            <img class="card-img-top" src="{{ url('themes/fala/img/img-family1.png') }}"
                                 alt="Card image">
                            <div class="card-body text-center">
                                <div class="card-name">
                                    Marianne Hakim
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 family-item animatePulse"
                         data-aos="zoom-in">
                        <div class="card">
                            <img class="card-img-top" src="{{ url('themes/fala/img/img-family1.png') }}"
                                 alt="Card image">
                            <div class="card-body text-center">
                                <div class="card-name">
                                    Marianne Hakim
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 family-item animatePulse"
                         data-aos="zoom-in">
                        <div class="card">
                            <img class="card-img-top" src="{{ url('themes/fala/img/img-family1.png') }}"
                                 alt="Card image">
                            <div class="card-body text-center">
                                <div class="card-name">
                                    Marianne Hakim
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slick-arrow prev-family"><i class="fas fa-chevron-left"></i></div>
                <div class="slick-arrow next-family"><i class="fas fa-chevron-right"></i></div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid page-section " id="widget-partners">
    <div class="row">
        <div class="container">
            <div class="col-12 col-md-8 offset-md-2">
                <div class="title text-center">
                    Our Partners
                </div>
            </div>
            <div class="partners-content">
                <div class="row revers-block justify-content-center">
                    <div class="col-12 col-sm-6 col-md-6 col-lg-3 d-flex animatePulse"
                         data-aos="zoom-in-up"
                         data-aos-delay="50"
                         data-aos-duration="1000">
                        <a href="#" class="partner">
                            <img src="{{ url('themes/fala/img/FMQ-logo.png') }}" class="img-fluid mb-5">
                            <div class="partners-title">
                                FEER McQUEEN
                            </div>
                            <div class="partners-type">
                                Creative Agency
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-3 d-flex animatePulse"
                         data-aos="zoom-in-up"
                         data-aos-delay="50"
                         data-aos-duration="1000">
                        <a href="#" class="partner">
                            <img src="{{ url('themes/fala/img/intouch_logo.png') }}" class="img-fluid mb-5">
                            <div class="partners-title">
                                intouch
                            </div>
                            <div class="partners-type">
                                Digital Agency
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-3 d-flex animatePulse"
                         data-aos="zoom-in-up"
                         data-aos-delay="50"
                         data-aos-duration="1000">
                        <a href="#" class="partner">
                            <img src="{{ url('themes/fala/img/ASG-logo.png') }}" class="img-fluid mb-5">
                            <div class="partners-title">
                                ASG Antoura
                            </div>
                            <div class="partners-type">
                                Scouts Organization
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Family-->
<div class="modal fade modalFamily" id="modalFala" tabindex="-1" role="dialog" aria-labelledby="OuFamily" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content ">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <img src="{{ url('themes/fala/img/close.png') }}" alt="Close modal">
            </button>
            <div class="modal-body">
                <div class="container">
                    <div class="col-12 ">
                        <div class="row personal-info revers-block">
                            <div class="col-12 col-md-7 order-1 order-md-0">
                                <div class="row">
                                    <div class="name mb-4 ">Marianne Hakim</div>
                                    <div class="info">
                                        Marianne Hakim used to be a professional pianist and piano teacher before
                                        entering the marketing field. She is currently working at Orbit TV productions
                                        and in parallel handling the communication and marketing of the NGO ShareQ. She
                                        has a BA in Advertising and Marketing and a Master’s degree in Media-
                                        Advertising from Notre Dame University (NDU). Her thesis about the silence
                                        surrounding FA and patients’ behavior and beliefs in Lebanon is the backbone of
                                        FALA. Marianne is affected with FA, and the scout alumni committee of “Groupe
                                        Saint Joseph – Antoura”, which she belongs to, is her support group. She needs
                                        assistance to walk, but she follows up closely with all the research being done
                                        abroad and she is treated constantly through supplements, physical therapy, and
                                        exercise.
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-5 order-0 order-md-1">
                                <img class="card-img-top" src="{{ url('themes/fala/img/img-family1.png') }}"
                                     alt="Card image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>