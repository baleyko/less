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
 * @param array $factories
 * @return \Closure
 */
function factory(array $factories = []) : \Closure
{
    return call_user_func(function () use ($factories) {
        static $factories = [];

        return function ($id) use ($factories) {
            static $registry = [];

            if (isset($registry[$id])) {
                return $registry[$id];
            }

            return $registry[$id] = $factories[$id] instanceof Closure
                ? $factories[$id]()
                : $factories[$id];
        };
    });
}
