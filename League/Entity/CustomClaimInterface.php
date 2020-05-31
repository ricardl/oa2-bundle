<?php

namespace Trikoder\Bundle\OAuth2Bundle\League\Entity;

interface CustomClaimInterface
{
    /**
     * Return the user's identifier.
     *
     * @return array
     */
    public function getClaims();
}
