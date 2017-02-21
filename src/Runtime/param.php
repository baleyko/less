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

const PARAM_REQUIRED = true;
const PARAM_OPTIONAL = false;
const PARAM_DEFAULT  = false;

/**
 * @param string $index
 * @param bool $flag
 * @return mixed
 */
function param(string $name, bool $flag = PARAM_DEFAULT)
{
    if (is_null($flag)) {
        $mask = $name;
    } else if ($flag) {
        $mask = sprintf('%s:', $name);
    } else {
        $mask = sprintf('%s::', $name);
    }

    $param = getopt($mask);

    if ($param) return $param[$name];
}
