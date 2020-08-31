<?php

namespace Themes\Fala\Modules\DynamicPages;

use Modules\DynamicPages\Generators\ImageGenerator as AbstractGenerator;

/**
 * Class ImageGenerator
 * @package Themes\Fala\Modules\DynamicPages
 */
class ImageGenerator extends AbstractGenerator
{
    /**
     * Get path to font
     *
     * @return string
     */
    public function getFontPath(): string
    {
        return base_path('themes/Fala/Assets/fonts/OpenSans-Regular.ttf');
    }

    /**
     * Get font size in pixels
     *
     * @return int
     */
    public function getFontSize(): int
    {
        return 15;
    }

    /**
     * Get color to fill text
     *
     * @return string
     */
    public function getFontColor(): string
    {
        return '#041e21';
    }
}
