<?php

namespace Themes\Fala\Widgets\MediaSlider;

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
            'editable' => false
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
        //
        return view($this->getPath('MediaSlider'), [
            'media' => $this->config['media']
        ]);
    }
}
