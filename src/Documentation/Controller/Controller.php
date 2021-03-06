<?php
/*
 * This file is part of the Engine framework.
 * (c) Mathias Methner <mathiasmethner@gmail.com>
 * Please view the LICENSE file
 */

namespace Engine\App\Documentation\Controller;

class Controller extends \Engine\Core\Controller
{

    /**
     *
     * @return void
     */
    public function overviewAction(): void
    {
        $this->view->snippet('Documentation::overview.phtml');
    }

    /**
     *
     * @return void
     */
    public function moduleAction(): void
    {
        $this->view->snippet('Documentation::module.phtml');
    }

    /**
     *
     * @return void
     */
    public function ossAction(): void
    {
        $this->view->snippet('Documentation::oss.phtml');
    }
}