<?php

/*
 * This file is part of the Less package.
 *
 * (c) Valery Baleyko <baleyko@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Less\PDO;

/**
 * @param \PDO $pdo
 * @param string $query
 * @param array $params
 * @param string $class
 * @return object
 */
function object(\PDO $pdo, string $query, array $params = [], string $class = \stdClass::class) : array
{
    $stmt = $pdo->prepare((string) $query);
    $stmt->execute($params);
    return $stmt->fetchObject($class);
}
