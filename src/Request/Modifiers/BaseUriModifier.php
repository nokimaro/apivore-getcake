<?php

/*
 * This file is part of GetCake PHP Client.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Apivore\GetCake\Request\Modifiers;

use Apivore\Core\Contracts\HttpClient;
use Apivore\Core\Request\Modifier;

class BaseUriModifier extends Modifier
{
    public function apply()
    {
        $this->httpClient->setOption('base_uri', $this->httpClient->getConfig('domain'));

        return $this->httpClient;
    }
}
