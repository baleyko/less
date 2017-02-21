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
 * Runs match regex patter with a string and return named match groups.
 *
 * @param string $path
 * @param string $pattern
 * @return array
 */
function match(string $path, string $pattern) : array
{
    if (preg_match($pattern, $path, $vars)) {
        return $vars;
    }

    return [];
}
