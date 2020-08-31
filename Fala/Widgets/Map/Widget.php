<?php

namespace Themes\Fala\Widgets\Map;

use Kobe\Foundation\Widgets\BaseWidget;
use Modules\ContactUs\Services\LocationsService;

/**
 * Class Widget
 * @package Themes\Fala\Widgets\Map
 */
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
            'is_applied' => false],
        'data' => [
            'hash' => '',
            'description' => [
                'en' => 'Map',
            ]
        ],
        'view' => ['default'],
        'active' => 'default'
    ];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $locations = \App::make(LocationsService::class)->getPublished()?:false;
        return view($this->getPath('Map'), [
            'locations' => $locations,
            'page' => $this->config['data'],
             'title' => $this->config['data']['description'],
            'gmap_key' => config('core.gmap_key')
        ]);
    }
}
