<?php

namespace Themes\Fala\Widgets\Subscribes;

use Kobe\Foundation\Widgets\BaseWidget;

/**
 * Class Widget
 * @package Themes\Praxis\Widgets\Subscribes
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
            'is_applied' => false,
            'is_visible' => true
        ],
        'data' => [
            'title' => [
                'en' => 'Subscribe
                 to our newsletter',
            ],
            'placeholder_name' => [
                'en' => "Enter your name",
            ],
            'placeholder_email' => [
                'en' => "Enter your email",
            ],
            'button_text' => [
                'en' => "Submit",
            ],
            'button_url' => ''
        ],
        'views' => ['default'],
        'active' => 'default'
    ];

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function run()
    {
        return view($this->getPath('Subscribes'), [
            'content' => $this->config['data']
        ]);
    }
}
