<?php

namespace Themes\Fala\Widgets\EventsListMain;

use Kobe\Foundation\Widgets\BaseWidget;

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
        return view($this->getPath('EventsListMain'), [
            'events' => $this->config['events']
        ]);
    }
}
