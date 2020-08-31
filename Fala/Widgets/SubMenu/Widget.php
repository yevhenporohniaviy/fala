<?php

namespace Themes\Fala\Widgets\SubMenu;

use Kobe\Foundation\Widgets\BaseWidget;

/**
 * Class Widget
 * @package Themes\Fala\Widgets\SubMenu
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
            'buttons' => [
                [
                    'title' => ['en' => '1'],
                ],
            ],

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
        return view($this->getPath('SubMenu'), [
            'buttons' => $this->config['data']['buttons']
        ]);
    }
}
