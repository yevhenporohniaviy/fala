<?php

namespace Themes\Fala\Widgets\OurStory;

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
                'en' => 'Our story'
            ],
            'subtitle' => [
                'en' => 'Read more'
            ],
            'description' => [
                'en' => 'Text description'
            ],
            'link'=> ''
        ],
        'config' => [
            'editable' => true,
            'is_applied' => true,
            'is_visible' => true
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
        return view($this->getPath('OurStory'), [
            'page' => $this->config['data'],
        ]);
    }
}
