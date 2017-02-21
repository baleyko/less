<?php

/*
 * This file is part of the Less package.
 *
 * (c) Valery Baleyko <baleyko@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Less\Dictionary;

/**
 * @param array $dict
 * @return \Closure
 */
function trans($dict) : string
{
    return function (string $key, int $index = 0) use ($dict) : string
    {
        $value = $dict[$key] ?? $key;

        return is_array($value) ? $value[$index] : $value;
    };
}
