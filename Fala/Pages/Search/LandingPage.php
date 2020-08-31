<?php

namespace Themes\Fala\Pages\Search;

use Modules\Core\Pages\AbstractPage;

/**
 * Class LandingPage
 * @package Themes\Fala\Pages\Search
 */
class LandingPage extends AbstractPage
{
    /**
     * Convert object to array
     *
     * @return mixed
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
}
