@php
    /**
         * @var \Themes\Fala\Pages\DynamicPages\LandingPage $default_page
         */

    $departments = $page->team->sortBy('department.position')->groupBy('department_id');
    $isMultiple = $departments->count() > 1;

@endphp
{{--TeamMembers list--}}
{{--<section class="members-list">--}}
    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="team-description col-12 my-4">--}}
                {{--{!! localeContent($page->translations)->summary !!}--}}
            {{--</div>--}}
            {{--@if ($isMultiple)--}}
                {{--@foreach($departments as $department)--}}
                    {{--<section class="col-12 departments-list px-0">--}}
                        {{--<div class="title border-radius">--}}
                            {{--{{ localeContent($department->first()->department->translations)->title }}--}}
                        {{--</div>--}}
                        {{--@foreach($department as $member)--}}
                            {{--<div class="card-deck">--}}
                                {{--<div class="col-12 col-md-3 card department">--}}
                                    {{--<div class="card-body">--}}
                                        {{--<div class="member-title">--}}
                                            {{--{{ localeContent($member->translations)->name }}--}}
                                        {{--</div>--}}
                                        {{--<div class="member-vacancy">--}}
                                            {{--{{ localeContent($member->translations)->title }}--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--@endforeach--}}
                    {{--</section>--}}
                {{--@endforeach--}}
            {{--@else--}}
                {{--@if($departments->isNotEmpty())--}}
                    {{--@foreach($departments->first() as $member)--}}
                        {{--<div class="col-12 col-md-3 member">--}}
                            {{--<div class="card">--}}
                                {{--@if($member->photo)--}}
                                    {{--<img src="{{ $member->photo }}?w=255&h=255&fit=crop"--}}
                                         {{--class="member-img border-radius">--}}
                                    {{--<div class="card-footer">--}}
                                        {{--<div class="member-title">--}}
                                            {{--{{ localeContent($member->translations)->name }}--}}
                                            {{--<span class="member-vacancy">--}}
                                            {{--{{ localeContent($member->translations)->title }}--}}
                                        {{--</span>--}}
                                        {{--</div>--}}
                                        {{--<div class="member-description">--}}
                                            {{--{{ localeContent($member->translations)->biography }}--}}
                                        {{--</div>--}}
                                        {{--<div class="member-more">--}}
                                            {{--{{ __('theme::dynamic_pages.more') }}--}}
                                        {{--</div>--}}
                                        {{--<img src="{{ url('themes/fala/img/more-line.png') }}"--}}
                                             {{--alt="more line img">--}}
                                    {{--</div>--}}
                                {{--@else--}}
                                    {{--<div class="member-title">--}}
                                        {{--{{ localeContent($member->translations)->name }}--}}
                                    {{--</div>--}}
                                    {{--<div class="member-vacancy">--}}
                                        {{--{{ localeContent($member->translations)->title }}--}}
                                    {{--</div>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--@endforeach--}}
                {{--@endif--}}
            {{--@endif--}}

        {{--</div>--}}
    {{--</div>--}}
{{--</section>--}}

