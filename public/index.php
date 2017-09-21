<?php
/*
 * This file is part of the Engine framework.
 * (c) Mathias Methner <mathiasmethner@gmail.com>
 * Please view the LICENSE file
 */

require_once(ENGINE_APP_ROOT . '/vendor/autoload.php');
require_once(ENGINE_APP_ROOT . '/config/autoload.php');
require_once(ENGINE_APP_ROOT . '/config/bootstrap.php');

\Engine\Core\Framework::run();
