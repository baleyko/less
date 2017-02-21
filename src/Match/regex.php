<?php

/*
 * This file is part of the Less package.
 *
 * (c) Valery Baleyko <baleyko@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Less\Match;

/**
 * Generates regular expression from a pattern in specified format.
 *
 * Examples:
 *    regex("/:page#integer?") => "/(?P<page>\d+)?"
 *
 * @param string $pattern
 * @return string
 */
function regex(string $pattern) : string
{
    return sprintf('|^%s$|', $pattern);
}
