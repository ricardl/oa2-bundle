<?php

namespace Trikoder\Bundle\OAuth2Bundle\League\Entity\Traits;

trait CustomClaimTrait
{
    /** @var array */
    protected $claims = [];

    /**
     * Associate a scope with the token.
     * @param array $claims
     */
    public function addClaims(array $claims)
    {
        foreach ($claims as $key => $value) {
            $this->claims[$key] = $value;    
        }
    }

    /**
     * Return an array of claims associated with the token.
     * @return array
     */
    public function getClaims()
    {
        return $this->claims;
    }
}
