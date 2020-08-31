<?php

namespace Themes\Fala\Pages\DynamicPages;

use Modules\Core\Pages\AbstractPage;

/**
 * Class LandingPage
 * @package Themes\Fala\Pages\DynamicPages
 */
class LandingPage extends AbstractPage
{
    /**
     * @var array
     */
    private $structure = [];

    /**
     * Get page content
     * @return array|mixed
     */
    public function toArray()
    {
        return $this->content;
    }

    /**
     * Extract header from content
     * @return mixed
     */
    public function getHeader()
    {
        return $this->content['header'];
    }

    /**
     * Prepare widgets set for page or group landing page
     * @param bool $isItForPage
     */
    public function setFilteredContent($isItForPage = false)
    {
        $this->structure = collect($this->content['structure'])
            ->filter(function ($item) use ($isItForPage) {
                if (!isset($item['config']['is_applied']) || !isset($item['config']['is_visible'])) {
                    return !$isItForPage;
                }
                return ($item['config']['is_applied'] === $isItForPage) && $item['config']['is_visible'];
            })
            ->toArray();
    }

    /**
     * Get widgets from page structure one by one
     * @return bool|mixed
     */
    public function pullNextWidget()
    {
        if (!empty($this->structure)) {
            return array_shift($this->structure);
        }
        return false;
    }
}
