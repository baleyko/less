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
 * @return array
 */
function column(\PDO $pdo, string $query, array $params = []) : array
{
    $stmt = $pdo->prepare((string) $query);
    $stmt->execute($params);
    return $stmt->fetchAll(\PDO::FETCH_COLUMN);
}
