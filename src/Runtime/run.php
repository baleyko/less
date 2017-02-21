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
 * Require php file with enabled output bufferization,
 * extracts variable array in this scope and return the output content.
 *
 * @param string $filepath
 * @param array $vars
 * @return string
 * @throws \InvalidArgumentException
 */
function run(string $filepath, array $vars = []) : string
{
    $vars = (array) $vars;

    if (file_exists($filepath)) {
        extract($vars);
        ob_start();
        include $filepath;
        return ob_get_clean();
    }

    throw new \InvalidArgumentException();
}
