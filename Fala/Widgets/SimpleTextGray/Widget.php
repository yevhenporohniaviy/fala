<?php

namespace Themes\Fala\Widgets\SimpleTextGray;

use Kobe\Foundation\Widgets\BaseWidget;

/**
 * Class Widget
 * @package Themes\Fala\Widgets\SimpleTextGray
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
            'is_applied' => true,
            'is_visible' => true
        ],
        'data' => [
            'hash' => '',
            'description' => [
                'en' => 'Simple text widget description',
                'ar' => 'Simple text widget description',
            ],
            'title' => [
                'en' => 'Title',
                'ar' => 'Title',
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
        return view($this->getPath('SimpleTextGray'), [
            'content' => $this->config['data']
        ]);
    }
}
