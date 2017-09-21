<?php
/*
 * This file is part of the Engine framework.
 * (c) Mathias Methner <mathiasmethner@gmail.com>
 * Please view the LICENSE file
 */

namespace Engine\App\Common\Tools;

use Engine\Tools\Http;

abstract class Url
{

    /**
     *
     * @param string $template
     * @return string
     */
    public static function stylesheet($template): string
    {
        list ($component, $file) = Path::separate($template, true);
        $elements = [
            Http::current(),
            strtolower($component),
            'css',
            $file
        ];
        return implode('/', $elements);
    }

    /**
     *
     * @param string $template
     * @return string
     */
    public static function image($template): string
    {
        list ($component, $file) = Path::separate($template, true);
        $elements = [
            Http::current(),
            strtolower($component),
            'img',
            $file
        ];
        return implode('/', $elements);
    }
}