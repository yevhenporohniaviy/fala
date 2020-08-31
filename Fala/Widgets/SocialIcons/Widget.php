<?php

namespace Themes\Fala\Widgets\SocialIcons;

use Kobe\Foundation\Widgets\BaseWidget;
use Illuminate\Database\Eloquent\ModelNotFoundException;

/**
 * Class Widget
 * @package Themes\Fala\Widgets\SocialIcons
 */
class Widget extends BaseWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [
        'views' => ['default'],
        'active' => 'default'
    ];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $services = isset($this->config['services']) ? $this->config['services'] : null;

        return view($this->getPath('SocialIcons'), [
            'services' => $services ?: $this->getSocialServices(),
        ]);
    }

    /**
     * Get social network services to render widget group
     *
     * @return array
     */
    protected function getSocialServices()
    {
        try {
            $services = app('settings')->findByPath('smm')->value;
        } catch (ModelNotFoundException $e) {
            $services = [];
        }
        return $services;
    }
}
