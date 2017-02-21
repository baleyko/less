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
 * Sends headers to redirect a client to a specified url.
 *
 * @param string $url The url where a user will be redirected
 * @param int $code
 * @return void
 */
function redirect(string $url = '/', int $code = 302) : void
{
    switch ($code) {
        case 300:
            header('HTTP/1.1 300 Multiple Choices', true);
            break;
        case 301:
            header('HTTP/1.1 301 Moved Permanently', true);
            break;
        case 302:
            header('HTTP/1.1 302 Moved Temporarily', true);
            break;
        case 303:
            header('HTTP/1.1 303 See Other', true);
            break;
        case 304:
            header('HTTP/1.1 304 Not Modified', true);
            break;
        case 305:
            header('HTTP/1.1 305 Use Proxy', true);
            break;
        case 307:
            header('HTTP/1.1 307 Temporary Redirect', true);
            break;
        default:
            header('HTTP/1.1 301 Moved Permanently', true);
    }

    header(sprintf('Location: %s', $url), true);
}
