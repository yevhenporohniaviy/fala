<?php

namespace Themes\Fala\Widgets\GetInvolved;

use Kobe\Foundation\Widgets\BaseWidget;

class Widget extends BaseWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [
        'data' => [
            'hash' => '',
            'title' => [
                'en' => 'GetInvolved'
            ],
            'title_first' => [
                'en' => ''
            ],
            'description_first' => [
                'en' => ''
            ],
            'link_first' => [
                'en' => ''
            ],
            'subtitle_first' => [
                'en' => ''
            ],
            'title_second' => [
                'en' => ''
            ],
            'description_second' => [
                'en' => ''
            ],
            'link_second' => [
                'en' => ''
            ],
            'subtitle_second' => [
                'en' => ''
            ],
            'title_third' => [
                'en' => ''
            ],
            'description_third' => [
                'en' => ''
            ],
            'link_third' => [
                'en' => ''
            ],
            'subtitle_third' => [
                'en' => ''
            ]


        ],
        'config' => [
            'editable' => true,
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
        return view($this->getPath('GetInvolved'), [
            'page' => $this->config['data'],
        ]);
    }
}