{{--<!-- Team Member Modal -->--}}
{{--<div class="modal fade team-member-modal" id="teamMemberModal" tabindex="-1" role="dialog" aria-hidden="true">--}}
    {{--<div class="modal-dialog modal-dialog-centered" role="document">--}}
        {{--<div class="modal-content container px-0">--}}
            {{--<button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
                {{--<span aria-hidden="true">&times;</span>--}}
            {{--</button>--}}
            {{--<div class="modal-body col-12 col-md-10">--}}
                {{--<div class="row">--}}
                    {{--<div class="col-12 col-md-4 mb-3">--}}
                        {{--<img class="member-img border-radius" src="https://picsum.photos/100/100">--}}
                    {{--</div>--}}
                    {{--<div class="col-12 col-md-8 text-block">--}}
                        {{--<div class="row">--}}
                            {{--<div class="col-12 member-title mb-0">--}}
                                {{--Saad Faeq AbdulAzeez--}}
                            {{--</div>--}}
                            {{--<div class="col-12 member-vacancy">--}}
                                {{--Board member--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-12 member-description">--}}
                        {{--Achievement: Bachelor of Statistics, Master of Computer Science--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}

{{--<div class="container-fluid " id="nav-crumbs">--}}
{{--    <div class="row">--}}
{{--        <img src="{{ url('themes/fala/img/gb-crumbs.png') }}" class="bg-crumbs">--}}
{{--        <div class="container">--}}
{{--            <div class="crumb">--}}
{{--                <div class="page-title">--}}
{{--                    What is FA--}}
{{--                </div>--}}
{{--                <div class="page-crumbs">--}}
{{--                    <span><a href="#">Home</a></span><span><a href="#">What is FALA</a></span>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<div class="container-fluid" >--}}
{{--    <div class="row">--}}
{{--        <div id="carouselWhatFa" class="carousel slide" data-ride="carousel">--}}
{{--            <ol class="carousel-indicators">--}}
{{--                <li data-target="#carouselWhatFa" data-slide-to="0" class="active"></li>--}}
{{--                <li data-target="#carouselWhatFa" data-slide-to="1"></li>--}}
{{--            </ol>--}}
{{--            <div class="carousel-inner">--}}
{{--                <div class="carousel-item carousel-item-video active">--}}
{{--                    <div class="shadow-video"></div>--}}
{{--                    <img class="img-fluid item-img" src="{{ url('themes/fala/img/img-test3.png') }}" alt="First slide">--}}
{{--                    <div class="carousel-caption">--}}
{{--                        <h5 class="title">Become Familiar With<br>--}}
{{--                            Friedreich's Ataxia</h5>--}}
{{--                        <a data-fancybox href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="btn-play mt-3">--}}
{{--                            <img src="{{ url('themes/fala/img/play_btn.png') }}" class="img-fluid animatePulse">--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="carousel-item carousel-item-video">--}}
{{--                    <div class="shadow-video"></div>--}}
{{--                    <img class="img-fluid item-img" src="{{ url('themes/fala/img/img-test3.png') }}" alt="First slide">--}}
{{--                    <div class="carousel-caption">--}}
{{--                        <h5 class="title">Become Familiar With<br>--}}
{{--                            Friedreich's Ataxia</h5>--}}
{{--                        <a data-fancybox href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="btn-play mt-3">--}}
{{--                            <img src="{{ url('themes/fala/img/play_btn.png') }}" class="img-fluid animatePulse">--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <a class="carousel-control-prev" href="#carouselWhatFa" role="button" data-slide="prev">--}}
{{--                <img src="{{ url('themes/fala/img/arrow-carousel-left.png') }}" class="img-fluid">--}}
{{--            </a>--}}
{{--            <a class="carousel-control-next" href="#carouselWhatFa" role="button" data-slide="next">--}}
{{--                <img src="{{ url('themes/fala/img/arrow-carousel-right.png') }}" class="img-fluid">--}}
{{--            </a>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<div class="container-fluid" id="widget-scroll-to" data-toggle="affix">--}}
{{--    <div class="row">--}}
{{--        <div class="container">--}}
{{--            <div class="scroll-to-box d-flex justify-content-between align-items-center">--}}
{{--                <div class="logo">--}}
{{--                    <img src="{{ url('themes/fala/img/logo.png') }}" alt="scroll-logo">--}}
{{--                </div>--}}
{{--                <div class="list-to">--}}
{{--                    <ul class="justify-content-center align-items-center mt-1">--}}
{{--                        <li><a href="#widget-definition-symptom" class="active">Definition & Symptoms </a></li>--}}
{{--                        <li><a href="#widget-causes">Causes of FA</a></li>--}}
{{--                        <li><a href="#widget-in-lebanon">FA in Lebanon</a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--                <div class="open-list-to d-block d-md-none">--}}
{{--                    <i class="fas fa-angle-down"></i>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}


{{--<div class="container-fluid page-section" id="widget-definition-symptom">--}}
{{--    <div class="row">--}}
{{--        <div class="container">--}}
{{--            <div class="col-12" data-aos="fade-right">--}}
{{--                <div class="row revers-block">--}}
{{--                    <div class="col-12 col-md-9 my-2 ">--}}
{{--                        <div class="description text-transform">--}}
{{--                            Friedreich's Ataxia, known as FA, is a recessive genetic neurodegenerative disease--}}
{{--                            manifested by disorders of the gait, control of movement, speech difficulties, lack of--}}
{{--                            balance and coordination of the upper limbs, along with muscle weaknesses associated with--}}
{{--                            other neurological signs, as well as cardiomyopathy ,diabetes, vision and hearing--}}
{{--                            impairment.--}}
{{--                            <br>--}}
{{--                            However symptoms and their degree of seriousness vary from one person to another.--}}
{{--                            It is important to note though that FA does not affect intellectual abilities.--}}
{{--                            Friedreich's Ataxia is named after a German neurologist, Nikolaus Friedreich, who, in 1863,--}}
{{--                            described this rare, inherited disease to the medical community. "Ataxia," which refers to--}}
{{--                            coordination problems such as clumsy or awkward movements and unsteadiness, occurs in many--}}
{{--                            different diseases and conditions.--}}
{{--                            Most individuals have onset of FA symptoms between the ages of 5 and 18 years. Adult or late--}}
{{--                            onset FA is less common – less than 25% of diagnosed individuals – and can occur anytime--}}
{{--                            during adulthood.--}}
{{--                            FA progresses gradually and can lead to immobility, where walking becomes impossible without--}}
{{--                            assistance after 10 to 20 years of evolution. Coordination and control of movement can get--}}
{{--                            heavier and speech can get hazier.--}}


{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-12 col-md-3 my-2 ">--}}
{{--                        <div class="img d-flex justify-content-center align-items-center align-items-center">--}}
{{--                            <img class="img-fluid" src="{{ url('themes/fala/img/body-symptom.png') }}">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<div class="container-fluid page-section" id="widget-causes">--}}
{{--    <div class="row">--}}
{{--        <div class="container">--}}
{{--            <div class="col-12" data-aos="fade-right">--}}
{{--                <div class="row revers-block">--}}
{{--                    <div class="col-12 col-md-3 my-2 order-1 order-md-0">--}}
{{--                        <div class="img  d-flex justify-content-center align-items-center align-items-center">--}}
{{--                            <img class="img-fluid" src="{{ url('themes/fala/img/DNA-icon.png') }}">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-12 col-md-9 my-2 order-0 order-md-1">--}}
{{--                        <div class="description text-transform">--}}
{{--                            FA is an inherited or single gene disorder, caused by mutations or DNA changes in the FXN--}}
{{--                            gene.--}}
{{--                            <br>--}}
{{--                            FA is inherited in an autosomal recessive manner, meaning that individuals with FA have two--}}
{{--                            mutated or abnormal copies of the FXN gene, this means both biological parents must be a--}}
{{--                            carrier of the disease for a child to be affected. It is estimated that 1 in 100 people are--}}
{{--                            carriers, but carriers do not exhibit symptoms of FA. Each such carrier parent has one--}}
{{--                            mutated gene (allele) and one normal gene (allele) in the FXN gene. Because each child gets--}}
{{--                            one of the mother’s genes and one of the father’s genes in this location, there are four--}}
{{--                            possible combinations of the genes passed down to the child, or a 25% chance that the child--}}
{{--                            will have FA.--}}
{{--                            <br>--}}
{{--                            The FA gene mutation limits the production of a protein called Frataxin. Frataxin is known--}}
{{--                            to be an important protein that functions in the Mitochondria (the energy producing--}}
{{--                            factories) of the cell. Frataxin helps to move Iron and is involved with the formation of--}}
{{--                            Iron-Sulfur clusters, which are necessary components in the function of the Mitochondria and--}}
{{--                            thus energy production. We also know that specific nerve cells (neurons) degenerate in--}}
{{--                            people with FA, and this is directly manifested in the symptoms of the disease.--}}

{{--                        </div>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

{{--<div class="container-fluid page-section" id="widget-in-lebanon">--}}
{{--    <div class="row">--}}
{{--        <img src="https://picsum.photos/1911/237" class="img-in-lebanon" >--}}
{{--        <div class="img-in-lebanon-bg"></div>--}}
{{--        <div class="container">--}}
{{--            <div class="col-12 col-md-10 offset-md-1 text-center">--}}
{{--                <div class="caption" data-aos="fade-up">--}}
{{--                    <div class="title mb-4">--}}
{{--                        There are 243 people in Lebanon diagnosed with Friedreich’s Ataxia,<br>--}}
{{--                        registered in the Ministry of Social Affairs. <span>This list was last updated in 2017.</span>--}}
{{--                    </div>--}}
{{--                    <a href="#" class="link animatePulse">www.socialaffairs.gov.lb/en/FA-list</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

