<?php

namespace Themes\Fala\Widgets\FooterContactUs;

use Kobe\Foundation\Widgets\BaseWidget;
use Modules\ContactUs\Services\LocationsService;

/**
 * Class Widget
 * @package Themes\Fala\Widgets\FooterContactUs
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
        return view($this->getPath('FooterContactUs'), [
            'locations' => $locations,
        ]);
    }
}
