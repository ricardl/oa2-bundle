<?php

declare(strict_types=1);

namespace Trikoder\Bundle\OAuth2Bundle\Model;

use League\OAuth2\Server\Entities\Traits\EntityTrait;
use League\OAuth2\Server\Entities\UserEntityInterface;

class UserEntity implements UserEntityInterface
{
    use EntityTrait;
    /** @var string|null */
    private $codProf;
    /** @var string|null */
    private $profile;
    /** @var string|null */
    private $username;
    /** @var string */
    private $id;

    /**
     * @return string|null
     */
    public function getUsername(): ?string
    {
        return $this->username;
    }

    /**
     * @param string|null $username
     */
    public function setUsername(?string $username): void
    {
        $this->username = $username;
    }

    /**
     * @return string|null
     */
    public function getCodProf(): ?string
    {
        return $this->codProf;
    }

    /**
     * @param string|null $codProf
     */
    public function setCodProf(?string $codProf): void
    {
        $this->codProf = $codProf;
    }

    /**
     * @return string|null
     */
    public function getProfile(): ?string
    {
        return $this->profile;
    }

    /**
     * @param string|null $profile
     */
    public function setProfile(?string $profile): void
    {
        $this->profile = $profile;
    }
}
