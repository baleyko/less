<?php

/*
 * This file is part of the Less package.
 *
 * (c) Valery Baleyko <baleyko@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Less\Runtime;

/**
 * Nothing do beside of end script running.
 *
 * @param mixed $status
 * @return void
 */
function terminate($status = 0) : void
{
    exit($status);
}
