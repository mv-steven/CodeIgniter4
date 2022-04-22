<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace CodeIgniter\Session\Handlers;

use CodeIgniter\Test\TestLogger;
use Config\Logger as LoggerConfig;

/**
 * @internal
 */
final class PredisHandlerTest extends RedisHandlerTest
{
    protected function getInstance($options = []): ?BaseHandler
    {
        parent::getInstance($options);
        $this->config->{'sessionDriver'} = 'CodeIgniter\Session\Handlers\PredisHandler';

        $handler = new PredisHandler($this->config, $this->config->ip);
        $handler->setLogger(new TestLogger(new LoggerConfig()));

        return $handler;
    }
}