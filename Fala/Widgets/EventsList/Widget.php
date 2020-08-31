<?php

namespace Themes\Fala\Widgets\EventsList;

use Kobe\Foundation\Widgets\BaseWidget;
use Modules\Events\Services\EventsService;

class Widget extends BaseWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [
        'config' => [
            'editable' => true,
            'is_visible' => true,
            'is_applied' => false,
            'limit' => 3
        ],
        'data' => [
            'title' => [
                'en' => 'Events list widget title',
            ],
            'description' => [
                'en' => 'Widget text description about events list',
            ]
        ],
        'views' => ['default'],
        'active' => 'default'
    ];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {

        return view($this->getPath('EventsList'), [
            'events' => \App::make(EventsService::class)->getList(10)
        ]);
    }
}
