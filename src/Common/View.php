<?php
/*
 * This file is part of the Engine framework.
 * (c) Mathias Methner <mathiasmethner@gmail.com>
 * Please view the LICENSE file
 */

namespace Engine\App\Common;

use Engine\App\Common\Tools\Path;
use Engine\App\Common\Tools\Url;

class View extends \Engine\Core\View
{
    /**
     *
     * @param string $template
     *            e.g. root::favicon.png
     * @return string
     */
    public function favicon($template): string
    {
        return file_exists(Path::image($template)) ? '<link rel="icon" href="' . Url::image($template) . '" type="image/png">' : '';
    }

    /**
     *
     * @param string $template
     *            e.g. root::stylesheet.css
     * @return string
     */
    public function stylesheet($template): string
    {
        return file_exists(Path::stylesheet($template)) ? '<link rel="stylesheet" href="' . Url::stylesheet($template) . '" type="text/css">' : '';
    }

}