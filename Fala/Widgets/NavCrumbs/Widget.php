<?php

namespace Themes\Fala\Widgets\NavCrumbs;

use Kobe\Foundation\Widgets\BaseWidget;

/**
 * Class Widget
 * @package Themes\Fala\Widgets\NavCrumbs
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
            'is_visible' => true,
        ],
        'data' => [
            'description' => [
                'en' => 'Simple text widget description',
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
        return view($this->getPath('NavCrumbs'), [
            'content' => $this->config
        ]);
    }


    /**
     * Load main menu
     *
     * @param $alias
     * @return mixed
     */
    public function loadMenu($alias)
    {

    }
}
