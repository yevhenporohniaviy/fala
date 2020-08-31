<?php

namespace Themes\Fala\Widgets\ShareButtons;

use Kobe\Foundation\Widgets\BaseWidget;
use Illuminate\Support\Facades\Request;
use Modules\Core\Settings\Services\SettingsService;

/**
 * Class Widget
 * @package Themes\Fala\Widgets\ShareButtons
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
        $data = app()->make(SettingsService::class)->byPath('share')->value;
        $buttons = array_filter($data, function ($button) {
            return $button['active'];
        });

        return view($this->getPath('ShareButtons'), [
            'buttons' => $buttons,
            'url' => Request::url(),
            'config' => $this->config,
            'share_title' => $this->config['page']->shared_title,
            'title' => $this->config['page']->meta_title,
            'description' => $this->config['page']->meta_description,
            'image' => url('/' . $this->config['page']->shared_image),
            'generator' => function ($type) {
                return $this->generate($type);
            }
        ]);
    }

    private function generate($type = null)
    {
        dd($type);
    }


    private function linkedin($config = null)
    {
        dd($config);
    }

}
