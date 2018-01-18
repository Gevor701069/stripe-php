<?php

namespace Stripe\Util;

class RandomGenerator
{
    /**
     * Returns a random value between 0 and $max.
     *
     * @param float $max (optional)
     * @return float
     */
    public function randFloat($max = 1.0)
    {
        return mt_rand() / mt_getrandmax() * $max;
    }
}
