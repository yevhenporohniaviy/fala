<?php

namespace Themes\Fala\Widgets\WhatIsFa;

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
            'imgUrl' => [
                'en' => ''
            ],
            'title' => [
                'en' => 'WhatIsFa'
            ],
            'description' => [
                'en' => 'Text description'
            ],
            'title_first' => [
                'en' => 'FA in Lebanon'
            ],
            'link_first' => [
                'en' => 'sub title'
            ],
            'subtitle_first' => [
                'en' => 'sub title'
            ],
            'description_first' => [
                'en' => 'Text description'
            ],
            'title_second' => [
                'en' => 'FA in Lebanon'
            ],
            'link_second' => [
                'en' => 'sub title'
            ],
            'subtitle_second' => [
                'en' => 'sub title'
            ],
            'description_second' => [
                'en' => 'Text description'
            ],
            'title_third' => [
                'en' => 'FA in Lebanon'
            ],
            'link_third' => [
                'en' => 'sub title'
            ],
            'subtitle_third' => [
                'en' => 'sub title'
            ],
            'description_third' => [
                'en' => 'Text description'
            ],

        ],
        'config' => [
            'editable' => true,
            'is_visible' => true,
            'is_applied' => false
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
        return view($this->getPath('WhatIsFa'), [
            'page' => $this->config['data'],
        ]);
    }
}
