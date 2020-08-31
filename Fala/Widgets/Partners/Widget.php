<?php

namespace Themes\Fala\Widgets\Partners;

use Kobe\Foundation\Widgets\BaseWidget;

/**
 * Class Widget
 * @package Themes\Fala\Widgets\Partners
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
            'is_applied' => false
        ],
        'data' => [
            'hash' => '',
            'buttons' => [
                [
                    'img' => ['en' => '/themes/fala/img/FMQ-logo.png'],
                    'title' => ['en' => 'Partner'],
                    'subtitle' => ['en' => 'developer'],
                    'externalUrl' => ['en' => '/'],
                    'internalUrl' => null,
                    'isExternal' => true
                ],
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
        return view($this->getPath('Partners'), [
            'buttons' => $this->config['data']['buttons'],
            'page' => $this->config['data'],
        ]);
    }
}
