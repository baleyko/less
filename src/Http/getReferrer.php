<?php

/*
 * This file is part of the Less package.
 *
 * (c) Valery Baleyko <baleyko@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Less\Http;

/**
 * @return string
 */
function getReferrer() : string
{
    return $_SERVER['HTTP_REFERER'];
}
