<?php

namespace Themes\Fala\Widgets\Treatments;

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
                'en' => 'Treatments'
            ],
            'description' => [
                'en' => 'Text description'
            ],
            'title_first' => [
                'en' => 'Physical'
            ],
            'img_first' => [
                'en' => ''
            ],
            'title_second' => [
                'en' => ''
            ],
            'img_second' => [
                'en' => ''
            ],
            'title_third' => [
                'en' => ''
            ],
            'img_third' => [
                'en' => ''
            ],
            'title_fourth' => [
                'en' => ''
            ],
            'img_fourth' => [
                'en' => ''
            ],


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
        return view($this->getPath('Treatments'), [
            'page' => $this->config['data'],
        ]);
    }
}
