<?php

namespace Themes\Fala\Widgets\LocaleSelector;

use Kobe\Foundation\Widgets\BaseWidget;

/**
 * Class Widget
 * @package Themes\Fala\Widgets\LocaleSelector
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
        return view($this->getPath('LocaleSelector'), [
            'locales' => $this->getLocales(),
        ]);
    }

    /**
     * Get array of locales
     *
     * @return array
     */
    protected function getLocales()
    {
        $locales = app('settings')->findByPath('locales')->value;

        return [
            'current' => $currentLocale = $this->extractLocale(app()->getLocale()),
            'supported' => collect($locales['secondary_locales'])
                ->push($locales['default_locale'])
                ->sort()
                ->filter(function ($locale) use ($currentLocale) {
                    return $locale != $currentLocale['key'];
                })
                ->map(function ($locale) {
                    return $this->extractLocale($locale);
                })
                ->toArray(),
            'all' => array_reverse(collect($locales['secondary_locales'])
                ->push($locales['default_locale'])
                ->sort()
                ->map(function ($locale) {
                    return $this->extractLocale($locale);
                })
                ->toArray())
        ];
    }

    /**
     * Extract full locale object by locale key
     *
     * @param $localeKey
     * @return mixed
     */
    protected function extractLocale($localeKey)
    {
        $locales = \LaravelLocalization::getSupportedLocales();
        return array_merge($locales[$localeKey], ['key' => $localeKey]);
    }
}
