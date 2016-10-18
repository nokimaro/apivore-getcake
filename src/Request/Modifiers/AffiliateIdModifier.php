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

class AffiliateIdModifier extends Modifier
{
    public function apply()
    {
        $this->httpClient->addQuery('affiliate_id', $this->httpClient->getConfig('affiliateId'));

        return $this->httpClient;
    }
}
