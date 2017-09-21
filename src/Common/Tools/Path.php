<?php
/*
 * This file is part of the Engine framework.
 * (c) Mathias Methner <mathiasmethner@gmail.com>
 * Please view the LICENSE file
 */

namespace Engine\App\Common\Tools;

abstract class Path extends \Engine\Tools\Path
{

    /**
     *
     * @param string $template
     * @return string
     */
    public static function image(string $template): string
    {
        list ($component, $file) = static::separate($template);
        $elements = [
            ENGINE_APP_ROOT,
            'public',
            strtolower($component),
            'img',
            $file
        ];
        return implode(DIRECTORY_SEPARATOR, $elements);
    }

    /**
     *
     * @param string $template
     * @return string
     */
    public static function stylesheet(string $template): string
    {
        list ($component, $file) = static::separate($template);
        $elements = [
            ENGINE_APP_ROOT,
            'public',
            strtolower($component),
            'css',
            $file
        ];
        return implode(DIRECTORY_SEPARATOR, $elements);
    }

    /**
     *
     * @param string $template
     * @return string
     */
    public static function javascript(string $template): string
    {
        list ($component, $file) = static::separate($template);
        $elements = [
            ENGINE_APP_ROOT,
            'public',
            strtolower($component),
            'js',
            $file
        ];
        return implode(DIRECTORY_SEPARATOR, $elements);
    }

}