<?php

namespace Themes\Fala\Pages\Home;

use Modules\Core\Pages\AbstractPage;
use Modules\Core\Sliders\Repositories\Contracts\SlidersRepository;
use Modules\Events\Repositories\Contracts\EventsRepository;
use Modules\Events\Services\EventsService;

/**
 * Class LandingPage
 * @package Themes\Fala\Pages\Home
 */
class LandingPage extends AbstractPage
{
    /**
     * Convert object to array
     *
     * @return mixed
     */
    public function toArray()
    {
        return $this->content;
    }

    /**
     * @return mixed
     */
    public function getSlider()
    {
        $data = $this->extractWidget('homepage-slider')['data'];
        return $data;
    }
    public function getOurStory(){
        return $this->extractWidget('our-story')['data'];
    }
    public function getWhatIsFa(){
        return $this->extractWidget('what-is-fa')['data'];
    }
    public function getDiagnosedSlider(){
        $data = $this->extractWidget('diagnosed-slider')['data'];
        return $data;
    }
    public function getTreatments(){
        return $this->extractWidget('treatments')['data'];
    }
    public function getGetInvolved(){
        return $this->extractWidget('get-involved')['data'];
    }
    public function getSimpleText(){
        return $this->extractWidget('simple-text')['data'];
    }
    public function getEventsList(){
        $events = \App::make(EventsService::class)->getList(10);
        return $events;
    }
    public function getSubscribes(){
        return $this->extractWidget('subscribes')['data'];
    }
}
