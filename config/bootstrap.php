<?php
/*
 * This file is part of the Engine framework.
 * (c) Mathias Methner <mathiasmethner@gmail.com>
 * Please view the LICENSE file
 */
error_reporting(-1);
ini_set('display_errors', 'on');

set_exception_handler([
    new \Engine\Core\Exception(),
    'exception'
]);

register_shutdown_function([
    '\Engine\Core\Exception',
    'fatal'
]);
